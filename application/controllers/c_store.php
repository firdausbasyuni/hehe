<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_store extends CI_Controller {

	public function index()
	{
        $this->load->view('Landing/store');
    }
}