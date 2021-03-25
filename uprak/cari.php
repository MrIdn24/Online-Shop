<?php
require "koneksi.php";

session_start();
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

    <title>Index</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <div class="sm pt-1">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Jual</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">|</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Download</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">|</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Ikuti kami di
                        <i class="fab fa-facebook ms-2 me-1 fs-5"></i>
                        <i class="fab fa-instagram me-1 fs-5"></i>
                        <i class="fab fa-line fs-5"></i>
                    </a>
                </li>
            </ul>
        </div>
        <div class="container-fluid ps-5 pt-5 pb-3" id="nav">
            <a class="navbar-brand ps-5 fs-3 pt-3" href="index.php">idn - ST<i class="fa fa-circle"></i>RE</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <form method="post" class="d-flex ms-5 pt-3">
                    <input class="form-control" name="keyword" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn fa fa-search" name="cari" type="submit"></button>
                </form>
                <div class="dropdown">
                    <button class="btn text-white dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        <?= $_SESSION["username"] ?> &emsp14;&emsp14;<i class="fa fa-user fs-4"></i>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item active" href="index.php">Home</a></li>
                        <li><a class="dropdown-item" href="list.php">Data Barang</a></li>
                        <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- Produk -->
    <div id="produk" class="mt-5">
        <?php

        if (isset($_POST["cari"])) {
            $keyword = $_POST["keyword"];
            $id = mysqli_query($conn, "SELECT * FROM produk WHERE nama_produk LIKE '%$keyword%' ORDER BY id ASC");
        } else {
            $id = mysqli_query($conn, "SELECT * FROM produk");
            $_GET["cari"] === "all";
        }
        while ($prdk = mysqli_fetch_array($id)) {
        ?>
            <div class="container list">
                <a href="detail.php?id=<?= $prdk["id"] ?>">
                    <div class="card float-start me-3 mb-5" style="width: 18rem;">
                        <img src="<?= $prdk["gambar"] ?>" alt="...">
                        <div class="card-body">
                            <p class="card-text text-dark"><?= $prdk["nama_produk"] ?></p>
                            <span>Rp <?= number_format($prdk["harga"]) ?></span>
                        </div>
                    </div>
                </a>
            </div>

        <?php
        }
        ?>
    </div>
    </section>
</body>

</html>