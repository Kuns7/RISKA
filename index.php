<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Risk Management Homepage</h1>
    <h3>Selamat Datang di Risk Management Program</h3>
    <p>Risk Management adalah sebuah program dimana anda sebagai User dapat berkonsultasi mengenai masalah yang sedang anda hadapi dan akan mendapatkan solusi dan juga mitigasi oleh Admin</p> 
    <p>Kemudian Admin akan memberikan solusi dan mitigasi mengenai masalah yang sedang anda hadapi.</p>

    <?php if (Isset($_SESSION['login'])):?>
        <a href="process/logout.php">Logout</a>
    <?php else: ?>
        <a href="process/login.php">Login</a>
    <?php endif;?>
</body>
</html>