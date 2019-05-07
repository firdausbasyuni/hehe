<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends CI_Controller {

	public function Register()
	{
        if($this->User->Register()) {
            $this->session->set_flashdata('SuccessReg','Success');
            redirect('Landing/Login');
        } else {
            $this->session->set_flashdata('FailReg', 'Fail');
            redirect('Landing/Login');
        }
    }

    public function Signin() {
        $user = $this->User->findUser();
        if($user != null){
            if($this->input->post('remember-me') != null) {
                set_cookie('logged', $user[0]['Email'], '3600');
                redirect('Landing/Login');
            } else {
                $this->session->set_userdata('successLogin', $user[0]['Email']);
                redirect('Landing/Login');
            }
        } else {
            $this->session->set_flashdata('falselogin','nodata');
            redirect('Landing/Login');
        }
    }

    public function Logout() {
        $cookie = $this->input->cookie('logged');
        if(isset($cookie)) {
            delete_cookie('logged');
            redirect('Landing/Login');
        } else {
            session_destroy();
            redirect('Landing/Login');
        }
    }
}