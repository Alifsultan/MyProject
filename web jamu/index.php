<<!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Jamu "MAMA KERIZ"</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <script src="bootstrap/js/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
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

        .header {}

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
            <div class="footer">

                <p align="center"></p>
                </br>
            </div>
            <div class="header">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                        <li data-target="#myCarousel" data-slide-to="3"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" align="center">
                        <div class="item active">
                            <img src="satu.jpeg" alt="1" style="width:220pt;">
                        </div>

                        <div class="item">
                            <img src="dua.jpeg" alt="2" style="width:220pt;">
                        </div>

                        <div class="item">
                            <img src="tiga.jpeg" alt="3" style="width:220pt;">
                        </div>

                        <div class="item">
                            <img src="empat.jpeg" alt="4" style="width:220pt;">
                        </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

            </div>
            <div class="content">
                <br>
                <h3 align="center" style="color:#ffffff;">Jamu "MAMA KERIZ"</h3>
                <p align="center"><a href="login.php"><button type="button" class="btn btn-default">Sign In</button></a>
                </p>
                <br>
                <br>
                <p align="center">Contact Us</p>
                <p align="center">
                    <a href="facebook.com"><img src="facebook.png" height="30" width="30" title="BALIP CODE" /></a>
                    <a href="instagram.com"><img src="instagram.png" height="30" width="30" title="BALIP CODE" /></a>
                    <a href="whatsapp.com"><img src="whatsapp.png" height="30" width="30" title="089514574261" /></a>
                    <a href="line.com"><img src="line.png" height="30" width="30" title="@balipcode" /></a>
                </p>
                </br>

            </div>
            <div class="footer">

                <p align="center"><b>Copyright© 2022 BALIP CODE</b></p>

            </div>
        </div>

    </body>

    </html>