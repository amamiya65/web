<?php
require 'neksi.php';


$nama = $_POST["nama"];
$nis = $_POST["nis"];
$kelas = $_POST["kelas"];
$tanggal_lahir = $_POST["tanggal_lahir"];
$tempat_lahir = $_POST["tempat_lahir"];
$alamat = $_POST["alamat"];
$gender = $_POST["gender"];
$agama = $_POST["agama"];
 // Add a semicolon at the end of this line

$query_sql  = "INSERT INTO data_mahasiswa (nama,nis,kelas,tanggal_lahir,tempat_lahir,alamat,gender,agama)
               VALUES ('$nama','$nis','$kelas','$tanggal_lahir','$tempat_Lahir','$alamat','$gender','$agama')"; // Fix typo: $Emaill to $Email

if (mysqli_query($conn, $query_sql)) {
    header("Location: input.php");
} else {
    echo "pendaftaran gagal : " . mysqli_error($conn);
 }

?>



