<?php
require_once "koneksi.php";
$id_buku= $_POST["id_buku"];
echo $id_buku;

$q = $database_connection->prepare("DELETE FROM `buku` WHERE `buku`.`id` = ?");
$q->execute([$id_buku]);
header("Location: ../tampilan-buku.php");
