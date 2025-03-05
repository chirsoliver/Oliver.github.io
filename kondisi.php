<?php
// Oliver Doloksaribu - 102022300173 - SI4707
$username = "halo";
$password = "1234";

$login_status = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input_user = $_POST["username"];
    $input_pass = $_POST["password"];

    if ($input_user === $username && $input_pass === $password) {
        $login_status = "<p class='success'>✅ Username dan password sesuai.</p>";
    } else {
        $login_status = "<p class='error'>❌ Username atau password salah!</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Sederhana - PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Validasi Login</h1>
        <hr>
        <p class="author">Dibuat oleh: <strong>Oliver Doloksaribu</strong> (102022300173 - SI4707)</p>
        <form method="POST">
            <label>Username:</label>
            <input type="text" name="username" required>
            <label>Password:</label>
            <input type="password" name="password" required>
            <button type="submit">Login</button>
        </form>
        <?= $login_status ?>
    </div>
</body>
</html>
