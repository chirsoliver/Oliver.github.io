<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemrograman PHP #3</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Oliver Doloksaribu</h1>
        <h2>102022300173 - SI4707</h2>
        <hr>

        <?php
        for ($i = 0; $i < 5; $i++) {
        ?>
            <p>Pemrograman PHP - <?php echo $i; ?></p>
        <?php
        }
        ?>
    </div>
</body>
</html>
