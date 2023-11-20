<?php 
    if($_GET['id_kasir']){
        include "koneksi.php";
        $qry_hapus=mysqli_query($con,"delete from kasir where id_kasir='".$_GET['id_kasir']."'");
        if($qry_hapus){
            echo "<script>alert('Sukses hapus kasir');location.href='tampil_kasir.php';</script>";
        } else {
            echo "<script>alert('Gagal hapus kasir');location.href='tampil_kasir.php';</script>";
        }
    }
?>
