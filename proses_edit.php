<?php
include_once("Koneksi.php");

$id = $_POST['id'];
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$email = $_POST['email'];

$update = "UPDATE mahasiswa SET nama='$nama', jurusan='$jurusan', email='$email' WHERE id=$id";
$kirim = mysqli_query($koneksi, $update);
header("location:tampil_mhs.php");
