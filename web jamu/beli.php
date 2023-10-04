<<!DOCTYPE html>
    <?php
include "koneksi.php"; // memanggil file koneksi.php untuk menghubungkan ke database

 //memberikan perintah query sql menampilkan data berdasarkan id yang dipilih
$data = mysqli_query($mysqli, "SELECT * FROM jual WHERE id='$_GET[id]'");
$datashow = mysqli_fetch_array($data); // menampilkan data yang sudah di pilih untuk di edit
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

                <form method="post" action="printbeli.php">
                    <div class="col-sm-12">
                        <legend style="color:#ffffff;">Transaksi</legend>
                    </div>
                    <br>
                    <br>
                    <div class="form-group">
                        <div class="col-sm-6">
                            <label for="">Nama Jamu</label>
                        </div>
                        <br>
                        <br>
                        <div class="col-sm-6">
                            <input name="namajamu" type="text" class="form-control" readonly
                                value="<?php echo $datashow['jamu'];?>">
                        </div>
                        <br>
                    </div>
                    <br>

                    <div class="form-group">
                        <div class="col-sm-6">
                            <label for="">Harga</label>
                        </div>
                        <br>
                        <br>
                        <div class="col-sm-6">
                            <input name="harga" type="text" class="form-control" readonly
                                value="<?php echo $datashow['harga'];?>">
                        </div>
                        <br>
                    </div>
                    <br>

                    <div class="form-group">
                        <div class="col-sm-6">
                            <label for="">Diskon</label>
                        </div>
                        <br>
                        <br>
                        <div class="col-sm-6">
                            <input name="diskon" type="text" class="form-control" readonly
                                value="<?php echo $datashow['diskon'];?>">
                        </div>
                        <br>
                    </div>
                    <br>

                    <div class="form-group">
                        <div class="col-sm-6">
                            <label for="">Nama</label>
                        </div>
                        <br>
                        <br>
                        <div class="col-sm-6">
                            <input name="nama" type="text" class="form-control" placeholder="Masukan Nama Anda">
                        </div>
                        <br>
                    </div>
                    <br>

                    <div class="form-group">
                        <div class="col-sm-6">
                            <label for="">Alamat</label>
                        </div>
                        <br>
                        <br>
                        <div class="col-sm-6">
                            <input name="alamat" type="text" class="form-control" placeholder="Masukan Alamat Anda">
                        </div>
                        <br>
                    </div>
                    <br>

                    <div class="form-group">
                        <div class="col-sm-6">
                            <label for="">No. Rekening</label>
                        </div>
                        <br>
                        <br>
                        <div class="col-sm-6">
                            <input name="norek" type="text" class="form-control"
                                placeholder="Masukan No. Rekening Anda">
                        </div>
                        <br>
                    </div>
                    <br>

                    <div class="form-group">
                        <div class="col-sm-6">
                            <button type="submit" name="beli" class="btn btn-success" value="EDIT">Beli</button>
                        </div>
                    </div>
                    <br>
                    <br>


                </form>

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