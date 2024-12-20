<?php
    session_start();
    if(isset($_SESSION['login'])){
        header("Location: ../index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/process.css">
    <title>Login</title>
</head>
<body>
<form action="login-process.php" method="post">
    <div class="login-box">
        <div class="login-header">
            <header>Login</header>
        </div>
        <div class="input-box">
            <input type="text" name="username" class="input-field" placeholder="Email" required>
        </div>
        <div class="input-box">
            <input type="password" name="password" class="input-field" placeholder="Password" required>
        </div>
        <div class="input-submit">
            <button class="submit-btn" id="submit" name="login"></button>
            <label for="submit">Sign In</label>
        </div>
        <div class="sign-up-link">
            <p>Don't have account? <a href="register.php">Sign Up</a></p>
        </div>
    </div>
</form>
</body>
</html>
