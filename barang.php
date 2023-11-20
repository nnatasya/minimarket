<!DOCTYPE html>
<html>
<head>
	<title>LOGIN USER</title>
	<link rel="stylesheet" type="text/css" href="slide navbar dashboard.css">
	<link rel="stylesheet" type="text/css" href="css/dashboard.css">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<?php 
    include "header.php";
?>
<h2>Daftar Barang</h2>
<div class="row">
    <?php 
    include "koneksi.php";
    $qry_barang=mysqli_query($con,"select * from barang");
    $foto_counter = 1;
    while($dt_barang=mysqli_fetch_array($qry_barang)){
        ?>
        <div class="col-md-3 container">
            <div class="card" >
              <div class="card-body">
                <h5 class="card-title"><?=$dt_barang['nama_barang']?></h5>
                <img src="foto/foto<?=$foto_counter?>.jpg" width="200" height="200" alt="Foto Barang">
                
                <p class="card-text"><?=substr($dt_barang['harga_barang'], 0, 20)?></p>
                <a href="beli_barang.php?id_barang=<?=$dt_barang['id_barang']?>" class="btn btn-primary">Beli</a>
              </div>
            </div>
            <!-- Tambahkan spasi di bawah setiap kolom dengan CSS -->
            <div style="margin-bottom: 20px;"></div>
        </div>
        <?php
        $foto_counter++;
    }
    ?>
</div>
<?php 
    include "footer.php";
?>
</html>