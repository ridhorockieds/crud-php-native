<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mahasiswa</title>
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
        <h2>Tambah Mahasiswa</h2>
        <form method="POST" action="proses_create.php">
            <table>
                <tr>
                    <td>NIM</td>
                    <td>
                        : <input type="number" name="nim" id="nim" required="requied" autocomplete="off" maxlength="9">
                    </td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>
                        : <input type="text" name="nama" id="nama" required="requied" autocomplete="off">
                    </td>
                </tr>
                <tr>
                    <td>Jurusan</td>
                    <td>
                        : <input type="text" name="jurusan" id="jurusan" required="requied" autocomplete="off">
                    </td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>
                        : <input type="email" name="email" id="email" required="requied" autocomplete="off">
                    </td>
                </tr>
            </table>
            <button type="submit" name="submit">Tambah</button>
        </form>
        <center>
</body>

</html>