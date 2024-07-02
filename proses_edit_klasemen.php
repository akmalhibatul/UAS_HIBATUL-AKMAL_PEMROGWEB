<?php
include("koneksi.php");

session_start();
if (!isset($_SESSION['nim'])) {
    header("Location: login.php");
    exit;
}

$id_klasemen = $_POST['id_klasemen'];
$nama_negara = $_POST['nama_negara'];
$menang = $_POST['menang'];
$seri = $_POST['seri'];
$kalah = $_POST['kalah'];
$poin = $_POST['poin'];

$query = mysqli_query($koneksi,"UPDATE `tb_klasemen` SET `nama_negara`='$nama_negara',`menang`='$menang',`seri`='$seri',`kalah`='$kalah',`poin`='$poin' WHERE `id_klasemen`='$id_klasemen'");

if($query == TRUE){
    echo "Berhasil update";
}

?>