<?php
require "../../koneksi.php";
require "../lorefunc.php";

var_dump($_POST);

if ( isset($_POST["login"]) ) { $error = login($_POST); }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Pada input username dan password teks placeholder sedikit dipindah kearah kanan -->
    
    <div class="container">

        <h1>Login</h1>

        <form action="" method="post">
            <div class="input-text">
                <div class="field"><input type="text" name="username" placeholder="Username" autocomplete="off" required></div>
                <div class="field"><input type="password" name="password" placeholder="Password" autocomplete="off" required></div>
                <div class="field login-button"><button type="submit" name="login">Login</button></div>
            </div>
            <div class="checkbox">
                <label for="remember-checkbox">Remember me?</label>
                <input type="checkbox" id="remember-checkbox" name="ingat">
            </div>
        </form>
        

        <div class="help">
            <div class="cont">
                <p><a href="forget.php">Lupa password?</a></p>
                <p>|</p>
                <p><a href="../register/">Belum punya akun?</a></p>
            </div>
        </div>

    </div>

</body>
</html>