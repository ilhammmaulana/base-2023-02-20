<?php
include '../config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $sql = "DELETE FROM peminjaman WHERE id = $id";
    if (mysqli_query($connection, $sql)) {
        header('Location: ../peminjaman.php');
    } else {
        echo mysqli_error($connection);
    }
}