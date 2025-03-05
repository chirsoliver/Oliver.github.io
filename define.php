<?php
// ==============================================
// Nama  : Oliver Doloksaribu
// NIM   : 102022300173
// Kelas : SI4707
// ==============================================

define("WEB", "https://indonesia.go.id/");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konstanta dengan Define</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Website Resmi Indonesia</h1>
        <p>Alamat web resmi: 
            <a href="<?php echo WEB; ?>" target="_blank"><?php echo WEB; ?></a>
        </p>
        <hr>
        <p class="footer">Dibuat oleh: <strong>Oliver Doloksaribu</strong> - 102022300173 - SI4707</p>
    </div>
</body>
</html>
