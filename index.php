<?php
include("koneksi.php");
session_start();
if (!isset($_SESSION['nim'])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Group B klasemen</h1>
    <H1>Hibatul Akmal</H1>
    <h1>211011400797</h1>
    <a href="logout.php">LOGOUT</a> | <a href="cetak.php">CETAK</a>
    <br><br>
    <hr>
    <h1>Tambah Negara</h1>
    <form action="proses_tim.php" method="post">
        <label for="">Pilih Nama Grup</label>
        <select name="nama_group">
            <option value="a">Grup A</option>
            <option value="b">Grup B</option>
            <option value="c">Grup C</option>
            <option value="d">Grup D</option>
        </select>
        <br><br>
        <label for="">Masukan Nama Negara</label>
        <input type="text" name="nama_negara">
        <br><br>
        <button type="submit">Submit</button>
        <button type="reset">Reset</button>
    </form>
    <hr>
    <h1>Tambah Klasemen</h1>
    <form action="proses_klasemen.php" method="post">
        <label for="">Masukan Nama Negara</label>
        <input type="text" name="nama_negara">
        <br><br>
        <label for="">Masukan Menang</label>
        <input type="text" name="menang">
        <br><br>
        <label for="">Masukan Seri</label>
        <input type="text" name="seri">
        <br><br>
        <label for="">Masukan kalah</label>
        <input type="text" name="kalah">
        <br><br>
        <label for="">Masukan poin</label>
        <input type="text" name="poin">
        <br><br>
        <button type="submit">Submit</button>
        <button type="reset">Reset</button>
    </form>
    <hr>
    <center>
        <h2>Data Group B</h2>
        <h2>Per <?= date('d-m-Y');; ?> <?= date('H:i:s a'); ?></h2>
        <h2>Hibatul Akmal - 211011400797</h2>
        <table border="1">
            <tr>
                <th>TIM</th>
                <th>Menang</th>
                <th>Seri</th>
                <th>Kalah</th>
                <th>Point</th>
                <th colspan="2">Aksi</th>
            </tr>
            <?php
            $query = mysqli_query($koneksi, "SELECT * FROM tb_klasemen");
            while ($data = mysqli_fetch_array($query)) {
            ?>
                <tr>
                    <td><?php echo $data['nama_negara'] ?></td>
                    <td><?php echo $data['menang'] ?></td>
                    <td><?php echo $data['seri'] ?></td>
                    <td><?php echo $data['kalah'] ?></td>
                    <td><?php echo $data['poin'] ?></td>
                    <td>
                        <a href="edit_klasemen.php?id_klasemen=<?php echo $data['id_klasemen'] ?>">Edit Klasemen</a> |
                        <a href="hapus_klasemen.php?id_klasemen=<?php echo $data['id_klasemen'] ?>">Hapus Klasemen</a>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </center>

</body>

</html>