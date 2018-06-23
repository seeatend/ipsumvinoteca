<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function translate($key){
  
 $key = explode(".", $key);
 $ci = & get_instance();
 $ci->load->model('admin/Management_model');  
 $languageData = $ci->Management_model->getDumpedData($key[0]);
 $land_code = $ci->input->cookie(LANGUAGE_COOKIE_KEY);
 $land_code = (!empty($land_code))?$land_code:'eng';
 if(!empty($languageData->lang_data)){
     $languageData = unserialize($languageData->lang_data);
     $findKey = array_search($key[1], $languageData['key']);
     return $languageData[$land_code][$findKey];
 }
}