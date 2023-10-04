<<!DOCTYPE html>
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
        <style>
        body {
            background-image: url('background.jpg');
            color: white;
            font-family: agency fb;

        }

        .container {
            margin-left: 160px;
            width: 980px;
        }

        .header {
            background-image: url('header.jpg');
        }

        .content {
            background: rgba(2, 2, 2, 0.5);
        }

        .footer {
            background-image: url('header.jpg');
            padding: 5px;
        }

        #a {
            margin-left: 10px;
            margin-bottom: 30px;
        }

        #a img {
            height: 30px;
            width: 45px;
        }

        #tabel {
            width: 700px;
        }
        </style>
    </head>

    <body>
        <div class="container">

            <div class="header">
                <div id="a">
                    <h4 align="left"><b><b></h4>
                </div>
                </br>

                <div id="c">

                    <h2 align="center"><b>Jamu "MAMA KERIZ"</b></h2>
                    <br>
                </div>
                <div id="b">
                    <div class="form-group">
                        <div class="col-sm-7">
                            <form action="cariuser.php" method="POST" name="input" class="navbar-form navbar-left">
                                <input name="input_cari" type="text" class="form-control"
                                    placeholder="Cari Berdasarkan Nama Jamu" style="width:250px;">
                                <button type="submit" name="cari" class="btn btn-default" value="Cari">Cari</button>
                            </form>
                        </div>
                    </div>
                    <br>
                    <br>
                    <br>
                </div>
                </br>

            </div>
            <div class="content">
                <br>
                <br>
                <?php
				if(!isset($_SESSION['username']))
				{
				header("location:./index.php");
				}
				include "koneksi.php";// memanggil file koneksi.php untuk menghubungkan ke database
				?>
                <legend style="color:#ffffff;">Daftar Jamu</legend>
                <div class="col-sm-3">
                    <a href="tambah.php"><img src="tambah.png" height="30" width="30" title="tambah data jamu" /></a>
                </div>
                <div class="col-sm-3">
                    <a href="print.php"><img src="print.png" height="30" width="30" title="print" /></a></p>
                </div>
                <div class="col-sm-3">
                    <a href="atur.php"><img src="atur.png" height="30" width="30" title="atur" /></a></p>
                </div>
                <div class="col-sm-3">
                    <p align="right"><img src="avatar.png" height="50"
                            width="50" /><?php include "koneksi.php"; echo $_SESSION['username']; echo " "; echo "(Admin)"; echo " ";?><a
                            href="logout.php"><img src="logout.png" height="30" width="30" title="logout" /></a></p>
                </div>
                <br>

                <div id="tabel">
                    <h4>Tabel Jamu</h4>
                    <table class="table table-hover" style="color:#000000;">
                        <thead>
                            <tr>
                                <th><b>Id</b></th>
                                <th><b>Nama Jamu</b></th>
                                <th><b>Khasiat</b></th>
                                <th><b>Harga</b></th>
                                <th><b>Diskon</b></th>
                                <th><b>Aksi</b></th>
                            <tr>
                        </thead>
                        <tbody>
                            <?php 
	$data = mysqli_query($mysqli,"SELECT * FROM jual"); // memberikan perintah query sql untuk menampilkan semua data di tabel jual
	//perintah untuk menampilkan semua data yang ada di tabel jual menggunakan perulangan
	while ($show = mysqli_fetch_array($data)) {
	?>
                            <tr>
                                <td><?php echo $show['id'];?></td>
                                <td><?php echo $show['jamu'];?></td>
                                <td><?php echo $show['khasiat'];?></td>
                                <td><?php echo $show['harga'];?></td>
                                <td><?php echo $show['diskon'];?></td>
                                <td><a href="update.php?id=<?php echo $show['id'];?>"><img src="edit.png" height="20"
                                            width="20" title="edit" /> || <a
                                            href="deletesql.php?id=<?php echo $show['id'];?>"><img src="delete.png"
                                                height="20" width="20" title="hapus" /></a></a></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <br>
                    <br>

                    <h4>Tabel Transaksi</h4>
                    <table class="table table-hover" style="color:#000000;">
                        <thead>
                            <tr>
                                <th><b>Id</b></th>
                                <th><b>Nama Jamu</b></th>
                                <th><b>Harga</b></th>
                                <th><b>Diskon</b></th>
                                <th><b>Nama Pembeli</b></th>
                                <th><b>Alamat</b></th>
                                <th><b>No. Rekening</b></th>
                            <tr>
                        </thead>
                        <tbody>
                            <?php 
	$data = mysqli_query($mysqli,"SELECT * FROM tb_transaksi"); // memberikan perintah query sql untuk menampilkan semua data di tabel jual
	//perintah untuk menampilkan semua data yang ada di tabel jual menggunakan perulangan
	while ($show = mysqli_fetch_array($data)) {
	?>
                            <tr>
                                <td><?php echo $show['id'];?></td>
                                <td><?php echo $show['namajamu'];?></td>
                                <td><?php echo $show['harga'];?></td>
                                <td><?php echo $show['diskon'];?></td>
                                <td><?php echo $show['namapembeli'];?></td>
                                <td><?php echo $show['alamat'];?></td>
                                <td><?php echo $show['norek'];?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <br>
                    <br>

                    <h4>Kritik dan Saran</h4>
                    <table class="table table-hover" style="color:#000000;">
                        <thead>
                            <tr>
                                <th><b>Id</b></th>
                                <th><b>Nama Pengkritik</b></th>
                                <th><b>Email</b></th>
                                <th><b>Kritik dan Saran</b></th>
                            <tr>
                        </thead>
                        <tbody>
                            <?php 
	$data = mysqli_query($mysqli,"SELECT * FROM tb_tiksar"); // memberikan perintah query sql untuk menampilkan semua data di tabel jual
	//perintah untuk menampilkan semua data yang ada di tabel jual menggunakan perulangan
	while ($show = mysqli_fetch_array($data)) {
	?>
                            <tr>
                                <td><?php echo $show['id_pengkritik'];?></td>
                                <td><?php echo $show['nama_pengkritik'];?></td>
                                <td><?php echo $show['email'];?></td>
                                <td><?php echo $show['tiksar'];?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <br>

                <br>
                <br>
                </br>
            </div>

            <div class="footer">

                <p align="center"><b>Copyright© 2022 BALIP CODE</b></p>

            </div>
        </div>

    </body>

    </html>