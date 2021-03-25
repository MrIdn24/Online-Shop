<?php
require "koneksi.php";

if (isset($_POST["simpan"])) {
    $nama_produk = $_POST["nama_produk"];
    $kategori = $_POST["kategori"];
    $harga = $_POST["harga"];
    $stock = $_POST["stock"];
    $gambar = $_POST["gambar"];
    $detail = $_POST["detail"];

    $querry = mysqli_query($conn, "INSERT INTO produk VALUES ('','$nama_produk','$kategori','$harga','$stock','$gambar','$detail')");
    if ($querry) {
        header('Location: list.php');
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

    <title>Input</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <div class="container-fluid ps-5  pb-3" id="nav">
            <a class="navbar-brand ps-5 fs-3 pt-3" href="index.php">idn - ST<i class="fa fa-circle"></i>RE</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <!-- Head -->
    <section id="head">
        <div class="container mt-5 p-2 ps-4">
            <h5> <i class="fa fa-database"></i> Input Data Barang</h5>
        </div>
    </section>
    <!-- Akhir head -->

    <!-- Content -->

    <div class="container mt-3 p-2 ps-4 bg-light">
        <form method="post">
            <div class="row justify-content-center text-dark">
                <div class="col-md-5 p-4">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nama produk</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama produk" name="nama_produk">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Kategori</label>
                        <input type="text" class="form-control" name="kategori" id="exampleFormControlInput1" placeholder="Kategori">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Harga</label>
                        <input type="text" class="form-control" name="harga" id="exampleFormControlInput1" placeholder="Harga">
                    </div>
                </div>
                <div class="col-md-5 p-4">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Stock</label>
                        <input type="text" class="form-control" name="stock" id="exampleFormControlInput1" placeholder="Stock">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Gambar</label>
                        <input type="text" class="form-control" name="gambar" id="exampleFormControlInput1" placeholder="Gambar">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Detail</label>
                        <input type="text" class="form-control" name="detail" id="exampleFormControlInput1" placeholder="Detail">
                    </div>
                </div>
            </div>
            <div class="tombol ms-3 ps-5">
                <button class="ms-5 mb-4 btn btn-outline-danger">
                    <a href="list.php">
                        Kembali
                    </a>
                </button>
                <input type="submit" class="ms-3 mb-4 btn btn-outline-primary" name="simpan" value="Simpan">
            </div>
        </form>

        <!-- Akhi Content -->
</body>

</html>