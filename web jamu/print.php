<?php
	include "koneksi.php";
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
	<table class="table table-striped" width="90%" style="color:#000000;" align="center">
	<tr class="tableheader">
    <th rowspan="1">Id Jamu</th>
    <th>Nama Jamu</th>
<th>Khasiat</th>
<th>Harga</th>
<th>Diskon</th>

</tr>
<?php
        $data = "select * from jual"; 
        $result=mysqli_query($mysqli,$data);
        while($hasil = mysqli_fetch_array($result))
        { 
            ?>
<tr id="rowHover">
    <td width="10%" align="center"><?php echo $hasil['id']; ?></td>
<td width="25%" id="column_padding"><?php echo $hasil['jamu']; ?></td>
<td width="25%" id="column_padding"><?php echo $hasil['khasiat']; ?></td>
<td width="25%" id="column_padding"><?php echo $hasil['harga']; ?></td>
<td width="25%" id="column_padding"><?php echo $hasil['diskon']; ?></td>
</tr>
<?php } ?>
</table>
<script>
		window.load = print_d();
		function print_d(){
			window.print();
		}
	</script>
</body>
</html>
