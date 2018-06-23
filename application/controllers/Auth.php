<?php

/*
 * 
 * This is Admin Home Controller Class
 * Shiv kumar Tiwari
 * 
 */
defined('BASEPATH') OR exit('No direct script access allowed');

Class Auth extends CI_Controller {

    public $status;

    public function __construct() {
        parent::__construct();
        $this->load->model('Auth_model');
        $this->load->library('sendmail');
        $this->load->library('layout');
      
         
    }
public function index() {
                $this->load->view('admin/login');
    }
public function login() {
        $this->load->view('admin/login');
    }

    private function get_session_data() {
        $sess_data = $this->custom_session->custom_userdata(SITE_SESSION_NAME);
        if (!empty($sess_data)) {
            return $sess_data;
        }
    }

    public function authenticate_login() {
        $post = $this->input->post();
        $datapost = array('email' => $post['username'],
            'password' => md5($post['password']));
        $getdata = $this->Auth_model->authenticate($datapost);
     if (!empty($getdata) && $getdata->email == $datapost['email'] && $getdata->password == $datapost['password']) {
            $this->custom_session->custom_set_userdata(array("yoga_reteat_admin" => array('id' => $getdata->id, 'user_name' => $getdata->user_name, 'admin_type' => $getdata->admin_type, 'email' => $getdata->email, 'password' => $getdata->password, 'avatar' => $getdata->avatar)));
            //var_dump($this->custom_session->custom_userdata($getdata));exit;
           redirect(base_url('admin/ipsum-onlinebooking-view'));
        } 
      else {
            $this->custom_session->custom_set_flashdata('error', "Invalid username or password");
            redirect(base_url('admin/login'));
        }
    }

//admin profile change 
    public function profile() {
        $this->adminauth->isLoginCheck('', SITE_SESSION_NAME);
        $sess_data = $this->custom_session->custom_userdata(SITE_SESSION_NAME);
        $post = $this->input->post();
        if (!empty($post) && empty($post['password'])) {
            $this->Auth_model->updateadminprofile($sess_data['id'], $post);
            $this->custom_session->custom_set_flashdata("Success", "Well Done! Your Personal Info Change Successfully ");
            redirect(base_url('admin/profile'));
        } elseif (!empty($_FILES)) {
            $profile_image=array('pic_600'=>array("width" => 600, "height" => 600),'pic_160'=>array("width" => 160, "height" => 160));
            $data = $this->custom_upload->uploadImage(UPLOAD_ADMIN_PROFILE, "picture",$profile_image);
            $updateimage = $this->Auth_model->updateadminprofile($sess_data['id'], array('avatar' => $data['file_name']));
            if (file_exists(UPLOAD_ADMIN_PROFILE . '/' . $sess_data['avatar'])) {
                unlink(UPLOAD_ADMIN_PROFILE . '/160x160_' . $sess_data['avatar']);
                unlink(UPLOAD_ADMIN_PROFILE . '/280x90_' . $sess_data['avatar']);
                unlink(UPLOAD_ADMIN_PROFILE . '/600x600_' . $sess_data['avatar']);
                unlink(UPLOAD_ADMIN_PROFILE . '/' . $sess_data['avatar']);
            } else {
                
            }
            $this->custom_session->custom_unset_userdata(SITE_SESSION_NAME);
            $this->custom_session->custom_set_userdata(array("yoga_reteat_admin" => array('id' => $sess_data['id'], 'user_name' => $sess_data['user_name'], 'admin_type' => $sess_data['admin_type'], 'email' => $sess_data['email'], 'password' => $sess_data['password'], 'avatar' => $data['file_name'])));
            $this->custom_session->custom_set_flashdata("Success", "Well Done! Your Avatar Change Successfully ");
            redirect(base_url('admin/profile'));
        } elseif (!empty($post) && !empty($post['password'])) {
            if (($sess_data['password'] == md5($post['password'])) && ($post['new_password'] == $post['cp_password'])) {
                $this->Auth_model->updateadminprofile($sess_data['id'], array('password' => md5($post['new_password'])));
                $this->custom_session->custom_set_flashdata("Success", "Well Done! Your Password change Successfully ");
                $this->custom_session->custom_unset_userdata(SITE_SESSION_NAME);
                $this->custom_session->custom_set_userdata(array("yoga_reteat_admin" => array('id' => $sess_data['id'], 'user_name' => $sess_data['user_name'], 'admin_type' => $sess_data['admin_type'], 'email' => $sess_data['email'], 'password' => md5($post['new_password']), 'avatar' => $sess_data['avatar'])));
                redirect(base_url('admin/profile'));
            } else {
                $this->custom_session->custom_set_flashdata("error", "Oops ! Your old Password does not match");
                redirect(base_url('admin/profile'));
            }
        }
        $data = array('email' => $sess_data['email'], 'password' => $sess_data['password']);
        $objprofiledata = $this->Auth_model->authenticate($data);
   $arrExtraContent = array();
        $arrExtraContent['js'] = array("assets/js/pages/validation.js");
        $this->layout->view('admin/profile', array('objprofiledata' => $objprofiledata), $arrExtraContent);
    }


//function logout
    public function logout() {

        $this->adminauth->logout(SITE_SESSION_NAME);
        redirect(base_url('admin/login'));
    }

    //user redirect after login
    public function dashboard() {
        $this->adminauth->isLoginCheck('', SITE_SESSION_NAME);
        $data=array();
       $this->layout->view('admin/dashboard',$data);
    }
   public function view_onlinebooking()
   {
        $this->adminauth->isLoginCheck('', SITE_SESSION_NAME);
         $data=array();  
        $data['arronlinebooking'] = $this->Auth_model->getonlinebookingdata();
         $arrExtraContent = array();
        $arrExtraContent['js'] = array("assets/vendor_components/datatables.net/js/jquery.dataTables.min.js", "assets/vendor_components/datatables.net-bs/js/dataTables.bootstrap.min.js", "assets/js/pages/data-table.js", "assets/vendor_plugins/DataTables-1.10.15/media/js/jquery.dataTables.min.js");
        $this->layout->view('admin/view_onlinebooking', $data, $arrExtraContent);
   }
   public function view_bookingdetail($id='')
   {
      $data=array();
      $data['getdetailbooking']=$this->Auth_model->getonlinebookingdatabyid($id);
          $arrExtraContent = array();
        $arrExtraContent['js'] = array("assets/vendor_components/datatables.net/js/jquery.dataTables.min.js", "assets/vendor_components/datatables.net-bs/js/dataTables.bootstrap.min.js", "assets/js/pages/data-table.js", "assets/vendor_plugins/DataTables-1.10.15/media/js/jquery.dataTables.min.js");
        $this->layout->view('admin/onlinebooking_detail', $data, $arrExtraContent);
   }
 public function deleteonlinebooking($deleteid='')
    {
        $this->adminauth->isLoginCheck('', SITE_SESSION_NAME);
        $deletestyles=$this->Auth_model->deleteonlinebooking($deleteid);
       if($deleteid)
         {
          $this->custom_session->custom_set_flashdata("success", "Well done! Record Delete successfully");
         redirect(base_url('admin/ipsum-onlinebooking-view'));
      }
      else
      {
         $post=$this->input->post();
         $count=count($post['deleteid']);
         $countdelete=$post['deleteid'];
         $deletearr=$this->Auth_model->deletemultipleonline($countdelete);
         if($deletearr)
         {
           $this->custom_session->custom_set_flashdata("success", "Well done! $count Record delete successfully. ");
                $redir_url = base_url('admin/ipsum-onlinebooking-view');
                echo json_encode(array('status' => true, 'redir_url' => $redir_url));  
         }
      }
    }
      public function view_contact()
   {
        $this->adminauth->isLoginCheck('', SITE_SESSION_NAME);
         $data=array();  
        $data['arrcontactquery'] = $this->Auth_model->getcontactquery();
         $arrExtraContent = array();
        $arrExtraContent['js'] = array("assets/vendor_components/datatables.net/js/jquery.dataTables.min.js", "assets/vendor_components/datatables.net-bs/js/dataTables.bootstrap.min.js", "assets/js/pages/data-table.js", "assets/vendor_plugins/DataTables-1.10.15/media/js/jquery.dataTables.min.js");
        $this->layout->view('admin/view_contactquery', $data, $arrExtraContent);
   }
   public function view_contactdetail($id='')
   {
      $data=array();
      $data['getdetailcontact']=$this->Auth_model->getcontactquerygetbyid($id);
    $arrExtraContent = array();
        $arrExtraContent['js'] = array("assets/vendor_components/datatables.net/js/jquery.dataTables.min.js", "assets/vendor_components/datatables.net-bs/js/dataTables.bootstrap.min.js", "assets/js/pages/data-table.js", "assets/vendor_plugins/DataTables-1.10.15/media/js/jquery.dataTables.min.js");
        $this->layout->view('admin/contact_detail', $data, $arrExtraContent);  
   }
   public function deletecontactquery($deleteid='')
    {
        $this->adminauth->isLoginCheck('', SITE_SESSION_NAME);
        $deletestyles=$this->Auth_model->deletecontactquery($deleteid);
       if($deleteid)
         {
          $this->custom_session->custom_set_flashdata("success", "Well done! Record Delete successfully");
         redirect(base_url('admin/ipsum-contactquery-view'));
      }
      else
      {
         $post=$this->input->post();
         $count=count($post['deleteid']);
         $countdelete=$post['deleteid'];
         $deletearr=$this->Auth_model->deletemultiplecontactquery($countdelete);
         if($deletearr)
         {
           $this->custom_session->custom_set_flashdata("success", "Well done! $count Record delete successfully. ");
                $redir_url = base_url('admin/ipsum-contactquery-view');
                echo json_encode(array('status' => true, 'redir_url' => $redir_url));  
         }
      }
    }
   
}