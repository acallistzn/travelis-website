<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Travelis extends CI_Controller {

	public function index()
	{
		$this->load->view('travelis/index');
	}

	public function homepage()
	{
		$this->load->view('travelis/index');
	}

	public function katwisata()
	{
		$this->load->view('travelis/katwisata');
	}

    public function kathotel()
	{
		$this->load->view('travelis/kathotel');
	}

	public function reels()
	{
		$this->load->view('travelis/reels');
	}

	public function bali_h()
	{
		$this->load->view('travelis/bali_h');
	}

	public function bali_w()
	{
		$this->load->view('travelis/bali_w');
	}

	public function detail()
	{
		$this->load->view('travelis/detail');
	}

	public function pantai()
	{
		$this->load->view('travelis/pantai');
	}

	public function pesan()
	{
		$this->load->view('pemesanan/pesan');
	}

	

}