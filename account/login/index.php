<?php
session_start();
require "../../koneksi.php";
require "../../func.php";

if ( isset($_SESSION["login"]) ) { header("Location: ../../"); }

echo '<h1>Yeay1</h1>';
if ( isset($_POST["login"]) ) {
    $error = login($_POST);
}

echo "<br>Post -->";
var_dump($_POST);


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
    <?php if ( isset($_POST["login"]) ) : ?>
        <?php if ($error === 1) : ?>
            <script>
                alert("Login Berhasil!");
                window.location.href = "../../";
            </script>
        <?php elseif ($error === -2) : ?>
            <script>
                alert("Username not found!");
            </script>
        <?php elseif ($error === -3) : ?>
            <script>alert("Password salah!");</script>
        <?php else : ?>
            <script>alert("Error tidak diketahui. Error Code: <?php echo $error;?>");</script>
        <?php endif; ?>
        <?php //echo "<br>Error code"; var_dump($error); ?>
    <?php endif ?>

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