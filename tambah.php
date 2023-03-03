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
    <title>Tambah Produk</title>
</head>
<body>
    <div class="container bg-light mt-5">
        <?php
        if (isset($_POST['add'])){
            if($_POST['add']=='berhasil'){
                echo "<div class='alert alert-success'>Tambah Data Produk Berhasil</div>";
            }elseif($_GET['add']=='gagal'){
                echo "<div class='alert alert-danger'>Tambah Data Produk Gagal</div>";
            }
            }
        ?>
        <h2 type="text-center">Form Tambah Daftar Produk</h2>
        <form method="post">
            <br>
                 <h6>Nama  :</h6>
                <input type="text" name="Nama" required>
            </br>
            <br>
                 <h6>Deskripsi  :</h6>
                <input type="text" name="Deskripsi"required>
            </br>
            <br>
                 <h6>Harga  :</h6>
                <input type="text" name="Harga"required>
            </br>
            <br></br>
            <button type="submit" class="btn btn-primary" name="add">Tambah Produk</button>
        </form>
             <a href="index.php">
                 <button class="btn btn-danger">Kembali</button>
             </a>
    </div>
</body>
</html>