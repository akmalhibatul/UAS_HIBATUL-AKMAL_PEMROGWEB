<?php
include('koneksi.php');

session_start();
if (!isset($_SESSION['nim'])) {
    header("Location: login.php");
    exit;
}

$id_klasemen = $_GET['id_klasemen'];


$sql = "SELECT * FROM tb_klasemen WHERE id_klasemen = ?";
$stmt = $koneksi->prepare($sql);
$stmt->bind_param("i", $id_klasemen);
$stmt->execute();
$result = $stmt->get_result();
$klasemen = $result->fetch_assoc();

if (!$klasemen) {
    echo "Klasemen tidak ditemukan!";
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Klasemen</title>
</head>
<body>
    <h1>Edit Klasemen</h1>
    <form action="proses_edit_klasemen.php" method="post">
        <input type="text" name="id_klasemen" value="<?php echo $klasemen['id_klasemen']; ?>" hidden>
    <label for="">Masukan Nama Negara</label>
    <input type="text" name="nama_negara" value="<?php echo $klasemen['nama_negara']; ?>">
    <br><br>
    <label for="">Masukan Menang</label>
    <input type="text" name="menang" value="<?php echo $klasemen['menang']; ?>">
    <br><br>
    <label for="">Masukan Seri</label>
    <input type="text" name="seri" value="<?php echo $klasemen['seri']; ?>">
    <br><br>
    <label for="">Masukan kalah</label>
    <input type="text" name="kalah" value="<?php echo $klasemen['kalah']; ?>">
    <br><br>
    <label for="">Masukan poin</label>
    <input type="text" name="poin" value="<?php echo $klasemen['poin']; ?>">
    <br><br>
    <button type="submit">Submit</button>
    <button type="reset">Reset</button>
    </form>
    <br><br>
    <a href="index.php">Kembali Ke Home</a>
</body>
</html>