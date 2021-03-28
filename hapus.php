<?php
require "koneksi.php";

if (isset($_GET["id"])) {
    $id = $_GET["id"];

    $querry = mysqli_query($conn, "DELETE FROM produk WHERE id='$id'");

    if ($querry) {
        header("Location: list.php");
    }
}
