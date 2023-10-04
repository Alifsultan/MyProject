<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{
    public function dataadmin()
    {
        return $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    }
    public function datauser()
    {
        return $this->db->get('user')->result_array();
    }
    public function datariwayat()
    {
        return $this->db->get('riwayat_backward')->join('user', 'user.id_user = riwayat_backward.user_id')->result_array();
    }
    public function data_riwayatforward()
    {
        return $this->db->get('riwayat_forward')->join('user', 'user.id_user = riwayat_forward.user_id')->result_array();
    }
    public function inputuser()
    {
        $data = [
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'alamat' => $this->input->post('alamat'),
            'tgl_lahir' => $this->input->post('tgl_lahir'),
            'image' => 'default.jpg',
            'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
            'user_access' => $this->input->post('user_access'),

        ];
        $this->db->insert('user', $data);
    }

    // Menghapus Data User
    public function hapusUser($id)
    {
        // Hapus gejala berdasarkan id yang dipilih.
        $this->db->where('id_user', $id);
        $this->db->delete('user');
    }

    // Ubah Data user
    public function getDataUser($id)
    {
        // var_dump($id);
        // die;
        // $id = $this->db->get('user', $id);
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('user.id_user', $id);
        return $this->db->get()->row_array();
        // $this->db->result($id);

        // $id = $this->input->post('id');
        // // Mengubah data user
        // $data = [
        //     'id_user' => $this->input->post('id_user'),
        //     'name' => $this->input->post('name', true),
        //     'email' => $this->input->post('email', true),
        //     'alamat' => $this->input->post('alamat', true),
        // ];
        // $this->db->where('id_user', $id);
        // $this->db->update('user', $data);
    }

    // Ubah Data user
    public function editDataUser($data)
    {

        // Mengubah data user
        $data = [
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'alamat' => $this->input->post('alamat'),
        ];
        $this->db->where('id_user', $this->input->post('id'));
        $this->db->update('user', $data);
    }

    // public function insertkritik()
    // {

    //     $data = [
    //         'name' => htmlspecialchars($this->input->post('name', true)),
    //         'no_hp' => htmlspecialchars($this->input->post('no_hp', true)),
    //         'kritikSaran' => htmlspecialchars($this->input->post('kritikSaran', true)),

    //     ];

    //     $this->db->insert('kritik_saran', $data);
    // }
}
