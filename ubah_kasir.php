<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>UPDATE KASIR</title>
</head>
<body>
    <?php 
    include "koneksi.php";
    if(isset($_GET['id_kasir']) && is_numeric($_GET['id_kasir'])){
        $id_kasir = $_GET['id_kasir'];
        $qry_get_kasir=mysqli_query($con,"select * from kasir where id_kasir = '".$id_kasir."'");
        $dt_kasir=mysqli_fetch_array($qry_get_kasir);
    } else {
        echo "<script>alert('ID User tidak valid');location.href='tampil_kasir.php';</script>";
    }
    ?>

    <h3>UPDATE KASIR</h3>
    <form action="proses_ubah_kasir.php" method="post">
        <input type="hidden" name="id_kasir" value="<?=$dt_kasir['id_kasir']?>">
        nama: 
        <input type="text" name="nama" value="<?=$dt_kasir['nama']?>" class="form-control">
        Username: 
        <input type="text" name="username" value="<?=$dt_kasir['username']?>" class="form-control">
        Password: 
        <input type="password" name="password" value="<?=$dt_kasir['password']?>" class="form-control">
        <button type="submit" class="btn btn-primary">UPDATE KASIR</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>

