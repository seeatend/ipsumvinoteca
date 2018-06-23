<?php
/* 
 * This is Auth library page
 * Description : getting all data related user
 * Authour: Maneesh Tiwari || Shiv Tiwari
 */

class Auth{
    private $CI;
    public function __construct() {
        $this->CI = &get_instance();
        $this->CI->load->model('frontend/User_Model');
    }
    
    public function isLogin($dataCheck){
        //echo "<pre>";print_r($this->CI->custom_session);exit;
        $userData = $this->CI->custom_session->custom_userdata($dataCheck);
        return (!empty($userData))?true:false;
    }
    
    public function isLoginCustomer($dataCheck){
        //echo "<pre>";print_r($this->CI->custom_session);exit;
        //var_dump($dataCheck);exit;
        $userData = $this->CI->custom_session->custom_userdata($dataCheck);
        return (!empty($userData))?true:false;
    }
    
    public function isLoginCheck($type='',$dataCheck){
        
        $check =  $this->isLogin($dataCheck);
        
        if($type=='login'){
            if($check){
                redirect_to('dashborad');
            }
        } else {
            if(!$check){
                redirect_to('login');
            }
        }
    }
    public function isLoginCheckFront($type='',$dataCheck){
        
        $check =  $this->isLogin($dataCheck);
        $this->CI->custom_session->custom_unset_userdata('reffer_url');
        if($type=='login'){
            if($check){
                redirect_to(base_url('my-account'));
            }
        } else {
            if(!$check){
                $currentUrl = (!empty(custom_current_url()))?'?url='.custom_current_url():'';
                redirect_to(base_url('auth/login'.$currentUrl));
            }
        }
    }
    
    function logout($field,$url){
	$this->CI->custom_session->custom_unset_userdata($field);
        redirect_to($url);
    }
    
    function formatted_userdata($field){
        $userData = $this->CI->custom_session->custom_userdata($field);
        $arrUser = array();
        if(count($userData) > 0){
             $arrUser = $this->CI->User_Model->getUserDetail($userData['id']);
             if(count($arrUser)){
                 $arrUser = $arrUser[0];
             }
        }
        return $arrUser;
    }
    
    public function encode_json($data){
        if(!empty($data)){
          return  json_encode($data);
        } 
    }
}

