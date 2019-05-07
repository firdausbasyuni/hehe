<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {
    public function Register() {
        $data = array(
            "Email" => $this->input->post('email'),
            "Pass" => md5($this->input->post('password')),
        );
        
        if($this->isExist($data['email'])) {
            return false;
        } else {
            $this->db->insert('register', $data);
            $this->db->insert('login',
            array(
                "Email" => $data['email'],
                "Pass" => $data['password']
            ));
            return true;
        }
    }

    public function isExist($username) {
        $this->db->where("username",$username);
        $result = $this->db->get('login')->result_array();
        if(isset($result[0])) {
            return true;
        } else {
            return false;
        }
    }

    public function findUser() {
        $data = array(
            "email" => $this->input->post('your_email'),
            "password" => md5($this->input->post('your_pass'))
        );

        $this->db->where($data);
        $result = $this->db->get('login');
        return $result->result_array();
    }
}