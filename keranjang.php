<?php 
session_start();
    if($_SESSION['status_login']!=true){
        header('location: login.php');
    }
    $total = 0;
?>

<!DOCTYPE html>
<html>
<head>
	<title>Slide Navbar</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/cart.css">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<div class="card">
            <div class="row">
                <div class="col-md-8 cart">
                    <div class="title">
                        <div class="row">
                            <div class="col"><h4><b>Shopping Cart</b></h4></div>
                        </div>
                    </div>    
                    <?php
                        foreach (@$_SESSION['cart'] as $key_produk => $val_produk): 
                        $total+=$val_produk['total_bayar']
                    ?>

                    <div class="row border-top border-bottom">
                        <div class="row main align-items-center">
                            <div class="col-2"><img class="img-fluid" src="foto/foto<?=$val_produk['foto_barang']?>"></div>
                            <div class="col">
                                <div class="row text-muted"><?=$val_produk['nama_barang']?></div>
                            </div>
                            <div class="col">
                                <a href="#" class="border"><?=$val_produk['jumlah_beli']?></a>
                            </div>
                            <div class="col"> Rp.<?=$val_produk['total_bayar']?> <a class="close" href="hapus_keranjang.php?id=<?=$key_produk?>">&#10005;</a></div>
                        </div>
                    </div>
                    <?php endforeach ?>
                    <div class="back-to-shop">
                        <a href="barang.php">&leftarrow;</a><span class="text-muted">Back to shop
                    </div>
                </div>
                <div class="col-md-4 summary">
                    <div><h5><b>Summary</b></h5></div>
                    <hr>
                    <div class="row">
                        <div class="col" style="padding-left:0;">TOTAL HARGA</div>
                        <div class="col text-right"> Rp.<?=$total?> </div>
                    </div>
                    <a href="checkout.php"><button class="btn">CHECKOUT</button></a>
                </div>
            </div>
            
        </div>
</div>