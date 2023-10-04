<?php 
include "koneksi.php";// memanggil file koneksi.php untuk menghubungkan ke database

 //peritah untuk menghapus data sesuai id yang dipilih
if(isset($_GET['id'])){
    if(empty($_GET['id'])){
        echo "<b>Data yang dihapus tidak ada</b>";
    }
    else {
        $delete = mysqli_query($mysqli,"DELETE FROM tb_user WHERE id='$_GET[id]'") or die ("Mysql Error : ".mysqli_error($mysqli)); // query sql hapus data
        if($delete){
            include "berhasilhapus.php";
        }
    }
}
?>
