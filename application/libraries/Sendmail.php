<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/*
 * Handle all common functionality of front and backend as well
 * @author Hemant Mandeliya 
 * Date:06/APR/2017
 */

class Sendmail {

    private $arrCofData;

    public function init($argArrData){
        $this->arrCofData['to'] = $argArrData['to'];
        $this->arrCofData['from'] = (!empty($this->arrCofData['from'])) ? $this->arrCofData['from'] : "admin@prolific360.com";
        $this->arrCofData['subject'] = $argArrData['subject'];
        $this->arrCofData['body'] = $argArrData['body'];
        return $this->sendEMail();
    }

    public function sendEMail(){
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= "From: <{$this->arrCofData['from']}>" . "\r\n";
        return mail($this->arrCofData['to'], $this->arrCofData['subject'], $this->arrCofData['body'], $headers);
    }


    /*
     * calculate the percentage
     */
 /*
    public function Email($emailtitle, $varEmailData) {
        $result = $this->CI->Common_Model->getMailSendDetailBytitle($emailtitle);
        if (!empty($result)) {
             //var_dump($result);
            $data['email'] = $varEmailData['email'];
            $view = $result->email_body; // this will return you html data as message
            !empty($varEmailData['name'])?  $view =str_replace("{name}", $varEmailData['name'], $view):'';
            $view = str_replace("{email}", $varEmailData['email'], $view);
            !empty($varEmailData['password'])?  $view =str_replace("{password}", $varEmailData['password'], $view):'';
            !empty($varEmailData['project_title'])?  $view =str_replace("{project_title}", $varEmailData['project_title'], $view):'';
            !empty($varEmailData['project_trackingid'])? $view = str_replace("{project_trackingid}", $varEmailData['project_trackingid'], $view):'';
            !empty($varEmailData['project_id'])? $view = str_replace("{project_id}", $varEmailData['project_id'], $view):'';
            !empty($varEmailData['forget_password'])? $view = str_replace("{forget_password}", $varEmailData['forget_password'], $view):'';
            !empty($varEmailData['order_id'])? $view = str_replace("{order_id}", $varEmailData['order_id'], $view):'';
            !empty($varEmailData['amount'])? $view = str_replace("{amount}", $varEmailData['amount'], $view):'';
            !empty($varEmailData['url'])? $view = str_replace("{url}", $varEmailData['url'], $view):'';
            $from = "info@wam360.com";
            $to = $varEmailData['email'];
            $subject = $result->email_subject;
            // Always set content-type when sending HTML email 
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
            // More headers 
            $headers .= 'From: ' . $from . " \r\n";
            $message = html_entity_decode($view);
          //  echo $message;
            if (!mail($to, $subject, "{$message}", $headers)) {
                return false;
            } else { // successfull message
                return true;
            }
            //https://www.sendwithus.com/resources/templates/neopolitan
            //https://templates.campaignmonitor.com/canvas/design/13-the-blueprint-3#/firstrun
         //   return true;
        }
    }

    function sendWeeklyMail() {
        if (!$this->session->userdata('some'))
            redirect('admin/admin', 'refresh');
        $data = $this->admin_model->getUserData();
        foreach ($data as $u) {
            $this->email->clear();

            $this->email->to($u->Email);
            $this->email->from('your@example.com');
            $this->email->subject('Here is your info ' . $name);
            $this->email->message('email/report', $data, 'true');
            $this->email->send();
        }
    }
   */
}
