<?php
    $nama = "John Doe";
    $nim = "123456789";
    $fakultas = "Fakultas Teknik";
    $program_studi = "Sistem Informasi";
    $foto_profil = "profile.jpg";
    $sosial_media = [
        "X" => "https://twitter.com/johndoe",
        "Github" => "https://github.com/johndoe",
        "Instagram" => "https://instagram.com/johndoe"
    ];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Web</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 50px;
        }
        img {
            border-radius: 50%;
            width: 150px;
            height: 150px;
        }
        .social-icons a {
            margin: 10px;
            text-decoration: none;
            font-size: 20px;
        }
    </style>
</head>
<body>
    <h1>Personal Web</h1>
    <img src="<?php echo $foto_profil; ?>" alt="Foto Profil">
    <h2><?php echo "$nama / $nim / $fakultas / $program_studi"; ?></h2>
    <div class="social-icons">
        <?php foreach ($sosial_media as $platform => $link): ?>
            <a href="<?php echo $link; ?>" target="_blank"> <?php echo $platform; ?> </a>
        <?php endforeach; ?>
    </div>
</body>
</html>
