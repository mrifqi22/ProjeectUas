<?php
require_once "koneksi.php";

$judul = $_POST["judul"];
$penulis = $_POST["penulis"];
$penerbit = $_POST["penerbit"];
$tahun = $_POST["tahun"];
$stok = $_POST["stok"];
$hargapokok = $_POST["hargapokok"];
$hargajual = $_POST["hargajual"];
$diskon = $_POST["diskon"];
$cover = $_POST["cover"];


$q = $database_connection->prepare("INSERT INTO `buku` (`id`, `judul`, `penulis`, `penerbit`, `tahun`, `stok`, `harga_pokok`, `harga_jual`, `diskon`, `cover`) VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?);");
$q->execute([$judul, $penulis, $penerbit, $tahun, $stok, $hargapokok, $hargajual, $diskon, $cover]);
header("Location: ../tampilan-buku.php");
