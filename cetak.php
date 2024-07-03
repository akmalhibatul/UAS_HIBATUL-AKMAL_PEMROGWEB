<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Data</title>
</head>
<style>
    @media print {
        .noPrint {
            display: none;
        }
    }
</style>

<body>
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
            </tr>
            <?php
            include('koneksi.php');
            $query = mysqli_query($koneksi, "SELECT * FROM tb_klasemen");
            while ($data = mysqli_fetch_array($query)) {
            ?>
                <tr>
                    <td><?php echo $data['nama_negara'] ?></td>
                    <td><?php echo $data['menang'] ?></td>
                    <td><?php echo $data['seri'] ?></td>
                    <td><?php echo $data['kalah'] ?></td>
                    <td><?php echo $data['poin'] ?></td>
                </tr>
            <?php } ?>
        </table>
        <br><br>
        <button onclick="window.print();" class="noPrint">
            Print Me
        </button>
        <a href="index.php" class="noPrint">KEMBALI</a>
    </center>

</body>

</html>