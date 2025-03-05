<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemrograman PHP #4</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        h1 {
            font-size: 24px;
            color: #2c3e50;
        }
        h2 {
            font-size: 18px;
            color: #34495e;
        }
        hr {
            border: 1px solid #ccc;
            margin: 10px 0;
        }
        p {
            font-size: 18px;
            color: #333;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Oliver Doloksaribu</h1>
        <h2>102022300173 - SI4707</h2>
        <hr>

        <?php
            echo "<p>Ini PHP menggunakan variabel</p>";

            $panjang = 5;
            $lebar = 20;
            $luas = $panjang * $lebar;

            echo "<p>Hasil perhitungan P x L = <b>$luas</b></p>";
        ?>
    </div>
</body>
</html>
