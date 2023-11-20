<?php
if($_POST){
    include "koneksi.php";
    
    $id_kasir = isset($_POST['id_kasir']) ? $_POST['id_kasir'] : null; // Check if id_user is set
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Lakukan validasi input sesuai kebutuhan Anda
    
    if ($id_kasir!== null) { // Check if id_user is not null
        // Query SQL untuk update data pengguna
        $update_query = "UPDATE kasir SET nama='$nama', username='$username', password='$password' WHERE id_kasir='$id_kasir'";
        
        if(mysqli_query($con, $update_query)){
            echo "<script>alert('Sukses update kasir');location.href='tampil_kasir.php';</script>";
        } else {
            echo "<script>alert('Gagal update kasir');location.href='ubah_kasir.php?id_kasir=".$id_kasir."';</script>";
        }
    } else {
        echo "<script>alert('Data tidak ditemukan');location.href='tampil_kasir.php';</script>";
    }
    
    mysqli_close($con);
} else {
    echo "<script>alert('Data tidak ditemukan');location.href='tampil_kasir.php';</script>";
}
?>
