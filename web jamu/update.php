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

                <div id="b">
                    <form class="navbar-form navbar-right" role="search">
                        <div class="form-group">
                            <p><input type="text" class="form-control" placeholder="Cari">
                                <button type="submit" class="btn btn-default">Cari</button>&nbsp;
                            </p>

                        </div>
                    </form>
                    <br>
                    <br>
                </div>
                </br>

            </div>
            <div class="content">
                <br>
                <br>

                <form method="post" action="updatesql.php">
                    <div class="col-sm-12">
                        <legend style="color:#ffffff;">Update Data Jamu</legend>
                    </div>
                    <br>
                    <br>
                    <div class="form-group">
                        <div class="col-sm-6">
                            <label for="">Id</label>
                        </div>
                        <br>
                        <br>
                        <div class="col-sm-6">
                            <input name="id" type="text" class="form-control" value="<?php echo $_GET['id'];?>">
                        </div>
                        <br>
                    </div>
                    <br>

                    <div class="form-group">
                        <div class="col-sm-6">
                            <label for="">Nama Jamu</label>
                        </div>
                        <br>
                        <br>
                        <div class="col-sm-6">
                            <select name="jamu" id="input${1/(\w+)/\u\1/g}" class="form-control"
                                value="<?php echo $datashow['jenis'];?>">
                                <option value="Sinom">Sinom</option>
                                <option value="Kunir">Kunir</option>
                                <option value="Kencur">Kencur</option>
                            </select>
                        </div>
                        <br>
                    </div>
                    <br>

                    <div class="form-group">
                        <div class="col-sm-6">
                            <label for="">Khasiat</label>
                        </div>
                        <br>
                        <br>
                        <div class="col-sm-6">
                            <input name="khasiat" type="text" class="form-control"
                                value="<?php echo $datashow['khasiat'];?>">
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
                            <input name="harga" type="text" class="form-control"
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
                            <input name="diskon" type="text" class="form-control"
                                value="<?php echo $datashow['diskon'];?>">
                        </div>
                        <br>
                    </div>
                    <br>

                    <div class="form-group">
                        <div class="col-sm-6">
                            <button type="submit" name="update" class="btn btn-success" value="EDIT">Update</button>
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