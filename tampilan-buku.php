<?php
include 'config/databuku.php';
?>
<!DOCTYPE HTML>
<html>

<head>
    <title>Welcome To My Web</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <script src="js/jquery.min.js"></script>
    <script src="js/skel.min.js"></script>
    <script src="js/skel-layers.min.js"></script>
    <script src="js/init.js"></script>
    <noscript>
        <link rel="stylesheet" href="css/skel.css" />
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/style-xlarge.css" />
    </noscript>
</head>

<body id="top">

    <header id="header" class="skel-layers-fixed">
        <h1><a href="#">Buku</a></h1>
        <nav id="nav">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="no-sidebar.php">About</a></li>
                <li><a href="tampilan-buku.php">Tampilan Buku</a></li>
                <li><a href="logout.php" class="button special">logOut</a></li>
            </ul>
        </nav>
    </header>


    <div class="container">
        <a href="tambah_buku.php" class="button special">tambah buku</a>
        <table id="dataregister" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Tahun</th>
                    <th>Stok</th>
                    <th>Harga Pokok</th>
                    <th>Harga Jual</th>
                    <th>Diskon</th>
                    <th>Cover</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $q->fetch()) :
                    $id = $row['id'];
                    $judul = $row['judul'];
                    $penulis = $row['penulis'];
                    $penerbit = $row['penerbit'];
                    $tahun = $row['tahun'];
                    $stok = $row['stok'];
                    $harga_pokok = $row['harga_pokok'];
                    $harga_jual = $row['harga_jual'];
                    $diskon = $row['diskon'];
                    $cover = $row['cover'];
                ?>
                    <tr>
                        <td><?php echo $judul; ?></td>
                        <td><?php echo $penulis; ?></td>
                        <td><?php echo $penerbit; ?></td>
                        <td><?php echo $tahun; ?></td>
                        <td><?php echo $stok; ?></td>
                        <td><?php echo $harga_pokok; ?></td>
                        <td><?php echo $harga_jual; ?></td>
                        <td><?php echo $diskon; ?></td>
                        <td><?php echo $cover; ?></td>
                        <td>
                            <!-- form hapus -->
                            <form action="tampilan_edit.php" method="POST">
                                <input type="hidden" name="id_buku" value="<?php echo $id; ?>" />
                                <input type="hidden" name="judul" value="<?php echo $judul; ?>" />
                                <input type="hidden" name="penulis" value="<?php echo $penulis; ?>" />
                                <input type="hidden" name="penerbit" value="<?php echo $penerbit; ?>" />
                                <input type="hidden" name="tahun" value="<?php echo $tahun; ?>" />
                                <input type="hidden" name="stok" value="<?php echo $stok; ?>" />
                                <input type="hidden" name="harga_pokok" value="<?php echo $harga_pokok; ?>" />
                                <input type="hidden" name="harga_jual" value="<?php echo $harga_jual; ?>" />
                                <input type="hidden" name="diskon" value="<?php echo $diskon; ?>" />
                                <input type="hidden" name="cover" value="<?php echo $cover; ?>" />
                                <button type="submit" class="btn btn-primary mr-3 edituser"><i class="fa fa-pencil-square-o fa-lg"></i></button>
                            </form>
                        </td>


                        <!-- form delete -->
                        <td>
                            <form action="config/hapus.php" method="POST">
                                <input type="hidden" name="id_buku" value="<?php echo $id; ?>" />
                                <button type="submit" class="btn btn-danger deleteuser"><i class="fa fa-trash-o fa-lg"></i></button>
                            </form>
                        </td>
                        </form>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>


    <footer id="footer">
        <div class="container">
            <div class="row double">
                <div class="6u">
                    <div class="row collapse-at-2">
                        <div class="6u">
                            <h3>Book</h3>

                            </ul>
                        </div>
                        <div class="6u">

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="6u">
                    <h2></h2>
                    <p></p>
                    <ul class="icons">
                        <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                        <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                        <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
                        <li><a href="#" class="icon fa-linkedin"><span class="label">LinkedIn</span></a></li>
                        <li><a href="#" class="icon fa-pinterest"><span class="label">Pinterest</span></a></li>
                    </ul>
                </div>
            </div>
            <ul class="copyright">
                <li>&copy; @Copyright by 18111083_MuhammadRifqiRaufFathurrahman_TIFRP18CIDA.</li>
            </ul>
        </div>
    </footer>

</body>

</html>