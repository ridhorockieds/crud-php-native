<?php
ob_start();
include("Koneksi.php");

mysqli_query($koneksi, "INSERT INTO mahasiswa(nim,nama,jurusan,email) VALUES('$_POST[nim]','$_POST[nama]','$_POST[jurusan]','$_POST[email]')");
header('location:tampil_mhs.php');
