<?php
include("koneksi.php");

session_start();
if (!isset($_SESSION['nim'])) {
    header("Location: login.php");
    exit;
}

$nama_negara = $_POST['nama_negara'];
$nama_group = $_POST['nama_group'];

$query = mysqli_query($koneksi,"INSERT INTO `tb_tim` VALUES (NULL,'$nama_negara','$nama_group')");

if($query == TRUE){
    header('location:index.php');
}

?>