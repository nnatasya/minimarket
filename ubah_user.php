<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>UPDATE USER</title>
</head>
<body>
    <?php 
    include "koneksi.php";
    if(isset($_GET['id_user']) && is_numeric($_GET['id_user'])){
        $id_user = $_GET['id_user'];
        $qry_get_user=mysqli_query($con,"select * from user where id_user = '".$id_user."'");
        $dt_user=mysqli_fetch_array($qry_get_user);
    } else {
        echo "<script>alert('ID User tidak valid');location.href='tampil_user.php';</script>";
    }
    ?>

    <h3>UPDATE USER</h3>
    <form action="proses_ubah_user.php" method="post">
        <input type="hidden" name="id_user" value="<?=$dt_user['id_user']?>">
        saldo:
        <input type="integer" name="saldo" value="<?=$dt_user['saldo']?>" class="form-control">
        nama: 
        <input type="text" name="nama_user" value="<?=$dt_user['nama_user']?>" class="form-control">
        Username: 
        <input type="text" name="username" value="<?=$dt_user['username']?>" class="form-control">
        Password: 
        <input type="password" name="password" value="<?=$dt_user['password']?>" class="form-control">
        <button type="submit" class="btn btn-primary">UPDATE USER</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>

