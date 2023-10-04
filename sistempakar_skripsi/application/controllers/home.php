<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {
        $this->load->view('templates/menu_header');
        $this->load->view('beranda/utama');
        // $this->load->view('templates/menu_footer');
    }
    public function login()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email', ['required' => 'nama tidak boleh kosong']);
        $this->form_validation->set_rules('password', 'Password', 'required|trim', ['required' => 'password tidak boleh kosong']);
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/utama_header');
            $this->load->view('beranda/login');
        } else {
            $this->_ceklogin();
        }
    }

    public function register()
    {
        // rules aturan register
        $this->form_validation->set_rules('name', 'Name', 'required|trim', ['required' => 'Nama tidak boleh kosong']);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', ['valid_email' => 'Email harus berisi alamat email yang valid.', 'required' => 'email tidak boleh kosong'], ['is_unique' => 'email ini sudah terdaftar']);
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim', ['required' => 'Alamat tidak boleh kosong']);
        $this->form_validation->set_rules('tgl_lahir', 'Tgl_lahir', 'required|trim', ['required' => 'Tanggal Lahir tidak boleh kosong']);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', ['matches' => 'password tidak sama', 'min_length' => 'terlalu pendek']);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/utama_header');
            $this->load->view('beranda/register');
        } else {
            $this->load->model('Home_model');
            $this->Home_model->insertuser();

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat akun anda berhasil dibuat silakan login</div>');
            redirect('Home/login');
        }
    }
    private function _ceklogin()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();
        //user ada

        //cek passwordnya
        if (password_verify($password, $user['password'])) {
            $data = [
                'email' => $user['email'],
                'access_id' => $user['access_id'],
                'id_user' => $user['id_user']
            ];
            $this->session->set_userdata($data);
            //$this->session->set_userdata('iduser', $user['access_id']);
            if ($user['user_access'] == 'user') {
                redirect('user');
            } else {
                redirect('admin');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password yang anda masukan salah</div>');
            redirect('Home/login');
        }
    }
    public function contact()
    {
        // rules aturan register
        $this->form_validation->set_rules('name', 'Name', 'required|trim', ['required' => 'Nama tidak boleh kosong']);
        $this->form_validation->set_rules('no_hp', 'Phone', 'required|trim', ['required' => 'No. Handphone tidak boleh kosong']);
        $this->form_validation->set_rules('kritikSaran', 'Kritik', 'required|trim', ['required' => 'Kritik dan Saran tidak boleh kosong']);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/menu_header');
            $this->load->view('pages/contact');
            $this->load->view('templates/menu_footer');
        } else {
            $this->load->model('Admin_model');
            $this->Home_model->inserkritik();

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat akun anda berhasil dibuat silakan login</div>');
            redirect('Home/login');
        }
    }
    public function about()
    {
        $data = [
            'title' => 'About Me'
        ];
        $this->load->view('templates/menu_header');
        $this->load->view('pages/about', $data);
        $this->load->view('templates/menu_footer', $data);
    }
    public function gangguan()
    {
        $data = [
            'title' => 'Kesehatan Mental'
        ];
        $this->load->view('templates/menu_header');
        $this->load->view('pages/gangguan');
        $this->load->view('templates/menu_footer');
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('user_access');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Anda berhasil keluar</div>');
        redirect('home/login');
    }
}
