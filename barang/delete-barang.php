<?php

include '../config.php';

$kd = $_GET['kodebrg'];

$query = "DELETE FROM barang WHERE kode_barang='$kd'";
$result = mysqli_query($GLOBALS['DB'], $query);

if ($result) {
    # code...
    header("location:tampil-barang.php?pesan=sukses-delete");
}
else {
    echo "gagal menambah data";
}