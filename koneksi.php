<?php
$host       = "localhost";
$user       = "root";
$password   = "";
$database   = "uprak";
$conn   = mysqli_connect($host, $user, $password, $database) or die("Gagal Menghubungkan");
?>

<?php

// functon regis
function registrasi($data)
{
    global $conn;

    $username = stripslashes($data["username"]);
    $email =  $data["email"];
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $cpassword = mysqli_real_escape_string($conn, $data["cpassword"]);

    if ($password !== $cpassword) {
        echo "<script>alert('Password tidak sesuai')</script>";

        return false;
    }

    // enkripsi password

    $password = password_hash($password, PASSWORD_DEFAULT);

    // cek nama sudah ada atau belum 
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username='$username'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>alert('Nama sudah terdaftar!')</script>";

        return false;
    }

    // jika input kosong
    if (empty($data['username'] or $data['email'] or $data['password'])) {
        echo "<script>alert('Silanhkan isi data terlebih dahulu!')</script>";
        return false;
    }

    // memeasukan ke database
    $querry = mysqli_query($conn, "INSERT INTO user VALUES ('','$username','$email','$password')");

    if ($querry) {
        header('Location: login.php');
    }

    return mysqli_affected_rows($conn);
}
?>