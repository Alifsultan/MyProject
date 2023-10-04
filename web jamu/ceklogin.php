<?php
session_start(); //memulai session
include "koneksi.php";
$username = $_POST['username'];//mengambil isian username dan password dari form
$password = $_POST['password'];

//query untuk mengambil data user dari database sesuai dengan username inputan form
$q = "SELECT * FROM tb_user WHERE username = '$username' " ;
$result = mysqli_query($mysqli,$q);
$data = mysqli_fetch_array($result);
//cek kesesuaian password masukan dengan database
if ($password == $data['password']) 
	{
		//menyimpan tipe user dan username dalam session
		$_SESSION['tipe'] = $data['tipe'];
		$_SESSION['username'] = $data['username'];
		include "menu.php";
	}
//jika password tidak sesuai
else 
	{
		include "passwordsalah.php";
	}
?>
