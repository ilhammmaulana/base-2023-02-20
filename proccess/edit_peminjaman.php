<?php
include '../config.php';
$connection = Config::getConnection();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $buku_id = $_POST['buku_id'];
    $siswa_id = $_POST['siswa_id'];

    $sql = "UPDATE `peminjaman` SET `buku_id` = '$buku_id', `siswa_id` = '$siswa_id'
    WHERE id = $id";

    if (mysqli_query($connection, $sql)) {
        header('Location: ../peminjaman.php');
    } else {
        echo mysqli_error($connection);
    }
}