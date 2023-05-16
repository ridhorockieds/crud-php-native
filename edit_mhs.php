<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mahasiswa</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <center>
        <?php
        include("Koneksi.php");
        $id = $_GET['id'];
        $result = "SELECT * FROM mahasiswa WHERE id='$id'";
        $edit = mysqli_query($koneksi, $result);

        while ($row = mysqli_fetch_array($edit)) {
            $nim = $row['nim'];
            $nama = $row['nama'];
            $jurusan = $row['jurusan'];
            $email = $row['email'];
        };
        ?>
        <header>
            <div class="navbar">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="tampil_mhs.php">Daftar Mahasiswa</a></li>
                </ul>
            </div>
        </header>
        <hr>
        <h2>Tambah Mahasiswa</h2>
        <form method="POST" action="proses_edit.php">

            <table bordercolor="#000">

                <tr>
                    <td>NIM</td>
                    <td>: <input type="number" value="<?php echo $nim; ?>" disabled autocomplete="off"></td>
                    <input type="hidden" name="id" value=<?php echo $_GET['id']; ?>>
                </tr>

                <tr>
                    <td> Nama</td>
                    <td> : <input type=" text" name="nama" value="<?php echo $nama; ?>" autocomplete="off"></td>
                </tr>

                <tr>
                    <td> Jurusan</td>
                    <td> : <input type="text" name="jurusan" value="<?php echo $jurusan; ?>" autocomplete="off"></td>
                </tr>

                <tr>
                    <td> Mata Kuliah</td>
                    <td> : <input type="text" name="email" value="<?php echo $email; ?>" autocomplete="off"></td>
                </tr>
            </table>
            <button type="submit" name="update">Update</button>

        </form>
    </center>
</body>

</html>