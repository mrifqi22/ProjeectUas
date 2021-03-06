<?php

include 'config/databuku.php';
$id_buku = $_POST["id_buku"];
$judul = $_POST["judul"];
$penulis = $_POST["penulis"];
$penerbit = $_POST["penerbit"];
$tahun = $_POST["tahun"];
$stok = $_POST["stok"];
$harga_pokok = $_POST["harga_pokok"];
$harga_jual = $_POST["harga_jual"];
$diskon = $_POST["diskon"];
$cover = $_POST["cover"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP</title>
    <link rel="stylesheet" href="modul/bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script language="Javascript" src="modul/bootstrap-4.3.1-dist/js/bootstrap.min.js"> </script>
    <script src="modul/JQuery/jquery.min.js"></script>

    <!-- CSS dan JS DataTable -->
    <script src="modul/DataTable/datatables.min.js"></script>
    <script src="modul/DataTable/DataTables-1.10.23/js/dataTables.bootstrap4.min.js"></script>

</head>

<body>
    <!-- buat class container -->

    <div class="container h-100">
        <div class="row h-100 justify-content-center align-items-center">


            <!-- membuat form -->
            <form action="config/edit.php" method="POST" class="col-lg-6">
                <h5>Tambah Buku</h5>
                <!-- buat row form (baris ke 1 pada form) -->
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="contoh1">Judul</label>
                        <input type="text" class="form-control" name="judul" value="<?php echo $judul; ?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="contoh2">Penulis</label>
                        <input type="text" class="form-control" name="penulis" value="<?php echo $penulis; ?>">
                    </div>
                </div>
                <!-- end baris 1 pada form -->

                <!-- baris ke 2 pada form -->
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="contoh1">Penerbit</label>
                        <input type="text" class="form-control" name="penerbit" value="<?php echo $penerbit; ?>">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="contoh2">Tahun</label>
                        <input type="text" class="form-control" name="tahun" value="<?php echo $tahun; ?>">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="contoh2">Stok</label>
                        <input type="text" class="form-control" name="stok" value="<?php echo $stok; ?>">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="contoh2">Harga Pokok</label>
                        <input type="text" class="form-control" name="harga_pokok" value="<?php echo $harga_pokok; ?>">
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label for="contoh2">Harga Jual</label>
                    <input type="text" class="form-control" name="harga_jual" value="<?php echo $harga_jual; ?>">
                </div>
                <div class="form-group col-md-4">
                    <label for="contoh2">Diskon</label>
                    <input type="text" class="form-control" name="diskon" value="<?php echo $diskon; ?>">
                </div>
                <div class="form-group col-md-4">
                    <label for="contoh2">Cover</label>
                    <input type="text" class="form-control" name="cover" value="<?php echo $cover; ?>">
                </div>
                <!-- end baris 2 pada form -->
                <input type="hidden" name="id_buku" value="<?php echo $id_buku; ?>" />
                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>

            <!-- end form -->
        </div>
    </div>
    <!-- end container -->
</body>