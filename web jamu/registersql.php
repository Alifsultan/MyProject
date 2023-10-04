<?php
include "koneksi.php"; // memanggil file koneksi.php untuk menghubungkan ke database

if(isset($_POST['simpan'])){
$id          = $_POST['id'];
$username     = $_POST['username']; // memanggil nama variabel id untuk dibuat menjadi variabel baru $id
$password    = $_POST['password'];
$tipe		=2;
// var_dump("$username");
// die();
//menambahkan query sql tambah data untuk memasukkan data ke database
$data = mysqli_query($mysqli,"INSERT INTO tb_user SET id='$id', username='$username',password='$password',tipe='$tipe'") 
or die ("data salah : ".mysqli_error($mysqli));

//  untuk mengetahui apakah data berhasil disimpan atau belum
if ($data) {
include "berhasilinput.php";
} else {
include "gagalinput.php";
}
}
?>