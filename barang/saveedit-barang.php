<?php

include '../config.php';

$kb = $_POST['kode_barang'];
$nb = $_POST['nama_barang'];
$stok = $_POST['stock'];
$harga = $_POST['harga'];
$kategori = $_POST['id_kategori'];

$query = "UPDATE barang SET kode_barang ='$kb', nama='$nb', stok='$stok', harga='$harga', id_kategori='$kategori' WHERE kode_barang = '$kb'";

$result = mysqli_query($GLOBALS['DB'], $query);

if ($result) {
    # code...
    header("location:tampil-barang.php?pesan=sukses");
}
else {
    header("location:tampil-barang.php?pesan=gagal");
}