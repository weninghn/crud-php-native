<?php

if (isset($_POST['add'])){
    $Nama = $_POST['Nama'];
    $Deskripsi = $_POST['Deskripsi'];
    $Harga = $_POST['Harga'];
    
    echo "<script>console.log('$Nama');</script>";

    
    $tambah = mysqli_query($koneksi, "INSERT INTO produk VALUES ('','$Nama','$Deskripsi','$Harga')");
        if ($tambah){
            header("location:tambah.php?add=berhasil");
        }else{
            header("location:tambah.php?add=gagal");
        }
}

if (isset($_POST['hapus'])){
    $Kode = $_POST['Kode'];
    $hapus = mysqli_query($koneksi, "Delete from produk where Kode='$Kode'");
    if($hapus){
        header("location:index.php?hapus=berhasil");
        }else{  
            header("location:index.php?hapus=gagal");
    }
}

if (isset($_POST['edit'])){
    $Kode = $_POST['Kode'];
    $Nama = $_POST['Nama'];
    $Deskripsi = $_POST['Deskripsi'];
    $Harga = $_POST['Harga'];
    $edit = mysqli_query($koneksi, "UPDATE produk SET Nama = '$Nama', Deskripsi = '$Deskripsi', Harga = '$Harga' WHERE produk.Kode=$Kode");
    if($edit){
        header("location:index.php?update=berhasil");
        }else{
            header("location:index.php?update=gagal");
    }
}
?>