<?php


class Welcome extends CI_Controller {

	public function index()
	{	
	$this->load->view('design/header');
	$this->load->view('design/home');
	$this->load->view('design/footer');
	}
}
