<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.0/css/jquery.dataTables.min.css">
    <title>Document</title>
</head>
<body>
    <!-- Maaf codingnya berantakan ya hehe lagi males rapih heheheh -->
    <div class="container" style="margin-top : 100px">
        <table id="myTable" >
            <thead>
                <tr>
                    <td>ID ORDER</td>
                    <td>ID BARANG</td>
                    <td>QUANTITY</td>      
                </tr>
            </thead>
            <tbody>
                <?php 
                include '../config.php';
                if(!isset($_GET['idorder'])){  
                    header("location:tampil-order.php");
                }

                $io = $_GET['idorder'];    
                $query = "SELECT * FROM detail_order WHERE id_order='$io'";
                $result = mysqli_query($GLOBALS['DB'],$query);
                
                while ($data = mysqli_fetch_assoc($result)){
                ?>
                <tr>
                    <td><?= $data['id_order'] ?></td>
                    <td><?= $data['id_barang'] ?></td>
                    <td><?= $data['quantity'] ?></td>   
                </tr>
                <?php } ?>
            </tbody>
        </table>   
    </div> 


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready( function () {
        $('#myTable').DataTable();
    } );
    </script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <?php if (isset($_GET['pesan']) && $_GET['pesan'] == 'sukses'): ?>
            <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Selamat!',
                    text: 'Data Berhasil Ditambah',
                })
            </script>
        <?php
        elseif (isset($_GET['pesan']) && $_GET['pesan'] == 'sukses-delete'): ?>
            <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil',
                    text: 'Data Berhasil Dihapus ',
                })
            </script>
        <?php endif; ?>
</body>
</html>