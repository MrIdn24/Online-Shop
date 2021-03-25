<?php
require "koneksi.php";

session_start();

if (isset($_GET["id"])) {
    $id = $_GET["id"];

    $querry = mysqli_query($conn, "SELECT * FROM produk WHERE id='$id'");
    $pecah = mysqli_fetch_assoc($querry);

    if (mysqli_num_rows($querry) < 1) {
        die("data tidak ditemukan...");
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
                <form method="post" action="cari.php" class="d-flex ms-5 pt-3">
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
    <section id="detail">
        <div class="container bg-light p-3 mt-5 mb-5">
            <div class="row">
                <div class="col-md-4 me-2">
                    <img src="<?= $pecah["gambar"] ?>" width="400px" alt="">
                    <div class="shre mt-5 ps-3" style="color: #b7193f;">
                        <span class="text-dark">Share :</span>
                        <i class="fab fa-facebook ps-2 fs-4"></i>
                        <i class="fab fa-twitter ps-2 fs-4"></i>
                        <i class="fab fa-instagram ps-2 fs-4"></i>
                        <i class="fab fa-line ps-2 fs-4"></i>
                    </div>
                    <div class="detil pt-5 ps-4 text-jusify text-dark" style="width: 430px;">
                        <h4 class="p-2 mt-4 text-white" style="width: 1055px; background-color: #b7193f;">Spesifikasi Produk</h4>
                        <p class="mt-4">Kategori &emsp13;:
                            <span class="ps-5"><?= $pecah["kategori"] ?></span>
                        </p>
                        <p>Stok &emsp13;&emsp13;&emsp13;&emsp13;&emsp13;&emsp13;:
                            <span class="ms-4 ps-4"><?= $pecah["stok"] ?></span>
                        </p>

                        <p>Deksripsi :</p>
                        <p>
                            <?= $pecah["detail"] ?>
                        </p>
                    </div>
                </div>
                <div class="col-md-6 ms-5 text-dark">
                    <h3><?= $pecah["nama_produk"] ?></h3>
                    <div class="container-fluid p-1 ps-4 mt-3 mb-3 text-white">
                        <h3>Rp <?= number_format($pecah["harga"]) ?></h3>
                    </div>
                    <div class="qty mt-5">
                        <p>Kuantitas :</p>
                        <button class="btn border-dark bdr-nn">+</button>
                        <span class="btn border-dark bdr-nn" style="width: 50px; margin-left: -5px;">1</span>
                        <button class="btn border-dark bdr-nn" style="width: 38px; margin-left: -6px;">-</button>
                        <span class="ms-4 text-secondary" style="position: relative; top: 10px;">tersisa <?= $pecah["stok"] ?> buah</span>
                    </div>
                    <div class="beli mt-5 ms-4 pb-5">
                        <a href="beli.php">
                            <button class="btn btn-outline-primary"> <i class="fas fa-cart-plus"></i> Masukan Keranjan</button>
                        </a>
                        <a href="beli.php" style="position: relative; left: 50px; top: 25px;">
                            <button class="btn btn-primary mb-5">Beli Sekarang</button>
                        </a>
                    </div>
                    <hr class="mt-5" style="width: 650px;">
                    <p class="ps-3">Garansi idn - STORE </p>
                </div>
            </div>
        </div>
    </section>
</body>

</html>