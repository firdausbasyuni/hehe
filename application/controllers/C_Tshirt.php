<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Tshirt extends CI_Controller {

	public function index()
	{
        $this->load->view('Products/tshirt');
    }
}