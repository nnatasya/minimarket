<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Tampil User</title>
</head>
<body>
<title>DATA USER</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 16px;
            margin: 0;
            padding: 0;
        }

        h2 {
            text-align: center;
        }
        </style>
    
    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">SALDO</th>
      <th scope="col">NAMA</th>
      <th scope="col">USERNAME</th>
      <th scope="col">AKSI</th>
    </tr>
  </thead>
        <tbody>
            <?php 
            include "koneksi.php";
            $qry_user = mysqli_query($con, "select * from user");
            $no = 0;
            while ($data_user = mysqli_fetch_array($qry_user)) {
                $no++;
            ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $data_user['saldo'] ?></td>
                    <td><?= $data_user['nama_user'] ?></td>
                    <td><?= $data_user['username'] ?></td>
                    <td>
                        <a href="ubah_user.php?id_user=<?= $data_user['id_user'] ?>" class="btn btn-success">Ubah</a> | 
                        <a href="hapus_user.php?id_user=<?= $data_user['id_user'] ?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            <?php 
            }
            ?>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
