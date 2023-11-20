<?php 
    if($_POST){
        $username=$_POST['username'];
        $password=$_POST['password'];
        if(empty($username)){
            echo "<script>alert('Username tidak boleh kosong');location.href='login_kasir.php';</script>";
        } elseif(empty($password)){
            echo "<script>alert('Password tidak boleh kosong');location.href='login_kasir.php';</script>";
        } else {
            include "koneksi.php";
            $qry_login=mysqli_query($con,"select * from kasir where username = '".$username."'"."AND password='".md5($password)."'");
            if(mysqli_num_rows($qry_login)>0){
                $dt_login=mysqli_fetch_array($qry_login);
                session_start();
                $_SESSION['username']=$dt_login['username'];
                $_SESSION['password']=$dt_login['password'];
                $_SESSION['status_login']=true;
                header("location: barang.php");
            } else {
                echo md5($password);
                // echo "<script>alert('Username dan Password tidak benar');location.href='login_kasir.php';</script>";
            }
        }
    }
?>
