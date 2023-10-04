<?php
include "koneksi.php"; // memanggil file koneksi.php untuk menghubungkan ke database

if(isset($_POST['beli'])){
// memanggil nama variabel id untuk dibuat menjadi variabel baru $id
$namajamu    = $_POST['namajamu'];
$harga = $_POST['harga'];
$diskon = $_POST['diskon'];
$namapembeli = $_POST['nama'];
$alamat = $_POST['alamat'];
$norek = $_POST['norek'];

//menambahkan query sql tambah data untuk memasukkan data ke database
$data = mysqli_query($mysqli,"INSERT INTO tb_transaksi SET id='', namajamu='$namajamu', harga='$harga', diskon='$diskon',namapembeli='$namapembeli',alamat='$alamat',norek='$norek' ") or die ("data salah : ".mysqli_error($mysqli));
}
?>
<html>
<head>
	<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Jamu "MAMA KERIZ"</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/jquery.js"></script>
    <script src="bootstrap/jd/bootstrap.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="main.js"></script>
</head>
<body>
<div class="form-group">
                    <div class="col-sm-6">
                    <a href="menu.php"><img src="kembali.png" height="50" width="50" title="kembali"></a>
                    </div>
                </div>
                <br>
                <br>

<h3 align="center">Selamat, pembayaran anda BERHASIL</h3>
<p align="center">Bukti Pembayaran</p>
<br>
<br>
<p align="center">--------------------------------------------------------------------------------------------------------------------------------------------------------------</p>
<p align="center">--------------------------------------------------------------------------------------------------------------------------------------------------------------</p>
<p>Rincian Transaksi:</p>
<br>
<h4> Nama Pembeli : <?php echo $namapembeli;?></h4>
<h4> Alamat       : <?php echo $alamat;?></h4>
<h4> No. Rekening : <?php echo $norek;?></h4>
<h4> Nama Produk  : <?php echo $namajamu;?></h4>
<h3> Harga        : <?php echo $harga;?></h3>
<br>
<br>
<br>
<br>
<p align="center">--------------------------------------------------------------------------------------------------------------------------------------------------------------</p>
<p align="center">--------------------------------------------------------------------------------------------------------------------------------------------------------------</p>
<br>
<h4 align="center">Jamu "MAMA KERIZ" MENYATAKAN INI SEBAGAI BUKTI PEMBAYARAN YANG SAH</h4>
<br>
<br>
<h4 align="center">Jamu "MAMA KERIZ"</h4>
<p align="center">Terimakasi Anda Telah Melakukan Pembayaran, simpan struk ini sebagai bukti pembayaran Anda</p>
<p align="center">Thanks You And Sehat Selalu hehe</p>





<script>
		window.load = print_d();
		function print_d(){
			window.print();
		}
	</script>
</body>
</html>