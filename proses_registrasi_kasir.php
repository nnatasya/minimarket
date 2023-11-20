<?php
if ($_POST) {
    // Ambil data dari formulir
    $username = $_POST['username'];
    $password = $_POST['password'];
    $nama = $_POST['nama'];

    // Validasi data (Anda dapat menambahkan validasi tambahan sesuai kebutuhan)
    if ( empty($username) || empty($password)) {
        echo "<script>alert('Semua field harus diisi.');location.href='proses_registrasi_kasir.php';</script>";
    } else {
        include "koneksi.php";
        $insert = mysqli_query($con, "INSERT INTO kasir (username, password, nama) VALUES ( '$username', '".md5($password)."','$nama')");
        if ($insert) {
            echo "<script>alert('Registrasi berhasil. Silakan login.');location.href='login_kasir.php';</script>";
        } else {
            echo "<script>alert('Registrasi gagal.');location.href='login_kasir.php';</script>";
        }

    
    }
}
?>
