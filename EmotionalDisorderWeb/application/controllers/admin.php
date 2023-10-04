<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model');
    }

    public function index()
    {
        $data['title'] = 'MY PROFIL';
        $data['user'] = $this->Admin_model->dataadmin();

        $this->load->view('templates/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
    }

    public function edit()
    {
        $data['title'] = 'Edit Profile';
        $data['user'] = $this->Admin_model->dataadmin();

        // var_dump($data);
        // die;

        $this->form_validation->set_rules('name', 'Full Name', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('admin/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $id = $_SESSION['id_user'];
            $name = $this->input->post('name');
            $email = $this->input->post('email');
            $alamat = $this->input->post('alamat');
            $arr = array(
                'name' => $name,
                'email' => $email,
                'alamat' => $alamat,
            );

            //cek jika ada gambar yang akan di upload
            $upload_image = $_FILES['image']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/img/profile/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    //menghapus foto lama di folder saat uploaf foto baru kecuali default foto
                    $old_image = $data['user']['image'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets/img/profile/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $this->upload->display_errors() . '</div>');
                    redirect('admin');
                }
            }

            // var_dump($arr, $id, $_SESSION['id_user']);
            // die;

            $this->db->where('id_user', $id);
            $this->db->update('user', $arr);

            // $this->db->set('name', $name);
            // $this->db->where('email', 'alamat', $alamat, $email);
            // $this->db->update('user', $arr);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Profil anda berhasil diupdate</div>');
            redirect('admin');
        }
    }

    public function changePassword()
    {
        $data['title'] = 'Ubah Password';
        $data['user'] = $this->Admin_model->dataadmin();

        $this->form_validation->set_rules('current_password', 'Current Password', 'required|trim');
        $this->form_validation->set_rules('new_password1', 'New Password', 'required|trim|min_length[3]|matches[new_password2]');
        $this->form_validation->set_rules('new_password2', 'Confirm New Password', 'required|trim|min_length[3]|matches[new_password1]');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('admin/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/changepassword', $data);
            $this->load->view('templates/footer');
        } else {
            $current_password = $this->input->post('current_password');
            $new_password = $this->input->post('new_password1');
            //password salah
            if (!password_verify($current_password, $data['admin']['password'])) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong current password</div>');
                redirect('admin/changepassword');
            } else {
                //password lama sama baru sama
                if ($current_password == $new_password) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">New password cannot be the same as current password</div>');
                    redirect('admin/changepassword');
                } else {
                    //password sudah ok
                    $password_hash = password_hash($new_password, PASSWORD_DEFAULT);

                    $this->db->set('password', $password_hash);
                    $this->db->where('email', $this->session->userdata('email'));
                    $this->db->update('admin');
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password Change</div>');
                    redirect('admin/changepassword');
                }
            }
        }
    }

    public function daftarUser()
    {
        $data['title'] = 'DAFTAR USER';
        $data['user'] = $this->Admin_model->dataadmin();

        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', ['is_unique' => 'this email has already registered']);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', ['matches' => 'password dont match', 'min_length' => 'password too short!']);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('admin/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $data['user'] = $this->Admin_model->datauser();
            $this->load->view('admin/daftarUser', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Admin_model->inputuser();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('admin/daftarUser');
        }
    }

    public function daftarRiwayat()
    {
        $data['title'] = 'DAFTAR RIWAYAT PASIEN BACKWARD CHAINING';
        $data['user'] = $this->Admin_model->dataadmin();

        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', ['is_unique' => 'this email has already registered']);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', ['matches' => 'password dont match', 'min_length' => 'password too short!']);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('admin/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $data['user'] = $this->Admin_model->datauser();
            $this->load->view('admin/daftarRiwayat', $data);
            $this->load->view('templates/footer');
        }
    }
    public function daftar_riwayatforward()
    {
        $data['title'] = 'DAFTAR RIWAYAT PASIEN FORWARD CHAINING';
        $data['user'] = $this->Admin_model->dataadmin();

        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', ['is_unique' => 'this email has already registered']);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', ['matches' => 'password dont match', 'min_length' => 'password too short!']);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('admin/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $data['user'] = $this->Admin_model->datauser();
            $this->load->view('admin/daftar_riwayatForward', $data);
            $this->load->view('templates/footer');
        }
    }
    public function hapus($id)
    {
        $this->load->model('Admin_model');
        $this->Admin_model->hapusUser($id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Data User Berhasil dihapus!</div>'); //buat pesan akun berhasil dibuat
        redirect('admin/daftaruser');
    }

    // Ubah data user
    public function ubah($id)
    {

        $data['title'] = 'Form Edit Data User';
        $data['user'] = $this->Admin_model->getDataUser($id);
        // var_dump($data);
        // die;

        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', ['is_unique' => 'this email has already registered']);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', ['matches' => 'password dont match', 'min_length' => 'password too short!']);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('admin/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            // $data['user'] = $this->Admin_model->datauser();
            $this->load->view('admin/edituser', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Admin_model->editDataUser();
            $this->session->set_flashdata('flash', 'Data Diubah ');
            redirect('admin/daftaruser');
        }
    }

    public function save()
    {
        // var_dump($_POST);
        // die;
        $id = $this->input->post('id_user');
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $alamat = $this->input->post('alamat');
        $tgl_lahir = $this->input->post('tgl_lahir');

        $arr = array(
            'name' => $name,
            'email' => $email,
            'alamat' => $alamat,
            'tgl_lahir' => $tgl_lahir
        );

        $this->db->where('id_user', $id);
        $this->db->update('user', $arr);

        $this->session->set_flashdata('flash', 'Data Diubah ');
        redirect('admin/daftaruser');
    }
}
