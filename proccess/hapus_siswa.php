<?php
include '../config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $sql = "DELETE FROM siswa WHERE id = $id";
    if (mysqli_query($connection, $sql)) {
        header('Location: ../siswa.php');
    } else {
        echo mysqli_error($connection);
    }
}