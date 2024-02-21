<?php

$SERVER = 'localhost';
$USERNAME = 'root';
$DBNAME = 'ilham_relational';
$PASSWORD = '';

try {
    $connection = mysqli_connect($SERVER, $USERNAME, $PASSWORD, $DBNAME);
} catch (\Throwable $th) {
    throw $th;
}