<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends CI_Controller {

	public function index()
	{
        $this->load->view('Landing/home');
    }
    
    public function Register() {
        $data['title'] = "Register";
        // $this->load->view('Landing/Header', $data);
    }

    public function loginPage() {
        $cookie = $this->input->cookie('logged');
        $this->load->view('Loggedin/loggedin');
    }


    public function login() {
          $cookie = $this->input->cookie('logged');
        if(isset($cookie) || isset($_SESSION['successLogin'])){
            $this->loginPage();
        } else {
            $data['title'] = "Login";
            // $this->load->view('Landing/Header', $data);
            $this->load->view('Landing/Login', $data);
        }
    }
}