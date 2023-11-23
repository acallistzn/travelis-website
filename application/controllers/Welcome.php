<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('travelis/index');
	}

	public function katwisata()
	{
		$this->load->view('travelis/katwisata');
	}
}
