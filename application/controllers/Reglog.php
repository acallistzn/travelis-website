<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reglog extends CI_Controller {

	public function index()
	{
		$this->load->database(); // Load database library
		$this->load->view('reglog/config');
        $this->load->view('reglog/loginf');
	}

    public function register()
	{
		$this->load->database(); // Load database library
		$this->load->view('reglog/config');
        $this->load->view('reglog/registerf');
	}
}