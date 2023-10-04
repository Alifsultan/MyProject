<?php
// $simpan sebagai array ketika data disimpan
$simpan = array();
//button submit
if (isset($_POST["submit"])) {
  // var_dump($_POST);
  // die;
  // post gejala dari yang dialami dimasukkan array
  $gejala = isset($_POST["gejala"]) ? $_POST["gejala"] : array();
  // var_dump($gejala);
  // die;
  // ambil data dari tb_penyakit
  $exec = $this->db->get('rules')->result();
  $user = $this->db->get('user')->result();
  //var_dump($exec);
  //die;
  // 1.  melakukan perhitungan pertama dimana di cek dari gejala sesuai id yang dipilih
  for ($i = 0; $i < sizeof($gejala); $i++) {
    // setelah perhitungan "1." selanjutnya dari id_gejala dicari di tb_penyakit yang sesuai id_gejala
    for ($j = 0; $j < sizeof($exec); $j++) {
      // $split_data digunakan untuk memisahkan setiap gejala yg dipilih dengan pemisan koma
      $split_data = $exec[$j]->kode_gejala;
      $ex_data = explode(",", $split_data);
      // langkah selanjutnya menyimpan data sesuai dengan penyakit dan gejala
      $simpan[$j]["gangguan"] = $exec[$j]->kode_rule;
      // jika tidak ada penyakit yg cocok dari gejala yg dimasukkan maka disimpan array "0"
      if (array_key_exists('total', $simpan[$j]) == false) {
        $simpan[$j]["prob"] = 0;
        $simpan[$j]["kode_penyakit"] = $exec[$j]->kode_penyakit;
        $simpan[$j]["gejala"] = $split_data;
        $simpan[$j]["total"] = sizeof($ex_data);
        $simpan[$j]["prosentase"] = sizeof($ex_data);
      }
      // kondisi ketika menemukan penyakit yang sesuai dengan gejala yg dimasukkan 
      for ($k = 0; $k < sizeof($ex_data); $k++) {
        if ($gejala[$i] == $ex_data[$k]) {
          $simpan[$j]["prob"] += 1;
          break;
        }
      }
      $simpan[$j]["prosentase"] = $simpan[$j]["prob"] == 0 ? 0 : $simpan[$j]["prob"] / $simpan[$j]["total"] * 100;
      $simpan[$j]["prosentase"] = round($simpan[$j]["prosentase"], 3);
    }
  }
  //perhitungan untuk sorting dari yang terbesar ke terkecil
  $columns = array_column($simpan, 'prosentase');
  array_multisort($columns, SORT_DESC, $simpan);

  if (sizeof($simpan) > 0) {

    // $query = $this->db->get('riwayat_backward')->join('user', 'user.id_user = riwayat_backward.name')->result_array();
    $insert = $simpan[0];
    // var_dump($query);
    // die;

    $data = array(
      // 'name' => $nama["name"],
      'gangguan' => $insert["gangguan"],
      'gejala' => $insert["prob"],
      'prosentase' => $insert["prosentase"],
      "user_id" => isset($_SESSION["id_user"]) ? $_SESSION["id_user"] : 0
    );
    $this->db->insert('riwayat_forward', $data);
   
  }
}
?>
<!-- Begin Page Content -->
<div class="container-fluid">


  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

  <div class="row">
    <div class="col-lg">
      <div id="body">
        <form method="post" action="">

        <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Pernyataan</th>
                            <th scope="col">Pilih Pernyataan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($kuesioner as $p) : ?>
                            <tr>
                                <th scope="row"><?= $i; ?></th>
                                <input type="hidden" name="id_kuesioner" value="<?= $p['id_kuesioner'] ?>"> </td>

                                <td><?= $p['pernyataan'] ?> </td>

                                <td>
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="gejala[]" value="<?= $p['id_kuesioner'] ?>">
                                </td>
                                
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
            <tr>
              <td></td>
              <td><input type="submit" name="submit" class="btn btn-primary" id="sub" value="Submit" style="float: left"></td>
              <td></td>
              <!-- <script>alert('Data berhasil disimpan');</script> -->
            </tr>
            </td>
            </tr>
            <!-- <button><input type="submit" class="btn" id="sub" value="Submit" style="float: left"></button> -->
          </table>
        </form>
        <div id="body">
          <div class="form-group">

            <label for="">Kemungkinan Gangguan :</label>
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Nama Penyakit</th>
                  <th>Total Probabilitas CF</th>
                </tr>
              </thead>
              <tbody>
                <?php for ($i = 0; $i < sizeof($simpan); $i++) { ?>
                  <tr>
                    <td><?= $i + 1 ?>.</td>
                    <td><?= $simpan[$i]["gangguan"] ?></td>
                    <td><?= $simpan[$i]["prosentase"] ?>%</td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
            <br>
            <?php
            if (sizeof($simpan) > 0) {
            ?>
              <a href="<?= base_url("kuesioner/backward/" . $simpan[0]["kode_penyakit"]) ?>">
                <button type="button" class="btn btn-sm btn-primary">Lanjut Ke Backward Chaining</button>
              </a>
            <?php } ?>
          </div>
        </div>