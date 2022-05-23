<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<?php 
include '../config.php';

$kode = $_GET['kodebrg'];
$query = "SELECT * FROM barang WHERE kode_barang = '$kode'";
$result = mysqli_query($GLOBALS['DB'],$query); 

while ($data = mysqli_fetch_assoc($result)){
    $kb  = $data['kode_barang'];
    $nb  = $data['nama'];
    $stok  = $data['stok'];
    $harga  = $data['harga'];
    $kategori  = $data['id_kategori'];
?>

    <div class="container">
        <form class="mt-5" action="saveedit-barang.php" method="POST">
            <div class="form-group">
                <label for="kode_barang">Kode Barang</label>
                <input type="text" class="form-control" id="kode_barang" name="kode_barang"value = "<?= $kb;?>" >
            </div>
            <div class="form-group">
                <label for="nama_barang">Nama Barang</label>
                <input type="text" class="form-control" id="nama_barang" name="nama_barang"value = "<?= $nb;?>" >
            </div>
            <div class="form-group">
                <label for="stock">Stock</label>
                <input type="text" class="form-control" id="stock" name="stock"value = "<?= $stok;?>" >
            </div>
            <div class="form-group">
                <label for="harga">Harga</label>
                <input type="text" class="form-control" id="harga" name="harga"value = "<?= $harga;?>" >
            </div>
            <div class="form-group">
                <label for="kategori">Kategori</label>
                <select class="form-control" id="kategori" name="kategori" placeholder="Kategori">
                <?php 
                $querys = "SELECT * FROM kategori";
                $results = mysqli_query($GLOBALS['DB'],$querys); 
                while ($datas = mysqli_fetch_assoc($results)){
                ?>
                    <option value="<?= $datas['id_kategori'] ?>"><?= $datas['nama'] ?></option> 
                <?php } ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">EDIT</button>
        </form>   
        <?php } ?>
    </div> 



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>