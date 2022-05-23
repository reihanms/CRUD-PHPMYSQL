<?php

include '../config.php';

$ik = $_POST['id_kategori'];
$nk = $_POST['nama_kategori'];

$query = "INSERT INTO kategori VALUES ('$ik','$nk')";

$result = mysqli_query($GLOBALS['DB'], $query);

if ($result) {
    # code...
    header("location:list-kategori.php?pesan=sukses");
}
else {
    header("location:list-kategori.php?pesan=gagal");
}