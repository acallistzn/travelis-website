<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pemesanan_model extends CI_Model
{
    private $table = 'pemesanan';

    public function rules()
    {
        return [
            [
                'field' => 'nama',  //samakan dengan atribute name pada tags input
                'label' => 'nama',  // label yang kan ditampilkan pada pesan error
                'rules' => 'trim|required' //rules validasi
            ],
            [
                'field' => 'tanggal',
                'label' => 'tanggal',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'jumlah',
                'label' => 'jumlah',
                'rules' => 'trim|required'
            ]
        ];
    }

    public function getById($id)
    {
        return $this->db->get_where($this->table, ["IdPemesanan" => $id])->row();
        //query diatas seperti halnya query pada mysql 
        //select * from mahasiswa where IdMhsw='$id'
    }

    //menampilkan semua data mahasiswa
    public function getAll()
    {
        $this->db->from($this->table);
        $this->db->order_by("IdPemesanan", "desc");
        $query = $this->db->get();
        return $query->result();
        //fungsi diatas seperti halnya query 
        //select * from mahasiswa order by IdMhsw desc
    }

    //menyimpan data mahasiswa
    public function save()
    {
        $data = array(
            'IdPemesanan' => $this->input->post('IdPemesanan'),
            'nama' => $this->input->post('nama'),
			'tempat' => $this->input->post('tempat'),
			'tanggal' => $this->input->post('tanggal'),
			'jumlah' => $this->input->post('jumlah'),
			'totalbayar' => $this->input->post('totalBayar')
        );
        return $this->db->insert($this->table, $data);
    }

    public function delete($id)
    {
        return $this->db->delete($this->table, array("Idpemesanan" => $id));
    }
   
}