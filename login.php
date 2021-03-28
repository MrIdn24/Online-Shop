<?php
require "koneksi.php";
session_start();

if (isset($_POST['login'])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
    // cek username
    if (mysqli_num_rows($result) === 1) {
        // cek password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {

            $_SESSION["login"] = true;
            if (isset($_POST["login"])) {
                $usr = mysqli_fetch_assoc($result);
                $_SESSION["username"] = $username;
                header("Location: index.php");
                exit;
            }
        }
    }
    $error = true;
}

if (isset($_SESSION["login"])) {
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!-- Font awesom -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <!-- Style -->
    <link rel="stylesheet" href="style/style.css">

    <title>Login</title>
</head>

<body>
    <section id="login" class="pt-5" style="height: 657px;">
        <div class="container" style="max-width: 35%; margin-top: 6%;">
            <h3 class="text-white text-center pt-4 pb-1">Login idn - ST<i class="fas fa-circle"></i>RE</h3>
            <?php if (isset($error)) : ?>
                <div class="text-center text-white pt-2 pb-0">
                    <p>Kesalahan saat login, silahkan periksa kembali !</p>
                </div>
            <?php endif ?>
            <form method="post" class="form pt-2 m-auto" style="width: 80%;">
                <div class="input-group mb-4">
                    <input type="text" class="form-control" placeholder="Username" aria-label="Username" name="username" aria-describedby="basic-addon1">
                </div>
                <div class="input-group">
                    <input type="password" name="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
                </div>
                <button type="sumbit" class="btn pb-2" name="login">Login</button>
                <p class="text-white pt-3 pb-4 text-center">Fotgot your login details? <a href="#">Get help signing in.</a></p>
            </form>
            <div class="sign" style="width: 476px; margin-left: -11px; background-color: rgba(255, 255, 255, 0.1); border-top: 1px solid rgba(255, 255, 255, 0.2);">
                <p class="text-white text-center mt-3 pb-3">Dont have any account?
                    <a href="register.php">Sign up.</a>
                </p>
            </div>
        </div>
    </section>
</body>

</html>