<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Home_model
 *
 * @author Abhishek
 */
class Home_model extends CI_Model{
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    public function fillcontactusform($data)
    {
        
       $this->db->insert('ipsumvinoteca_contact_us',$data);
       
        return;
    }
    public function onlinebookingmodel($data)
    {
        $this->db->insert('ipsumvinoteca_online_booking',$data);
        return;
    }
    public function saveNewsletter($data)
    {
        $this->db->insert('ipsumvinoteca_newsletter',$data);
        return;
    }
    public function saveAppointment($data)
    {
        $this->db->insert('ipsumvinoteca_events',$data);
        return;
    }
}
