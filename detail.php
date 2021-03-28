<?php
require "koneksi.php";

session_start();

// Menampilkan Detail Barang Berdasarkan ID
if (isset($_GET["id"])) {
    $id = $_GET["id"];

    $querry = mysqli_query($conn, "SELECT * FROM produk WHERE id='$id'");
    $pecah = mysqli_fetch_assoc($querry);

    if (mysqli_num_rows($querry) < 1) {
        die("data tidak ditemukan...");
    }
}

// Mengitim Komentar 
if (isset($_POST["kirim"])) {

    $usr = $_SESSION["username"];
    $idbr = $_GET["id"];
    $koment = $_POST["komentar"];
    if (empty($idbr) or empty($koment)) {
        echo "<script>alert('tidak bisa menambah komen!')</script>";
    } else {
        $qry = mysqli_query($conn, "INSERT INTO coments VALUES ('','$usr','','$koment','$idbr')");
    }
}

// Menampilkan Komentar Berdasarkan ID
if (isset($_GET["id"])) {
    $idb = $_GET["id"];
    $kmt = mysqli_query($conn, "SELECT * FROM coments WHERE id_barang = '$idb'");
}

// Jumlah Komentar
$jkt = mysqli_query($conn, "SELECT * FROM coments WHERE id_barang = '$idb'");
$jumlah = mysqli_num_rows($jkt);

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
                <div class="fs-2 text-dark pt-5 ps-5" id="coments">
                    <p>Coments</p>
                    <i class="fas fa-user-circle pe-1 fs-3 text-dark"></i>
                    <p class="fs-5 d-inline"><?= $_SESSION["username"] ?></p>
                    <form method="post">
                        <label for="komentar" class="fs-5">
                            Komentar : <br>
                            <input type="text" placeholder="Komentar anda..." id="komentar" name="komentar">
                        </label>
                        <input type="submit" name="kirim" class="btn btn-primary d-block mt-3" value="Coments">
                    </form>
                    <em class="fs-5 pt-2" style="opacity: .5;">Jumlah Komentar <?= $jumlah ?></em>
                    <hr class=" mt-5 container">
                </div>
                <div class="text-dark pt-5 mt-5 pb-3 mb-3 w-100 ps-5">
                    <?php
                    while ($komentar = mysqli_fetch_assoc($kmt)) {
                    ?>
                        <i class="fas fa-user-circle pe-1 fs-3 text-dark"></i>
                        <p class="d-inline"><?= $komentar["nama"] ?></p>
                        <p class="pt-2 w-50 pb-2" id="isiskm"><?= $komentar["komentar"] ?></p>
                        <table style="line-height: 20px; margin-top: -10px; float: right; clear: both; margin-right: 550px;">
                            <tr>
                                <td class="text-danger">Hapus</td>
                                <td>|</td>
                                <td class="text-primary">Edit</td>
                            </tr>
                        </table>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</body>

</html>