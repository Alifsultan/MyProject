<?php
include "koneksi.php"; // memanggil file koneksi.php untuk menghubungkan ke database

if(isset($_POST['simpan'])){
$id     = $_POST['id']; // memanggil nama variabel id untuk dibuat menjadi variabel baru $id
$jamu  =$_POST['jamu'];
$khasiat    = $_POST['khasiat'];
$harga = $_POST['harga'];
$diskon = $_POST['diskon'];

//menambahkan query sql tambah data untuk memasukkan data ke database
$data = mysqli_query($mysqli,"INSERT INTO jual SET id='$id', jamu='$jamu' , khasiat='$khasiat', harga='$harga', diskon='$diskon' ") or die ("data salah : ".mysqli_error($mysqli));

//  untuk mengetahui apakah data berhasil disimpan atau belum
if ($data) {
include "berhasilinputsql.php";
} else {
include "gagalinputsql.php";
}
}
?>
