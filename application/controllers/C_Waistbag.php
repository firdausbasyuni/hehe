<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Waistbag extends CI_Controller {

	public function index()
	{
        $this->load->view('Products/outwear');
    }
}