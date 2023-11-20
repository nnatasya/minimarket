<?php 
    include "header.php";
    include "koneksi.php";
    $qry_detail_barang=mysqli_query($con,"select * from barang where id_barang = '".$_GET['id_barang']."'");
    $dt_barang=mysqli_fetch_array($qry_detail_barang);
?>
<h2>Pembelian Barang</h2>
<div class="row">
    <div class="col-md-4">
        <img src="foto/foto<?=$dt_barang['foto_barang']?>" class="card-img-top">
    </div>
    <div class="col-md-8">
        <form action="proses_keranjang.php?id_barang=<?=$dt_barang['id_barang']?>" method="post">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <td>Nama Barang</td><td><?=$dt_barang['nama_barang']?></td>
                    </tr>
                    <tr>
                        <td>Harga</td><td><?=$dt_barang['harga_barang']?></td>
                    </tr>
                    <tr>
                        <td>Jumlah Pembelian</td><td><input type="number" name="jumlah_beli" value="1"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input class="btn btn-success" type="submit" value="BELI"></td>
                    </tr>
                </thead>
            </table>
        </form>
    </div>
</div>
<?php 
    include "footer.php";
?>
