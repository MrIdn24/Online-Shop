<?php
require "koneksi.php";
if (isset($_POST["regis"])) {
    if (registrasi($_POST) > 0) {
    }
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

    <title>Register</title>
</head>

<body>
    <section id="login" class="pt-5" style="height: 657px;">
        <div class="container" style="max-width: 35%; margin-top: 4%;">
            <h3 class="text-white text-center pt-5">Register idn - ST<i class="fas fa-circle"></i>RE</h3>
            <form method="post" class="form pt-3 m-auto" style="width: 80%;">
                <div class="input-group mb-4">
                    <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-required="isi form" name="username" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-4">
                    <input type="email" class="form-control" placeholder="Email" aria-label="Email" name="email" aria-describedby="basic-addon1" required>
                </div>
                <div class="input-group mb-4">
                    <input type="password" name="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1" required>
                </div>
                <div class="input-group">
                    <input type="password" name="cpassword" class="form-control" placeholder="Confirm Password" aria-label="Password" aria-describedby="basic-addon1" required>
                </div>
                <button type="sumbit" class="btn pb-2 mb-4" name="regis">Register Now</button>
        </div>
        </div>
    </section>
</body>

</html>