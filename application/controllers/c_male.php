<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_male extends CI_Controller {

	public function index()
	{
        $this->load->view('Products/male');
    }
}