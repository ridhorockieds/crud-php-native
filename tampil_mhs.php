<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <center>
        <header>
            <div class="navbar">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="tampil_mhs.php">Data Mahasiswa</a></li>
                </ul>
            </div>
        </header>
        <hr>
        <h2>Data Mahasiswa</h2>
        <table>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Jurusan</th>
                <th>Mata Kuliah</th>
                <th>Aksi</th>
            </tr>
            <?php
            include("Koneksi.php");
            $tampil_mhs = "SELECT * FROM mahasiswa";
            $hasil = mysqli_query($koneksi, $tampil_mhs);
            $no = 1;

            while ($row = mysqli_fetch_array($hasil)) {
                echo "<tr> <td> $no </td>";
                echo "<td> $row[nim]</td>";
                echo "<td> $row[nama]</td>";
                echo "<td> $row[jurusan]</td>";
                echo "<td> $row[email]</td>";
                echo "<td> <a href='edit_mhs.php?id=$row[id]'>Edit</a> | <a href='hapus_mhs.php?id=$row[id]'>Hapus</a></td></tr>";

                $no++;
            }
            echo "</table>"
            ?>
    </center>
</body>

</html>