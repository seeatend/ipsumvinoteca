<?php

/*
 * This is frontend auth model page
 * Authour : Maneesh Tiwari | Shiv Tiwari
 */

Class Auth_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function authenticate($data) {

        return $this->db->select('*')->from('ipsumvinoteca_admin')->where(array('email' => $data['email'], 'password' => $data['password']))->get()->row();
    }
    public function updateadminprofile($id, $updata) {

        $this->db->where('id', $id)->update('ipsumvinoteca_admin', $updata);
        if ($this->db->affected_rows() > 0) {
            return $this->db->select('*')->from('ipsumvinoteca_admin')->where('id', $id)->get()->row();
        }
    }

    public function getonlinebookingdata()
    {
        return $this->db->select('*')->from('ipsumvinoteca_online_booking')->get()->result();
    }
    public function getonlinebookingdatabyid($id)
    {
    return $this->db->select('*')->from('ipsumvinoteca_online_booking')->where('id',$id)->get()->row();   
    }
    public function deleteonlinebooking($id) {
        $this->db->where('id', $id)->delete('ipsumvinoteca_online_booking');
        if ($this->db->affected_rows() > 0) {
            return true;
        }
    }

    //delete subscribe multiple
    public function deletemultipleonline($id) {
        $this->db->where_in('id', $id)->delete('ipsumvinoteca_online_booking');
        if ($this->db->affected_rows() > 0) {
            return true;
        }
    }
    public function getcontactquery()
    {
        return $this->db->select('*')->from('ipsumvinoteca_contact_us')->get()->result();
    }
    public function getcontactquerygetbyid($id)
    {
        return $this->db->select('*')->from('ipsumvinoteca_contact_us')->where('id',$id)->get()->row();   
    }
    public function deletecontactquery($id) {
        $this->db->where('id', $id)->delete('ipsumvinoteca_contact_us');
        if ($this->db->affected_rows() > 0) {
            return true;
        }
    }

    //delete subscribe multiple
    public function deletemultiplecontactquery($id) {
        $this->db->where_in('id', $id)->delete('ipsumvinoteca_contact_us');
        if ($this->db->affected_rows() > 0) {
            return true;
        }
    }

    public function getEventsData()
    {
        return $this->db->select('*')->from('ipsumvinoteca_events')->get()->result();
    }
    public function getEventDataById($id)
    {
    return $this->db->select('*')->from('ipsumvinoteca_events')->where('id',$id)->get()->row();   
    }
    public function deletEvent($id) {
        $this->db->where('id', $id)->delete('ipsumvinoteca_events');
        if ($this->db->affected_rows() > 0) {
            return true;
        }
    }
}
