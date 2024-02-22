<?php
include '../config.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $judul = $_POST['judul'];
    $penerbit = $_POST['penerbit'];
    $tahun_terbit = $_POST['tahun_terbit'];

    $sql = "INSERT INTO buku (`judul`, `penerbit`, `tahun_terbit`) 
    VALUES ('$judul', '$penerbit', '$tahun_terbit')";
    if (mysqli_query($connection, $sql)) {
        header('Location: ../buku.php');
    } else {
        echo "Gagal menambahkan buku";
    }
}