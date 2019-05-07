<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_basket extends CI_Controller {

	public function index()
	{
        $this->load->view('Landing/basket');
    }
}