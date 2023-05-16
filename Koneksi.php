<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "db_mhs";
$koneksi = mysqli_connect($server, $username, $password) or die("Koneksi gagal!");
mysqli_select_db($koneksi, $database) or die("Database gagal!");
