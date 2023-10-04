<?php
include "koneksi.php"; // memanggil file koneksi.php untuk menghubungkan ke database

if(isset($_POST['update'])){
$id            = $_POST['id'];
$jamu         = $_POST['jamu'];
$khasiat     = $_POST['khasiat'];
$harga         = $_POST['harga'];
$diskon        = $_POST['diskon'];


$data = mysqli_query($mysqli, "UPDATE jual SET id='$id', jamu='$jamu', khasiat='$khasiat', harga='$harga', diskon='$diskon' WHERE id='$id'") or die ("data salah : ".mysqli_error($mysqli));

if ($data) {
include "berhasilupdate.php";
} else {
include "gagalupdate.php";
}
}
?>
