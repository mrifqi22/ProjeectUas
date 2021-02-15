<?php
require_once "koneksi.php";
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



$q = $database_connection->prepare("UPDATE `buku` SET `judul` = ?, 
`penulis` = ?, `penerbit` = ?, `tahun` = ?, `stok` = ?, `harga_pokok` = ?, `harga_jual` = ?, `diskon` = ?, `cover` = ? WHERE `buku`.`id` = ?");
$q->execute([$judul, $penulis, $penerbit, $tahun, $stok, $harga_pokok, $harga_jual, $diskon, $cover, $id_buku]);
header("Location: ../tampilan-buku.php");
