<?php
class Auth_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('upload');
    }

    public function get_account($username)
    {
        $query = $this->db->get_where('users', ['username' => $username], 1);
        return $query->result();
    }

}
