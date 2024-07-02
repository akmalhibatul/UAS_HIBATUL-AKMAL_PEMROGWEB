<?php
session_start();
include 'koneksi.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nim = $_POST['nim'];
    $password = $_POST['password'];

    // Validasi input
    if (empty($nim) || empty($password)) {
        echo "nim dan password tidak boleh kosong!";
        exit;
    }

    // Query untuk mendapatkan data pengguna
    $sql = "SELECT * FROM tb_user WHERE nim = ?";
    $stmt = $koneksi->prepare($sql);
    $stmt->bind_param("s", $nim);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if ($user) {
        if ($user['password'] == $_POST['password']) {
                $_SESSION['id_user'] = $user['id_user'];
                $_SESSION['nim'] = $user['nim'];
                header("Location: index.php");
                exit;
            
        } else {
            echo "Password salah!";
        }
    } else {
        echo "Username tidak ditemukan!";
    }
}
