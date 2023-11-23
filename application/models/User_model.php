<?php

class User_model extends CI_Model {
    public function __construct() {
        parent::__construct();
    }

    // Mendapatkan data pengguna berdasarkan email
    public function get_user_by_email($email) {
        return $this->db->get_where('users', array('email' => $email))->row_array();
    }

    // Mendapatkan data pengguna berdasarkan tipe pengguna (user type)
    public function get_users_by_type($user_type) {
        return $this->db->get_where('users', array('user_type' => $user_type))->result_array();
    }

    // Menciptakan pengguna baru
    public function create_user($data) {
        $this->db->insert('users', $data);
        return $this->db->insert_id();
    }
}
?>