<?php
include '../config.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $siswa_id = $_POST['siswa_id'];
    $buku_id = $_POST['buku_id'];

    $sql = "INSERT INTO peminjaman (`siswa_id`, `buku_id`) 
    VALUES ('$siswa_id', '$buku_id')";
    if (mysqli_query($connection, $sql)) {
        header('Location: ../peminjaman.php');
    } else {
        echo "Gagal menambahkan peminjaman";
    }
}