<?php
if ($_POST) {
    // Ambil data dari formulir
    $saldo = $_POST['saldo'];
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validasi data (Anda dapat menambahkan validasi tambahan sesuai kebutuhan)
    if (empty($saldo) || empty($nama) || empty($username) || empty($password)) {
        echo "<script>alert('Semua field harus diisi.');location.href='proses_registrasi.php';</script>";
    } else {
        include "koneksi.php";
        $insert = mysqli_query($con, "INSERT INTO user (nama_user, saldo, username, password) VALUES ('$nama', '$saldo', '$username', '".md5($password)."')");
        if ($insert) {
            echo "<script>alert('Registrasi berhasil. Silakan login.');location.href='login.php';</script>";
        } else {
            echo "<script>alert('Registrasi gagal.');location.href='login.php';</script>";
        }

    
    }
}
?>
