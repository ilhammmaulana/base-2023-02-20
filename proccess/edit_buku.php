<?php
include '../config.php';
$connection = Config::getConnection();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $penerbit = $_POST['penerbit'];
    $tahun_terbit = $_POST['tahun_terbit'];

    $sql = "UPDATE      `buku` SET 
    `judul`='$judul',`penerbit`='$penerbit',`tahun_terbit`='$tahun_terbit'
     WHERE id = $id";
    if (mysqli_query($connection, $sql)) {
        header('Location: ../buku.php');
    } else {
        echo mysqli_error($connection);
    }
}