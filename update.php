<?php
session_start();
if (!isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
}
require 'koneksi.php';
include 'proses.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <title>Edit Data Produk</title>
</head>
<body>
    <div class="container bg-light mt-5">
        <?php
        if(isset($_POST['edit'])){
            if($_POST['edit']=='berhasil'){
                echo "<div class='alert alert-success'>Ubah Data Produk Berhasil</div>";
            }else if($_GET['edit']=='gagal'){
                echo "<div class='alert alert-danger'>Ubah Data Produk Gagal</div>";
            }
        }
        ?>
        <h3 type class="text-center">From Ubah Data Produk</h3>
        <?php
        $Kode = $_GET['Kode'];
        $query = mysqli_query($koneksi, "SELECT * FROM produk WHERE Kode=$Kode");
        while($data = mysqli_fetch_array($query)){
            $Kode = $data['Kode'];
            $Nama = $data['Nama'];
            $Deskripsi = $data['Deskripsi'];
            $Harga = $data['Harga'];
        }
        ?>
        <form method="post">
            <br>
                 <h6> Kode  :</h6>
                <input type="text" value="<?= $Kode ?>" name="Kode">
            </br>
            <br>
                 <h6>Nama  :</h6>
                <input type="text" value="<?= $Nama ?>" name="Nama" required>
            </br>
            <br>
                 <h6>Deskripsi  :</h6>
                <input type="text" value="<?= $Deskripsi ?>" name="Deskripsi" required>
            </br>
            <br>
                 <h6>Harga  :</h6>
                <input type="text" value="<?= $Harga ?>" name="Harga" required>
            </br>
            <br></br>
            <button type="submit" class="btn btn-primary" name="edit">Ubah Data Produk</button>
        </form>
             <a href="index.php">
                 <button class="btn btn-danger">Kembali</button>
             </a>
</body>
</html>