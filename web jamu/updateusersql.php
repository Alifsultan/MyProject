<?php
include "koneksi.php"; // memanggil file koneksi.php untuk menghubungkan ke database

if(isset($_POST['update'])){
$id           = $_POST['id'];
$username     = $_POST['username'];
$password     = $_POST['password'];
$tipe         = $_POST['tipe'];

$data = mysqli_query($mysqli, "UPDATE tb_user SET id='$id', username='$username', password='$password', tipe='$tipe' WHERE id='$id'") or die ("data salah : ".mysqli_error($mysqli));

if ($data) {
include "berhasilupdate.php";
} else {
include "gagalupdate.php";
}
}
?>
