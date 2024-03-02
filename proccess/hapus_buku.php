<?php
include '../config.php';
$connection = Config::getConnection();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $sql = "DELETE FROM buku WHERE id = $id";
    if (mysqli_query($connection, $sql)) {
        header('Location: ../buku.php');
    } else {
        echo mysqli_error($connection);
    }
}
