<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_career extends CI_Controller {

	public function index()
	{
        $this->load->view('Landing/career');
    }
}