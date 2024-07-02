<?php
include("koneksi.php");

session_start();
if (!isset($_SESSION['nim'])) {
    header("Location: login.php");
    exit;
}

$id_klasemen = $_GET['id_klasemen'];

$query = mysqli_query($koneksi,"DELETE FROM `tb_klasemen` WHERE `id_klasemen`='$id_klasemen'");

if($query == TRUE){
    echo "Berhasil hapus";
}

?>