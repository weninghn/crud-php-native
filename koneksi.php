<?php

$host = 'localhost';
$nama = 'root';
$pass = '';
$db = 'belajar';

$koneksi = mysqli_connect($host, $nama, $pass, $db);
if (!$koneksi) {
    die("Koneksi Gagal:" . mysqli_connect_error());
}


//function registrasi
function registrasi($data)
{
    global $koneksi;
    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($koneksi, $data["password"]);
    $password2 = mysqli_real_escape_string($koneksi, $data["password2"]);

    //cek username
    $result = mysqli_query($koneksi, "SELECT username FROM user WHERE username = '$username'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script> alert ('username sudah terdaftar') </script>";
        return false;
    }

    //cek konfirmasi password
    if ($password !== $password2) {
        echo "<script> alert ('konfirmasi password tidak sesuai') </script>";
        return false;
    }

    //enkripsi password
    if ($password = password_hash($password, PASSWORD_DEFAULT));

    // tambahkan user baru ke database
    mysqli_query($koneksi, "INSERT INTO user VALUES ('','$username','$password')");
    return mysqli_affected_rows($koneksi);
}
