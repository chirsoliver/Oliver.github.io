<?php
// ==============================================
// Nama  : Oliver Doloksaribu
// NIM   : 102022300173
// Kelas : SI4707
// ==============================================

$mahasiswa = ['Mahasiswa 1', 'Mahasiswa 2', 'Mahasiswa 3', 'Mahasiswa 4'];
$kelas = [1 => 'Kelas 1', 'Kelas 2', 'Kelas 3'];
$absen = ['Absen 1', 'Absen 2', 10 => 'Absen 3'];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array dalam PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Data Mahasiswa</h1>
        
        <h3>Daftar Mahasiswa:</h3>
        <ul>
            <?php
            foreach ($mahasiswa as $mhs) {
                echo "<li>$mhs</li>";
            }
            ?>
        </ul>

        <h3>Daftar Kelas:</h3>
        <ul>
            <?php
            foreach ($kelas as $key => $kls) {
                echo "<li>$key: $kls</li>";
            }
            ?>
        </ul>

        <h3>Daftar Absen:</h3>
        <ul>
            <?php
            foreach ($absen as $key => $abs) {
                echo "<li>$key: $abs</li>";
            }
            ?>
        </ul>

        <hr>
        <p class="footer">Dibuat oleh: <strong>Oliver Doloksaribu</strong> - 102022300173 - SI4707</p>
    </div>
</body>
</html>
