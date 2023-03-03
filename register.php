<?php
include 'koneksi.php';
if(isset($_POST["register"])){
    if(registrasi($_POST) > 0 ){
        echo "<script> alert ('user baru ditambahkan') </script>";
    } else {
        echo mysqli_error($koneksi);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRASI</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="card shadow mt-5" style="position: relative ;width:70%; margin-left:15%">
        <div class="card-body">
            <h1>Halaman Registrasi</h1>
        <br>
            <h3>Silahkan Isi Data Registrasi Berikut</h3>
        </br>
        
            <form action="" method="post">
        <br>
            <h5>Username :</h5>
            <input type="text" name="username" id="username">
        </br>
        <br>
            <h5>Password</h5>
            <input type="password" name="password" id="password">
        </br>
        <br>
            <h5>Konfirasi Password</h5>
            <input type="password" name="password2" id="password2">
        </br>
        <br>
            <a href = "login.php">
            <button type="submit" class="btn btn-warning" name="register">Register</button>
            </a>
        </br>
        </div>
        </div>
    </div>
            </form>
</body>
</html>