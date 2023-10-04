<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
    public function datauser()
    {
        return $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    }
    public function datausername()
    {
        return $this->db->get_where('user', ['id_user' => $this->session->userdata('id_user')])->row_array();
    }
    public function datakuesioner()
    {
        return $this->db->get('kuesioner')->result_array();
    }
}
