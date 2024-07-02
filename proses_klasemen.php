<?php
include("koneksi.php");

session_start();
if (!isset($_SESSION['nim'])) {
    header("Location: login.php");
    exit;
}

$nama_negara = $_POST['nama_negara'];
$menang = $_POST['menang'];
$seri = $_POST['seri'];
$kalah = $_POST['kalah'];
$poin = $_POST['poin'];

$query = mysqli_query($koneksi,"INSERT INTO `tb_klasemen` VALUES (NULL,'$nama_negara','$menang','$seri','$kalah','$poin')");

if($query == TRUE){
    echo "Berhasil tambah";
    header('location:index.php');
}

?>