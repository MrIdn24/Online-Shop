<?php
require "koneksi.php";
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

    <title>List Produk</title>
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
            <h5> <i class="fas fa-list-ul"></i> List Produk</h5>
            <a href="input.php"><i class="fa fa-folder-plus fs-4 float-end" style="margin-top: -30px; margin-right: 20px; text-decoration: none;
            color: white;"></i></a>
        </div>
    </section>
    <!-- Akhir head -->

    <!-- Awal List -->

    <table class="table pb-3 bg-light container mt-4">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama produk</th>
                <th>Kategori</th>
                <th>Harga</th>
                <th>Stock</th>
                <th>Gambar</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $id = mysqli_query($conn, "SELECT * FROM produk ORDER BY produk.id");
            while ($prdk = mysqli_fetch_array($id)) {
            ?>
                <tr>
                    <td></td>
                    <td><?= $prdk["nama_produk"] ?></td>
                    <td><?= $prdk["kategori"] ?></td>
                    <td><?= number_format($prdk["harga"]) ?></td>
                    <td><?= $prdk["stok"] ?></td>
                    <td>
                        <img src="<?= $prdk["gambar"] ?>" width="100px" alt="">
                    </td>
                    <td>
                        <a href="edit.php?id=<?= $prdk["id"] ?>"><i class="fa fa-edit fs-4"></i></a>
                        <a href="hapus.php?id=<?= $prdk["id"] ?>"><i class="fa fa-times-circle fs-4 text-danger ms-3"></i></a>
                    </td>
                </tr>

            <?php
            }
            ?>
        </tbody>
    </table>

    <!-- Akhir List -->
</body>

</html>