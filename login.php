<?php

//memulai session
session_start();

require 'koneksi.php';

//cek cookie
if (isset($_COOKIE['id']) && isset($_COOKIE['key'])){
    $id = $_COOKIE['id'];
    $key = $_COOKIE['key'];

//ambil username berdasarkan id
$result = mysqli_query($koneksi, "SELECT username FROM user WHERE id = $id");
$row = mysqli_fetch_assoc($result);

//cek cookie dan usernaame
if ($key === hash('sha256', $row['username'])){
    $_SESSION['login'] = true;
}
}

if (isset($_SESSION["login"])) {
    header("Location: index.php");
    exit;
}

if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $result = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username'");

    //cek username
    if (mysqli_num_rows($result) === 1) {

        //cek password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {

            //set session
            $_SESSION["login"] = true;

            //set cookie
            if (isset($_POST["remember"])){
                //buat cookie
                setcookie('login', $row['id'], time() + 60);
                setcookie('key', hash('sha256', $row['username']));
            }

            header("Location: index.php");
            exit;
        }
    }
    $error = true;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="card shadow mt-5" style="position: relative ;width:80%; margin-left:15%">
        <div class="card-body">
        <h1>FORM LOGIN</h1>
        <br>
        <h3>Silahkan Isi Data Login Berikut</h3>
        </br>
        <?php if (isset($error)) : ?>
            <p style="color: red; font-style: italic;">Username atau Password SALAH</p>
        <?php endif; ?>
        <form action="" method="post">
            <br>
            <label for="username">Username :</label>
            <input type="text" name="username" id="username">
            </br>
            <br>
            <label for="password">Password :</label>
            <input type="password" name="password" id="password">
            </br>
            <br>
            <input type="checkbox" name="remember" id="remember">
            <label for="remember">Remember Me</label>
            </br>
            <br>
            <button type="submit" class="btn btn-warning" name="login">Login</button>
        </div>
        </div>
    </div>
    </form>
</body>

</html>