<?php

include '../config.php';

$kd = $_GET['kodektg'];

$query = "DELETE FROM kategori WHERE id_kategori='$kd'";
$result = mysqli_query($GLOBALS['DB'], $query);

if ($result) {
    # code...
    header("location:list-kategori.php?pesan=sukses-delete");
}
else {
    echo "gagal hapus data";
}