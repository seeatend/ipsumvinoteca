<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Home
 *
 * @author Abhishek
 */
class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Home_model');
        $this->load->library('Emails');
        $this->load->library('layout');
        $this->load->helper('url');
        $this->load->library('form_validation');
    }

    public function index() {
        $this->load->view('front/index');
    }
    public function welcome(){
        $data = array();
        $post = $this->input->post();
        if (!empty($post)) {
            if($post['action'] == 'booking') {
                $data = array('customer_name ' => $post['customer_name'],
                    'customer_phone ' => $post['customer_phone'],
                    'customer_email' => $post['customer_email'],
                    'customer_message' => $post['customer_message']);
                $insert_data = $this->Home_model->onlinebookingmodel($data);
                $this->load->library('Emails');
                $to = (!empty($post['customer_name'])) ? $post['customer_name'] : 'NA';
                $subject = 'Contact Enquiry';
                $msg = $this->Emails->bookingemail($post);
                $this->Emails->sendMailViaGrid(array('to' => $to, 'name' => "Ipsumvinoteca Team", 'subject' => $subject, 'body' => $msg));
                $this->Emails->sendMailViaGrid(array('to' => "ipsum.vinoteca@gmail.com", 'name' => "Ipsumvinoteca Team", 'subject' => $subject, 'body' => $msg));
                $this->custom_session->custom_set_flashdata("success", "Your Mesage send Successfully");
            } else if($post['action'] == 'newsletter') {
                $data = array('name' => $post['name'],
                    'birth_date' => $post['birthDate'],
                    'email' => $post['email'],
                    'address' => $post['address']);
                $insert_data = $this->Home_model->saveNewsletter($data);
                $this->custom_session->custom_set_flashdata("success", "Catch newsletter successfully");
            }
            redirect(base_url('welcome'));
        }
        $this->load->view('front/layout/head');
        $this->load->view('front/layout/header');
        $this->load->view('front/welcome');
        $this->load->view('front/layout/footer');
    }
    
    public function our_story(){
        $this->load->view('front/layout/head');
        $this->load->view('front/layout/header');
        $this->load->view('front/our_story');
        $this->load->view('front/layout/footer');
    }
    
    public function restaurant(){
        $this->load->view('front/layout/head');
        $this->load->view('front/layout/header');
        $this->load->view('front/restaurant');
        $this->load->view('front/layout/footer');
    }
    
    public function wine_bar(){
        $this->load->view('front/layout/head');
        $this->load->view('front/layout/header');
        $this->load->view('front/wine_bar');
        $this->load->view('front/layout/footer');
    }
    public function events(){
        $this->load->view('front/layout/head');
        $this->load->view('front/layout/header');
        $this->load->view('front/events');
        $this->load->view('front/layout/footer');
    }

    public function contact_us() {
        $data = array();
        $post = $this->input->post();
        if (!empty($post)) {
            $data = array('contact_name ' => $post['contact_name'],
                'contact_email' => $post['contact_email'],
                'contact_phone'=>$post['contact_phone'],
                'address'=>$post['address'],
                'city'=>$post['city'],
                'post_code'=>$post['post_code'],
                'message' => $post['message']);
            $insert_data = $this->Home_model->fillcontactusform($data);
            $this->load->library('Emails');
            $to = (!empty($post['contact_email'])) ? $post['contact_email'] : 'NA';
            $subject = 'Contact Enquiry';
            $msg = $this->Emails->queryemail($post);
            $this->Emails->sendMailViaGrid(array('to' => $to, 'name' => "Ipsumvinoteca Team", 'subject' => $subject, 'body' => $msg));
            $this->Emails->sendMailViaGrid(array('to' => "ipsum.vinoteca@gmail.com", 'name' => "Ipsumvinoteca Team", 'subject' => $subject, 'body' => $msg));
            $this->custom_session->custom_set_flashdata("success", "Your Mesage send Successfully");
            redirect(base_url('contact-us'));
        }
        $this->load->view('front/layout/head');
        $this->load->view('front/layout/header');
        $this->load->view('front/contact_us', $data);
        $this->load->view('front/layout/footer');
    }

    public function onlinebooking() {
        $data = $this->input->post();
        if ($data) {
            $arrpost = $this->Home_model->onlinebookingmodel($data);
            $this->load->view("front/online_booking", $arrpost);
        } else {
            $this->load->view("front/online_booking");
        }
    }

    public function contact() {
        $this->load->view('front/layout/head');
        $this->load->view('front/layout/header');
        $this->load->view('front/contact_us');
        $this->load->view('front/layout/footer');
    }
    public function saveAppointment(){
        $data = array();
        $post = $this->input->post();
        if (!empty($post)) {
            $data = array(
                'title' => $post['title'],
                'link' => $post['link'],
                'date' => $post['date']
            );
            $insert_data = $this->Home_model->saveAppointment($data);
            $this->custom_session->custom_set_flashdata("success", "Catch newsletter successfully");
        }
        return $insert_data;
    }
}
