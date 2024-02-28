<?php
include '../config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $telepon = $_POST['telepon'];
    $nisn = $_POST['nisn'];

    $sql = "UPDATE `siswa` SET 
    `nama`='$nama',`kelas`='$kelas',`telepon`='$telepon', `nisn` = '$nisn'
     WHERE id = $id";
    if (mysqli_query($connection, $sql)) {
        header('Location: ../siswa.php');
    } else {
        echo mysqli_error($connection);
    }
}