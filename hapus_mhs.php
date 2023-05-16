<?php
include("Koneksi.php");
$id = $_GET['id'];

$hapus = "DELETE FROM mahasiswa WHERE id=$id";
$result = mysqli_query($koneksi, $hapus);

header("location:tampil_mhs.php");
