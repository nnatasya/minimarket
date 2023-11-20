<?php
if($_POST){
    include "koneksi.php";
    
    $id_user = isset($_POST['id_user']) ? $_POST['id_user'] : null; // Check if id_user is set
    $saldo = $_POST['saldo'];
    $nama_user = $_POST['nama_user'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Lakukan validasi input sesuai kebutuhan Anda
    
    if ($id_user !== null) { // Check if id_user is not null
        // Query SQL untuk update data pengguna
        $update_query = "UPDATE user SET saldo='$saldo', nama_user='$nama_user', username='$username', password='$password' WHERE id_user='$id_user'";
        
        if(mysqli_query($con, $update_query)){
            echo "<script>alert('Sukses update user');location.href='tampil_user.php';</script>";
        } else {
            echo "<script>alert('Gagal update user');location.href='ubah_user.php?id_user=".$id_user."';</script>";
        }
    } else {
        echo "<script>alert('Data tidak ditemukan');location.href='tampil_user.php';</script>";
    }
    
    mysqli_close($con);
} else {
    echo "<script>alert('Data tidak ditemukan');location.href='tampil_user.php';</script>";
}
?>
