<?php
    include_once("../config.php");
    $barang = mysqli_query($connect, "SELECT * FROM barang");
    $jml_data = mysqli_query($connect, "SELECT COUNT(id_order) FROM orders");
    $jml_data = mysqli_fetch_array($jml_data);
    $total = 0;
    $id;
    if(isset($_POST['kode_barang'])){
        $tanggal = date("Y-m-d");
        $inputorder = mysqli_query($connect, "INSERT INTO orders VALUES('$jml_data[0]','$tanggal','Selesai','0')");

        $id = mysqli_query($connect, "SELECT id_order FROM orders ORDER BY id_order DESC");
        $id = mysqli_fetch_array($id);
        
        $kode_barang = $_POST['kode_barang'];
        $quantity = $_POST['quantity'];

        foreach( $kode_barang as $key => $n ) {

            $harga = mysqli_query($connect, "SELECT harga FROM barang WHERE kode_barang = '$n'");
            $harga = mysqli_fetch_array($harga);
            
            $total += $harga[0]*$quantity[$key];

            $inputdetail = mysqli_query($connect, "INSERT INTO detail_order(quantity,id_order,id_barang) VALUES('$quantity[$key]','$id[0]','$n')");
        }

        $updatetotal = mysqli_query($connect, "UPDATE orders SET total='$total' WHERE id_order='$id[0]'");
        header("Location:tampil-order.php?pesan=sukses");
    }
?>