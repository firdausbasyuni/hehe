<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_Store1 extends CI_Controller {

	public function index()
	{
        $this->load->view('Landing/Store1');
    }
}