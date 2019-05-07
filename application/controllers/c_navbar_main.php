<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_navbar_main extends CI_Controller {

	public function index()
	{
        $this->load->view('Landing/navbar_main');
    }
}