<<!DOCTYPE html>
    <?php
include "koneksi.php"; // memanggil file koneksi.php untuk menghubungkan ke database

 //memberikan perintah query sql menampilkan data berdasarkan id yang dipilih
$data = mysqli_query($mysqli, "SELECT * FROM tb_user WHERE id='$_GET[id]'");
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

            </div>
            <div class="content">
                <br>
                <br>
                <div class="form-group">
                    <div class="col-sm-6">
                        <a href="menu.php"><img src="kembali.png" height="50" width="50" title="kembali"></a>
                    </div>
                </div>
                <br>
                <br>
                <form method="post" action="updateusersql.php">
                    <div class="col-sm-12">
                        <legend style="color:#ffffff;">Update User</legend>
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

                    <br>

                    <div class="form-group">
                        <div class="col-sm-6">
                            <label for="">Username</label>
                        </div>
                        <br>
                        <br>
                        <div class="col-sm-6">
                            <input name="username" type="text" class="form-control"
                                value="<?php echo $datashow['username'];?>">
                        </div>
                        <br>
                    </div>
                    <br>

                    <div class="form-group">
                        <div class="col-sm-6">
                            <label for="">Password</label>
                        </div>
                        <br>
                        <br>
                        <div class="col-sm-6">
                            <input name="password" type="text" class="form-control"
                                value="<?php echo $datashow['password'];?>">
                        </div>
                        <br>
                    </div>
                    <br>
                    <div class="form-group">
                        <div class="col-sm-6">
                            <label for="">Tipe</label>
                        </div>
                        <br>
                        <br>
                        <div class="col-sm-6">
                            <lable for="exampleFormControlSelect1">
                                <select class="form-control" id="exampleFormControlSelect1" name="tipe">
                                    <option>1</option>
                                    <option>2</option>
                                    <?php //koneksi
                                include"koneksi.php";
                                $sql = mysqli_query($mysqli,"SELECT * FROM tb_level");
                                while($row = mysqli_fetch_array($sql)){
                                echo "<option value='$row[id_akses]'>$row[level]</option>";
                                }
                                ?>
                                </select>
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