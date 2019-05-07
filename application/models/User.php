<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {
    public function Register() {
        $data = array(
            "Email" => $this->input->post('email'),
            "Pass" => md5($this->input->post('pass')),
        );
        
        if($this->isExist($data['Email'])) {
            return false;
        } else {
            $this->db->insert('register', $data);
            $this->db->insert('login',
            array(
                "Email" => $data['Email'],
                "Pass" => $data['Pass']
            ));
            return true;
        }
    }

    public function isExist($username) {
        $this->db->where("Username",$username);
        $result = $this->db->get('login')->result_array();
        if(isset($result[0])) {
            return true;
        } else {
            return false;
        }
    }

    public function findUser() {
        $data = array(
            "Email" => $this->input->post('your_email'),
            "Pass" => md5($this->input->post('your_pass'))
        );

        $this->db->where($data);
        $result = $this->db->get('login');
        return $result->result_array();
    }
}