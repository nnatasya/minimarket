<?php
session_start();

if ($_POST) {
    include "koneksi.php";

    $qry_get_barang = mysqli_query($con, "select * from barang where id_barang = '" . $_GET['id_barang'] . "'");
    $dt_barang = mysqli_fetch_array($qry_get_barang);

    $harga_barang = $dt_barang['harga_barang'];
    $jumlah_beli = $_POST['jumlah_beli'];
    $total_bayar = calculateTotal($harga_barang, $jumlah_beli);

    $_SESSION['cart'][] = array(
        'id_barang' => $dt_barang['id_barang'],
        'nama_barang' => $dt_barang['nama_barang'],
        'foto_barang' => $dt_barang['foto_barang'],
        'harga_barang' => $harga_barang,
        'jumlah_beli' => $jumlah_beli,
        'total_bayar' => $total_bayar
    );
}

header('location: keranjang.php');

function calculateTotal($harga_barang, $jumlah_beli) {
    return $harga_barang * $jumlah_beli;
}
?>
