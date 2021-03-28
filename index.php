<?php
require "koneksi.php";
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: index.php");
}

if (isset($_POST["cari"])) {
    $keyword = $_POST["keyword"];
    if (empty($keyword)) {
        header("Location: index.php");
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

    <title>Index</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <div class="sm pt-1">
            <ul class="navbar-nav">
                <li class="nav-item text-white">
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
            <a class="navbar-brand ps-5 fs-3 pt-3 text-white" href="#">idn - ST<i class="fa fa-circle"></i>RE</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <form method="post" action="cari.php" class="d-flex ms-5 pt-3">
                    <input class="form-control" name="keyword" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn fa fa-search text-white" name="cari" type="submit"></button>
                </form>
                <div class="dropdown">
                    <button style="text-transform: capitalize;" class="btn text-white dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        <?= $_SESSION["username"] ?> &emsp14;&emsp14;<i class="fa fa-user-circle fs-3" style="position: relative; top: 3px;"></i>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li>
                            <a class="dropdown-item active" href="index.php">
                                <i class="fa fa-home pe-2"></i>Home
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="list.php">
                                <i class="fa fa-list pe-2"></i>Data Barang
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="logout.php">
                                <i class="fa fa-sign-out-alt ps-2" style="transform: rotate(-180deg);"></i>Logout
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <section id="content">
        <div class="container-fluid pt-4">

            <!--  -->
            <div class="container text-white">
                <div class="row justify-content-center pt-3 mt-4 text-center">
                    <div class="col-md-2">
                        <img src="https://cf.shopee.co.id/file/4e08bce7d8d6ab488b82ab59d03cb793_xhdpi" alt="">
                        <p>Murah Lebay</p>
                    </div>
                    <div class="col-md-2">
                        <img src="https://cf.shopee.co.id/file/4497ac7ff3ee9711a8d512d0f8297b49_xhdpi" alt="">
                        <p>Cashback &
                            Voucher</p>
                    </div>
                    <div class="col-md-2">
                        <img src="https://cf.shopee.co.id/file/5164f9b1e9319def7e609101eb3c9349_xhdpi" alt="">
                        <p>Pulsa, Tagiha & Hiburan</p>
                    </div>
                    <div class="col-md-2">
                        <img src="https://cf.shopee.co.id/file/99e8720ce2642d47d506f756ee56431a_xhdpi" alt="">
                        <p>idn Mart</p>
                    </div>
                    <div class="col-md-2">
                        <img src="https://cf.shopee.co.id/file/dcfbadeff8e9082d65847a88d8b84f66_xhdpi" alt="">
                        <p>Elektronik 50:50</p>
                    </div>
                    <div class="col-md-2">
                        <img src="https://cf.shopee.co.id/file/12c9571aaf93404afaaf9b46ef2bb345_xhdpi" alt="">
                        <p>Bayar Di Tempat</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Kategori -->
        <div class="container d mt-5 bg-light p-3 pb-4 mb-5">
            <h3 class="ps-3">Kategori</h3>
            <div class="ktg text-center">
                <div class="row justify-content-evenly ktg mb-3 pt-2">
                    <div class="col-md-2">
                        <a href="kategori.php?kategori=elektronik" style="text-decoration: none; color: black;">
                            <img src="https://cf.shopee.co.id/file/02577b74fe168f6dabd57eab9c2f8f21_tn" alt="">
                            <p>Electronic </p>
                        </a>
                    </div>
                    <div class="col-md-2">
                        <a href="kategori.php?kategori=clothes" style="text-decoration: none; color: black;">
                            <img src="https://cf.shopee.co.id/file/04dba508f1ad19629518defb94999ef9_tn" alt="">
                            <p>Clothes</p>
                        </a>
                    </div>
                    <div class="col-md-2">
                        <a href="kategori.php?kategori=bag" style="text-decoration: none; color: black;">
                            <img src="https://cf.shopee.co.id/file/097e393286fa57874668473037a96d3e_tn" alt="">
                            <p>Bag</p>
                        </a>
                    </div>
                    <div class="col-md-2">
                        <a href="kategori.php?kategori=healthy" style="text-decoration: none; color: black;">
                            <img src="https://cf.shopee.co.id/file/8d04351b0e6ceaf6c092e5e520b58a53_tn" alt="">
                            <p>Healthy
                            </p>
                        </a>
                    </div>
                </div>
                <div class="row justify-content-evenly">
                    <div class="col-md-2">
                        <a href="kategori.php?kategori=accesories" style="text-decoration: none; color: black;">
                            <img src="https://cf.shopee.co.id/file/0de7888eff2fc67b6200d48f4319e098_tn" alt="">
                            <p>Accesories</p>
                        </a>
                    </div>
                    <div class="col-md-2">
                        <a href="kategori.php?kategori=otomotif" style="text-decoration: none; color: black;">
                            <img src="https://cf.shopee.co.id/file/27838b968afb76ca59dd8e8f57ece91f_tn" alt="">
                            <p>Otomotif</p>
                        </a>
                    </div>
                    <div class="col-md-2">
                        <a href="kategori.php?kategori=shoes" style="text-decoration: none; color: black;">
                            <img src="https://cf.shopee.co.id/file/4fc9ff3a53ad27200ff0606813093f29_tn" alt="">
                            <p>Shoes</p>
                        </a>
                    </div>
                    <div class="col-md-2">
                        <a href="kategori.php?kategori=food" style="text-decoration: none; color: black;">
                            <img src="https://cf.shopee.co.id/file/7856ef08e821832ec53fdc29c8f3e76f_tn" alt="">
                            <p>Food</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Produk -->

        <div id="produk">
            <div class="container bg-light mb-5 pt-3 p-2 ps-5">
                <h3 style="color: #b7193f">Rekomendasi</h3>
            </div>
            <?php
            $id = mysqli_query($conn, "SELECT * FROM produk ORDER BY produk.id LIMIT 0,10");
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
            <form action="cari.php">
                <button class="btn ln btn-primary" type="submit" name="cari">
                    Lihat Lainnya
                </button>
            </form>
        </div>
    </section>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>

</html>