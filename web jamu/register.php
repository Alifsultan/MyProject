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

            </div>
            <div class="content">
                <br>
                <br>
                <div class="form-group">
                    <div class="col-sm-6">
                        <a href="login.php"><img src="kembali.png" height="50" width="50" title="kembali"></a>
                    </div>
                </div>
                <br>
                <br>
                <form method="post" action="registersql.php">
                    <div class="col-sm-12">
                        <legend style="color:#ffffff;">Register</legend>
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
                            <input name="id" type="text" class="form-control"
                                placeholder="Id Anda     Contoh:1731710106" required="required">
                        </div>
                        <br>
                    </div>
                    <br>

                    <div class="form-group">
                        <div class="col-sm-6">
                            <label for="">Username</label>
                        </div>
                        <br>
                        <br>
                        <div class="col-sm-6">
                            <input name="username" type="text" class="form-control"
                                placeholder="Username Anda       Contoh : User123" required="required">
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
                            <input name="password" type="password" class="form-control" placeholder="Password"
                                required="required">
                        </div>
                        <br>
                    </div>
                    <br>
                    <br>

                    <div class="form-group">
                        <div class="col-sm-6">
                            <button type="submit" name="simpan" class="btn btn-success" id="simpan"
                                value="simpan">Simpan</button>
                            <button type="reset" name="button2" id="button2" class="btn btn-danger" value="batal"><a
                                    href="login.php">Batal</button><br>
                        </div>
                    </div>
                    <br>
                    <br>



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