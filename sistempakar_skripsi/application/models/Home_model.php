<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home_model extends CI_Model
{
    public function insertuser()
    {

        $data = [
            'name' => htmlspecialchars($this->input->post('name', true)),
            'email' => htmlspecialchars($this->input->post('email', true)),
            'alamat' => htmlspecialchars($this->input->post('alamat', true)),
            'tgl_lahir' => htmlspecialchars($this->input->post('tgl_lahir', true)),
            'image' => 'default.jpg',
            'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
            'user_access' => 'user',

        ];

        $this->db->insert('user', $data);
    }

    public function insertkritik()
    {

        $data = [
            'name' => htmlspecialchars($this->input->post('name', true)),
            'no_hp' => htmlspecialchars($this->input->post('no_hp', true)),
            'kritikSaran' => htmlspecialchars($this->input->post('kritikSaran', true)),

        ];

        $this->db->insert('kritik_saran', $data);
    }
}
