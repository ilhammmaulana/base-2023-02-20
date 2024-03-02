<?php
include '../config.php';
$connection = Config::getConnection();


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $telepon = $_POST['telepon'];
    $nisn = $_POST['nisn'];

    $sql = "INSERT INTO siswa (`nama`, `kelas`, `telepon`, `nisn`) 
    VALUES ('$nama', '$kelas', '$telepon', '$nisn')";
    if (mysqli_query($connection, $sql)) {
        header('Location: ../siswa.php');
    } else {
        echo "Gagal menambahkan siswa";
    }
}