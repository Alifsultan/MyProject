<?php
defined('BASEPATH') or exit('No direct script access allowed');

class kuesioner extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Admin_model');
    $this->load->model('User_model');
  }
  public function index()
  {
    // $data = [
    //   'title' => 'Dashboard Pasien',
    //   'id_kuesioner' => $this->getAll(),

    // ];
    $data['title'] = 'KUESIONER GANGGUAN EMOSIONAL';
    $data['user'] = $this->Admin_model->dataadmin();
    $kuesioner['kuesioner'] = $this->User_model->datakuesioner();

    $this->load->view('templates/header', $data);
    $this->load->view('user/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('user/dataUji', $kuesioner);
    $this->load->view('templates/footer');
  }

  public function backward($id) //id_penyakit
  {
    $data['title'] = 'KUESIONER GANGGUAN EMOSIONAL';
    $data['user'] = $this->Admin_model->dataadmin();
    $where = array(
      "rules.kode_penyakit" => $id
    );
    // ambil data penyakit dan inner join rules
    $result = $this->db->select("kode_gejala,nama_gangguan")
      ->join("gangguan", "rules.kode_penyakit = gangguan.kode_penyakit")->get_where("rules", $where)->result_array();
    $result = $result[0];
    // membuat sebuah array berupa kode gejala dan nama gangguan 
    $gejala = $result["kode_gejala"];
    $penyakit = $result["nama_gangguan"];
    // split
    $ex_data = explode(",", $gejala);
    // simpan kuesioner kedalam array 
    $pertanyaan = array();
    for ($i = 0; $i < sizeof($ex_data); $i++) {
      $cond = array(
        "id_kuesioner" => $ex_data[$i]
      );
      // ambil kuisioner sesuai kode gejala
      $temp = $this->db->select("pernyataan")->get_where("kuesioner", $cond)->result_array();
      if (sizeof($temp) > 0) {
        // ketika dia punya data disimpan pertanyaan dan ditambah ?
        $temp = $temp[0];
        $temp = $temp["pernyataan"];
        $isi = $temp . " ?";
        // isi ke variable array pertanyaan
        array_push($pertanyaan, $isi);
      }
    }

    // melempar data pertanyaan, id, penyakit
    $kuesioner['pertanyaan'] = $pertanyaan;
    $kuesioner['penyakit'] = $penyakit;
    $kuesioner['id'] = $id;

    // ketika dia mempost jawaban (ya/tidak)
    if (sizeof($_POST) > 0) {
      // jawabn di ambil
      $post = $_POST["jawaban"];
      // total data
      $total = sizeof($post);
      // 0 + 1 = 1 || 0 + 0 = 0
      // jumlah kan seluruh data array
      $benar = array_sum($post);
      // rumus akurasi
      // 0 / 5 erorr
      // != 0 hitung akurasi
      $hasil = isset($total) == 0 ? 0 : $benar / $total * 100;
      $kuesioner["hasil"] = $hasil;

      // var_dump($kuesioner);
      // die;

      $riwayat = array(
        'penyakit' => $penyakit,
        'hasil' => $hasil,
        "user_id" => isset($_SESSION["id_user"]) ? $_SESSION["id_user"] : 0
      );
      $this->db->insert('riwayat_backward', $riwayat);
      // var_dump($riwayat);
      // die;
    }

    $this->load->view('templates/header', $data);
    $this->load->view('user/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('user/backward_chaining', $kuesioner);
    $this->load->view('templates/footer');
  }
}
