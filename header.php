<?php 
session_start();
    if($_SESSION['status_login']!=true){
        header('location: login.php');
    }
?>
<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" style="background-color:green;">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">INDOJULY</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="barang.php">Jenis Barang</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="keranjang.php">Keranjang</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  <div class="container bg-light rounded" style="margin-top:10px" >
