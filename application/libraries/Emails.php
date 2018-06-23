<?php

/*
 * To handle all email after change status
 */

class Emails {

    public function __construct() {
        ;
    }

    /*
     * handle all email sending through send grid api
     * @param $arrData
     * @return void
     * @author Shiv Kumar Tiwari
     * @date 16 dec 2017
     */

    public function sendMailViaGrid($argArrData) {
        //$to,$toname,$subject,$link
        $url = 'https://api.sendgrid.com/api/mail.send.json';
        $data = array(
            "api_user" => "shiv@codeyiizen",
            "api_key" => "Shiv@francesco123",
            "to" => $argArrData['to'],
            "toname" => $argArrData['name'],
            "subject" => $argArrData['subject'],
            "html" => $argArrData['body'],
            "from" => "ipsum.vinoteca@gmail.com"
        );
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $json_dec = curl_exec($ch);
        //$json_dec = json_encode($response, true);
        curl_close($ch);
        //return $json_dec;
    }

    /*
     * Handles all status changes select the related email
     * @param $arrData
     * @return void
     * @author Shiv Kumar Tiwari
     * @date 18 july 2017
     */

    public function queryemail($post) {
        $msg = '';
        $msg .= "<h1>Contact Enquiry</h1>";
        $msg .= "<h4>Detail</h4>";
        //  $msg .= "Name: <strong>{$post['first_name']} {$post['last_name']}</strong>";
        $msg .= "Name: <strong>{$post['contact_name']}</strong>";

//              $msg .= "Name: <strong>{$post['name']}</strong><br>";
        // $msg .= "Phone: <strong>{$post['phone']}</strong><br>";
        $msg .= "Email: <strong>{$post['contact_email']}</strong><br>";
        $msg .= "phone: <strong>{$post['contact_phone']}</strong><br>";
        // $msg .= "Email: <strong>{$post['email']}</strong><br>";
        //  $msg .= "Date: <strong>" . date('d-m-Y H:i:s') . "</strong><br>";
        $msg .= "Address: <strong>{$post['address']}</strong><br>";
        $msg .= "City: <strong>{$post['city']}</strong><br>";
        $msg .= "Post Code: <strong>{$post['post_code']}</strong><br>";
        $msg .= "Meesage: <strong>{$post['message']}</strong><br>";
        $msg .= "";
        return $msg;
    }

    public function bookingemail($post) {
        $msg = '';
        $msg .= "<h1>Booking Detail</h1>";
        $msg .= "Name: <strong>{$post['customer_name']}</strong><br>";
        $msg .= "Phone: <strong>{$post['customer_phone']}</strong><br>";
        $msg .= "Email: <strong>{$post['customer_email']}</strong><br>";
        $msg .= "Date: <strong>" . date('d-m-Y H:i:s') . "</strong><br>";
        $msg .= "Meesage: <strong>{$post['customer_message']}</strong><br>";
        $msg .= "";
        return $msg;
    }

}
