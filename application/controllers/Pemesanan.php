<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pemesanan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Pemesanan_model"); //load model mahasiswa
    }

    //method pertama yang akan di eksekusi
    public function index()
    {

        //ambil fungsi getAll untuk menampilkan semua data mahasiswa
        $data["data_pemesanan"] = $this->Pemesanan_model->getAll();
        //load view header.php pada folder views/templates
        //load view index.php pada folder views/mahasiswa
        $this->load->view('pemesanan/tiket', $data);
    }

    //method add digunakan untuk menampilkan form tambah data mahasiswa
    public function add()
    {
        $Pemesanan = $this->Pemesanan_model; //objek model
        $validation = $this->form_validation; //objek form validation
        $validation->set_rules($Pemesanan->rules()); //menerapkan rules validasi pada mahasiswa_model
        //kondisi jika semua kolom telah divalidasi, maka akan menjalankan method save pada mahasiswa_model
        if ($validation->run()) {
            $Pemesanan->save();
            redirect("pemesanan");
        }
        $this->load->view('pemesanan/add');
    }

    public function delete()
    {
        $id = $this->input->get('id');
        if (!isset($id)) show_404();
        $this->Pemesanan_model->delete($id);
        $msg['success'] = true;
        $this->output->set_output(json_encode($msg));
    }

	public function bayar()
	{
		$this->load->view('pemesanan/bayar');
	}

	public function donebayar()
	{
		$this->load->view('pemesanan/donebayar');
	}

}