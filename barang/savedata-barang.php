<?php

include '../config.php';

$kb = $_POST['kode_barang'];
$nb = $_POST['nama_barang'];
$stok = $_POST['stock'];
$harga = $_POST['harga'];
$kategori = $_POST['kategori'];

$query = "INSERT INTO barang (kode_barang,nama,stok,harga,id_kategori) VALUES ('$kb','$nb','$stok','$harga','$kategori')";

$result = mysqli_query($GLOBALS['DB'], $query);

if ($result) {
    # code...
    header("location:tampil-barang.php?pesan=sukses");
}
else {
    header("location:tampil-barang.php?pesan=gagal");
}