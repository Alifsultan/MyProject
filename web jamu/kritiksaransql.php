<?php
include "koneksi.php"; // memanggil file koneksi.php untuk menghubungkan ke database

if(isset($_POST['simpan'])){
$id_pengkritik    = $_POST['id_pengkritik'];
$nama_pengkritik  = $_POST['nama_pengkritik']; // memanggil nama variabel id untuk dibuat menjadi variabel baru $id
$email    = $_POST['email'];
$tiksar		=$_POST['tiksar'];
// var_dump("$username");
// die();
//menambahkan query sql tambah data untuk memasukkan data ke database
$data = mysqli_query($mysqli,"INSERT INTO tb_tiksar SET id_pengkritik='$id_pengkriitk', nama_pengkritik='$nama_pengkritik',email='$email',tiksar='$tiksar'") 
or die ("data salah : ".mysqli_error($mysqli));

//  untuk mengetahui apakah data berhasil disimpan atau belum
if ($data) {
include "berhasilinput.php";
} else {
include "gagalinput.php";
}
}
?>
