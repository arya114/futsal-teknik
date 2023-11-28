<?php

include '../function/koneksi.php';

$id_lapangan = $_POST['id_lapangan'];
$nama_lapangan = $_POST['nama_lapangan'];
$jenis_lapangan = $_POST['jenis_lapangan'];
$harga = $_POST['harga'];

// File upload handling
$nama_file = $_FILES['gambar_lapangan']['name'];
$ukuran_file = $_FILES['gambar_lapangan']['size'];
$tmp_file = $_FILES['gambar_lapangan']['tmp_name'];

// Sesuaikan kolom pada pernyataan INSERT
mysqli_query($koneksi, "INSERT INTO lapangan (id_lapangan, nama_lapangan, jenis_lapangan, harga, gambar_lapangan) VALUES ('$id_lapangan', '$nama_lapangan', '$jenis_lapangan', '$harga', '$nama_file')");

// Pindahkan file yang di-upload ke direktori tujuan
$tujuan = 'img/' . $nama_file;
move_uploaded_file($tmp_file, $tujuan);

header("location:lapangan.php");
?>
