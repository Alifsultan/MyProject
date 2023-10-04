<?PHP

ini_set('display_errors',0);

?>


<?php
session_start();
if(!isset($_SESSION['username']))
	{
		header("location:./index.php");
	}

include "koneksi.php";
echo "<center>";
if ($_SESSION['tipe'] == "1") 
	{
		include "tampil.php";
	}
else if ($_SESSION['tipe'] == "2") 
	{
		include "tampiluser.php";
	}
?>
