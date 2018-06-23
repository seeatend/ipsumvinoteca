<?php

/*
 * 
 * This is Home Controller Class
 * Shiv kumar Tiwari
 * 
 */
defined('BASEPATH') OR exit('No direct script access allowed');

Class Home extends CI_Controller {

    public $status;

    public function __construct() {
        parent::__construct();
        $this->load->model('Home_model');
        $this->load->model('Yogaretreate_model');
        $this->load->library('layout');
    }

    public function index() {
        $data = array();
        $get = $this->input->get();
        $count = $this->Home_model->countretreatforpagination();
        $config = array();
        $total_count = $count->count;
        $offset = (!empty($get['page'])) ? ($get['page'] - 1) * PER_PAGE_RECORDS : 0;
        $config['total_rows'] = $total_count;
        $config['baseurl'] = base_url('');
        // var_dump($config);exit;
        $page = $this->paging_config->get_config($config);
        $data['page'] = $page;
        $data['getAllCategories'] = $this->Yogaretreate_model->getYogaRetreateCategory();
        $data['getAllStyles'] = $this->Yogaretreate_model->getYogaRetreateStyles();
        $data['getAllRetreats'] = $this->Home_model->getAllRetreats($offset, PER_PAGE_RECORDS);
        // var_dump($data['getAllRetreats']);exit;
        $this->layout->view_front('index', $data);
    }

    public function getAllRetreate() {
        $post = $this->input->post;
        //var_dump($post);exit;
    }

    public function details($center_slug, $retreat_slug) {
        //var_dump($retreat_slug);var_dump($center_slug);exit;
        $data = array();
        if (!empty($retreat_slug) && !empty($center_slug)) {
            $retreatId = $this->Home_model->getRetreatsIdBySlug($retreat_slug);
            $centerId = $this->Home_model->getCentersIdBySlug($center_slug);
            $data['getRetreatsByIdData'] = $this->Home_model->getRetreatsById($retreatId->id);
            $data['getAllRetreatImagesData'] = $this->Home_model->getAllRetreatImagesByRetreatId($retreatId->id);
            $data['getAllRetreatStylesData'] = $this->Home_model->getAllRetreatStylesByRetreatId($retreatId->id);
            $data['getAllRetreatAdditionBoxData'] = $this->Home_model->getAllRetreatAdditionBoxByRetreatId($retreatId->id);
            $data['getCenterData'] = $this->Home_model->getCenterDataByCenterId($centerId->id);
            $data['getPackageInformation'] = $this->Home_model->getPackageInformationByRetreatId($retreatId->id);
            $data['getminimumprice'] = $this->Home_model->getminimumprice($retreatId->id);


            $data['countAllretreatData'] = $this->Home_model->getAllRetreatsCountData();
            $data['countRetreatByCenterId'] = $this->Home_model->getAllRetreatsCountData(array('center_id' => $centerId->id));
            $data['countRetreatByStateId'] = $this->Home_model->getAllRetreatsCountData(array('state_id' => $data['getRetreatsByIdData']->state_id));
            $data['countRetreatByCountryId'] = $this->Home_model->getAllRetreatsCountData(array('country_id' => $data['getRetreatsByIdData']->country_id));
            $data['countRetreatByCategoryId'] = $this->Home_model->getAllRetreatsCountData(array('category_id'=>$data['getRetreatsByIdData']->category_id));
            $data['getStylesData'] = $this->Home_model->getAllStylesDataByRetreatId($retreatId->id);
            //var_dump($data['countRetreatByCountryId']);exit;
            //var_dump($data['getminimumprice']);exit;
           // echo "<pre>";var_dump($data['getStylesData']);exit;
        }
        $this->layout->view_front('retreat_details', $data);
    }

    public function view_aboutus() {
        $data = array();
        $this->layout->view_front('about_us', $data);
    }

    public function view_contactus() {
        $data = array();
        $post = $this->input->post();
        if (!empty($post)) {
            $data = array('contact_name ' => $post['first_name'] . '' . $post['last_name'],
                'contact_email' => $post['email'],
                'contact_message' => $post['message']);
            $insert_data = $this->Home_model->insertcontactquery($data);
            $this->load->library('emails');
            $to = (!empty($post['email'])) ? $post['email'] : 'NA';
            // $to="ravitripathi240@gmail.com";
            $subject = 'Contact Enquiry';
            $msg = $this->emails->contactuseemail($post);
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            $headers .= 'From: <ravitripathi240@gmail.com>' . "\r\n";
            // send email to admin;
            // mail("ravitripathi240@gmail.com", $subject, $msg, $headers);
            // send email to ordered user
            $this->emails->sendMailViaGrid(array('to' => $to, 'name' => "Sales Team - Praxoldistribution", 'subject' => $subject, 'body' => $msg));
            $this->custom_session->custom_set_flashdata("success", "Your Mesage send Successfully");
            redirect(base_url('contact-us'));
        }
        $this->layout->view_front('contact_us', $data);
    }

    public function view_termsandprivacy() {
        $data = array();
        $this->layout->view_front('terms-privacy', $data);
    }

    public function view_centerretreatdetail($center_slug) {
        if (!empty($center_slug)) {
            $data = array();
            $centerId = $this->Home_model->getCentersIdBySlug($center_slug);
            $data['getAllRetreatDataByCenterId'] = $this->Home_model->getAllRetreatsData(array('center_id' => $centerId->id));
            $data['getAllReviewByCenterId'] = $this->Home_model->getAllReviewsData(array('center_id' => $centerId->id));
            $data['getAllTestiminialsByCenterId'] = $this->Home_model->getAllTestimonialsData(array('center_id' => $centerId->id));
            $this->layout->view_front('center-retreat-details', $data);
        }
    }

    public function newsletter_subscribe() {
        $post = $this->input->post();
        if (!empty($post)) {
          $data = array('email' => $post['email']);
            $getemail = $this->Home_model->getsubscribe_email($post['email']);
           if(!empty($getemail)){
            if ($post['email'] == $getemail->email) {
                $redir_url = base_url('');
                echo json_encode(array("status" => 'false', 'redir_url' => $redir_url));
            } 
            }else {
            $this->load->library('emails');
            $to = (!empty($post['email'])) ? $post['email'] : 'NA';
            // $to="ravitripathi240@gmail.com";
            $subject = 'Contact Enquiry';
            $msg = $this->emails->subscribeemail($post);
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            $headers .= 'From: <ravitripathi240@gmail.com>' . "\r\n";
            // send email to admin;
            // mail("ravitripathi240@gmail.com", $subject, $msg, $headers);
            // send email to ordered user
            $this->emails->sendMailViaGrid(array('to' => $to, 'name' => "Sales", 'subject' => $subject, 'body' => $msg));
             $insert_data = $this->Home_model->news_subscribe($data);
             if (!empty($insert_data)) {
             $redir_url = base_url('');
                    echo json_encode(array("status" => 'true', 'redir_url' => $redir_url));
            }
            }
        }
    }

}
