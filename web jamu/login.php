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
                <div class="form-group">
                    <div class="col-sm-12">
                        <a href="index.php"><img src="kembali.png" height="50" width="50" title="kembali"></a>
                    </div>
                    </br>
                </div>
                </br>

                <form method="post" action="ceklogin.php">
                    <div class="col-sm-12">
                        <legend style="color:#ffffff;">Login Page</legend>
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
                            <input name="username" type="text" class="form-control" placeholder="Masukan Username Anda">
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
                            <input name="password" type="password" class="form-control"
                                placeholder="Masukan Password Anda">
                        </div>
                        <br>
                    </div>
                    <br>

                    <div class="form-group">
                        <div class="col-sm-6">
                            <button type="submit" name="submit" class="btn btn-primary" value="login">Login</button>
                        </div>
                    </div>
                    <br>
                    <br>

                    <div class="nav">
                        <div class="col-sm-6">
                            <p>Belum Punya Akun?<a href="register.php">Register Baru</a></p>
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