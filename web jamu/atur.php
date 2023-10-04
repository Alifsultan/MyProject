<?php

session_start();
include "koneksi.php";
echo "<center>";
?>
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
                <div class="form-group">
                    <div class="col-sm-6">
                        <p align="left"><a href="menu.php"><img src="kembali.png" height="50" width="50"
                                    title="kembali"></a></p>
                    </div>
                </div>
                <br>
                <br>
                <legend style="color:#ffffff;">Pengaturan User</legend>
                <br>

                <div id="tabel">
                    <table class="table table-hover" style="color:#000000;">
                        <thead>
                            <tr>
                                <th><b>Id</b></th>
                                <th><b>Username</b></th>
                                <th><b>Password</b></th>
                                <th><b>Tipe</b></th>
                                <th><b>Aksi</b></th>
                            <tr>
                        </thead>
                        <tbody>
                            <?php 
    include "koneksi.php";
	$data = mysqli_query($mysqli,"SELECT * FROM tb_user"); // memberikan perintah query sql untuk menampilkan semua data di tabel jual
	//perintah untuk menampilkan semua data yang ada di tabel jual menggunakan perulangan
	while ($show = mysqli_fetch_array($data)) {
	?>
                            <tr>
                                <td><?php echo $show['id'];?></td>
                                <td><?php echo $show['username'];?></td>
                                <td><?php echo $show['password'];?></td>
                                <td><?php echo $show['tipe'];?></td>
                                <td><a href="updateuser.php?id=<?php echo $show['id'];?>"><img src="edit.png"
                                            height="20" width="20" title="edit" /> || <a
                                            href="deleteusersql.php?id=<?php echo $show['id'];?>"><img src="delete.png"
                                                height="20" width="20" title="hapus" /></a></a></td>
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