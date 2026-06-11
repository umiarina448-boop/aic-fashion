<?php

$host     = getenv('MYSQLHOST')     ?: 'mysql.railway.internal';
$user     = getenv('MYSQLUSER')     ?: 'root';
$password = getenv('MYSQLPASSWORD') ?: 'VGHCSmueiMzBhPBRVrFAydauuxBUXUnY';
$database = getenv('MYSQLDATABASE') ?: 'railway';
$port     = getenv('MYSQLPORT')     ?: 3306;

$conn = mysqli_connect($host, $user, $password, $database, $port);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>