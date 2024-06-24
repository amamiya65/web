<?php
$host = "localhost";
$database = "pustaka-15220430";
$username = "root";
$NoTelephone = "";

$conn = mysqli_connect($host, $username, $NoTelephone, $database);

if (!$conn) {
    die("Koneksi Gagal : " . mysqli_connect_error());
} else {
    echo "Koneksi Berhasil";
}
?>
