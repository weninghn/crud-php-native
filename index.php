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
    <title>Produk</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet">
</head>
<body>
    <div class = "mt-3 p-4 d-flex align-items-center justify-content-between">
        <h1>PRODUK</h1>
        <a href="tambah.php" class="btn btn-primary">[+] Tambah Data Produk</a>
    </div>
    <div class = "px-4">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Kode</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Harga</th>  
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = mysqli_query($koneksi, "SELECT * FROM produk");
                $no = 1;
                $jumlah = mysqli_num_rows($query);
                while ($data = mysqli_fetch_assoc($query)){
                    $Kode = $data['Kode'];
                    $Nama = $data['Nama'];
                    $Deskripsi = $data['Deskripsi'];
                    $Harga = $data['Harga'];
                
                ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $Kode ?></td>
                    <td><?= $Nama ?></td>
                    <td><?= $Deskripsi ?></td>
                    <td><?= $Harga ?></td>
                    <td>
                        <form method="post">
                                 <input type="hidden" name="Kode" value="<?= $Kode ?>">
                                 <button name="hapus" class="btn btn-danger">Delete</button>
                                 <a href="update.php?Kode=<?= $Kode ?>" button class="btn btn-warning">Edit</a></button>
                        </form>
                    </tr>
                    <?php }?>
            </tbody>
            </table>
            Jumlah Produk = <?= $jumlah ?>
            <br>
            <a href="logout.php">
            <button class="btn btn-danger">Logout</button>
            </a>
            </br>
            <br>
        </div>

</body>
</html>