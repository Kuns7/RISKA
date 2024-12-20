<?php
    require '../resources/functions.php';
    $db = new Database();
    $enum_role = $db->enum("SHOW COLUMNS FROM users LIKE 'role'");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/process.css">
    <title>Register Account</title>
</head>
<body>
    <form action="login-process.php" method="post">
    <class="login-box">
        <div class="login-header">
            <header>Daftar</header>
        </div>
        <div class="input-box">
            <input type="text" name="username" class="input-field" placeholder="Email" required>
        </div>
        <div class="input-box">
            <input type="password" name="password" class="input-field" placeholder="Password" required>
        </div>
        <input type="hidden" id="role" name="role" value="User" readonly></br>
        <div class="input-submit">
            <button class="submit-btn" id="submit" name="login"></button>
            <label for="submit">Daftar</label>
        </div>
        <p>Sudah punya akun? <a href="login.php">Login</a></p>
    </form>
</body>
</html>