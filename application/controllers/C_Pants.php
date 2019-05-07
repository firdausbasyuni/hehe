<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Pants extends CI_Controller {

	public function index()
	{
        $this->load->view('Products/pants');
    }
}