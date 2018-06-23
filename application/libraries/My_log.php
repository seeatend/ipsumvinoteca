<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
class My_log extends CI_Log {

    function My_log(){

        parent::__construct();

    }

    function write_log($level = 'error', $msg, $php_error = FALSE){

        $result = parent::write_log($level, $msg, $php_error);

        if ($result == TRUE && strtoupper($level) == 'ERROR') {

            $message = "An error occurred: \n\n";
            $message .= $level.' - '.date($this->_date_fmt). ' --> '.$msg."\n";

            $this->CI =& get_instance();
            $to = "meet_mandeliya@yahoo.com";
            $from_name = 'info@wam360.com';
            $from_address = 'BABA App';

            $subject = 'An error has occured';
             $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
            $headers = "From: $from_name <$from_address>" . "\r\n";
           

            mail($to, $subject,"{$message}" , $headers);

        }

        return $result;

    }
}