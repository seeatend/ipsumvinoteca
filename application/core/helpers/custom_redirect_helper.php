<?php

/*
 * This is Custom redirect hendler page
 * Description : Heandel All Redirect url...
 * Authour : Maneesh Tiwari || Shiv Tiwari
 * 
 */

function redirect_to($url) {
    if (!empty($url)) {
        redirect($url);
    }
}

function shorter($text, $chars_limit) {
    // Check if length is larger than the character limit
    if (strlen($text) > $chars_limit) {
        // If so, cut the string at the character limit
        $new_text = substr($text, 0, $chars_limit);
        // Trim off white space
        $new_text = trim($new_text);
        // Add at end of text ...
        return $new_text;
    }
    // If not just return the text as is
    else {
        return $text;
    }
}

function getAdmin($type_id = '') {
    $arrAdminType = array('1' => 'Super Admin', '2' => 'Admin');
    if (!empty($type_id)) {
        return $arrAdminType[$type_id];
    } else {
        return $arrAdminType;
    }
}
function custom_current_url()
{
    $CI =& get_instance();

    $url = $CI->config->site_url($CI->uri->uri_string());
    return $_SERVER['QUERY_STRING'] ? $url.'?'.$_SERVER['QUERY_STRING'] : $url;
}
function random_shortUrl_string($length) {
    $key = '';
    $keys = array_merge(range(0, 9), range('a', 'z'), range('A', 'Z'));

    for ($i = 0; $i < $length; $i++) {
        $key .= $keys[array_rand($keys)];
    }

    return $key;
}
function getFacebookUserImage($fbId,$param){
    return "http://graph.facebook.com/$fbId/picture?$param";
}

function get_session_data(){
	$CI =& get_instance();
	return $CI->custom_session->custom_userdata('baba_cf');
}
function get_admin_type(){
	$CI =& get_instance();
	$session_data = $CI->custom_session->custom_userdata('user_admin');
	return $session_data['admin_type'];
}