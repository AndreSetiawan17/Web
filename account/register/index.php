<?php
require "../../koneksi.php";
require "../lolore.php";
require "requirement.php";


if ( isset($_SESSION["login"]) ) { header("Location: ../../"); }

if ( isset($_POST["register"]) ) {
    $error = register($_POST);
    if ( $error === 1 ) { header("Location: ../login/"); }
}

// echo "Error code -> ";
// var_dump($error);
// echo "<br><br>";

// // Pada saat menekan bagian bukan label / radio button atau (div) saja, maka gender tidak akan dipilih. Untuk mengatasinya akan digunakan javascript
// // Pada gender manambahkan opsi ketiga yaitu tidak ingin memberitahu
// echo "POST -> ";
// var_dump($_POST);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php if ( $error === 1) : ?>
        <script>
            alert("Berhasil mendaftar!");
            window.location.href = "../../"
        </script>
    <?php elseif ( $error === -2 ) : ?>
        <script>alert("Username Sudah Terdaftar!");</script>
    <?php elseif ( $error === -3 ) : ?>
        <script>alert("Password Tidak Sama!");</script>
    <?php endif ?>

    <br><br><br>

    <div class="container">

        <h1>Register</h1>

        <form action="" method="post">


            <div class="fill-text-container">
                <div class="username"><input type="text" name="username" id="username" placeholder="Username" autocomplete="off" required></div>
                <div class="email"><input type="text" name="email" id="email" placeholder="Email" autocomplete="off" required></div>
                <div class="password"><input type="password" name="password" id="password" placeholder="Password" autocomplete="off" required></div>
                <div class="password"><input type="password" name="confirm-password" id="confirm-password" placeholder="Confirm Password" autocomplete="off" required></div>
            </div>


            <div class="date">
                <select class="birthday day" name="birthday-day" id="">
                    <?php foreach ( $day as $d ) :?>
                        <option value="<?= $d?>" <?php if ( date("d") == $d) { echo "selected"; }?>><?= $d ?></option>
                    <?php endforeach ?>
                </select>

                <select class="birthday month" name="birthday-month" id="">
                    <?php foreach ( $month as $m ) :?>
                        <option value="<?= $m?>" <?php if ( date("F") == $m) { echo "selected";}?>><?= $m ?></option>
                    <?php endforeach ?>
                </select>

                <select class="birthday year" name="birthday-year" id="">
                    <?php foreach ( $year as $y ) :?>
                        <option value="<?= $y?>"><?= $y ?></option>
                    <?php endforeach ?>
                </select>
            </div>

            <div class="gender cf">
                <div class="radio male">
                    <label for="male">Male</label>
                    <input type="radio" name="gender" value="male" id="male">
                </div>

                <div class="radio female">
                    <label for="female">Female</label>
                    <input type="radio" name="gender" value="female" id="female">
                </div>
            </div>

            <div class="submit-button">
                <button type="submit" name="register">Submit</button>
            </div>
        </form>

        <div class="login"><p><a href="../login/">Login?</a></p></div>

    </div>
    
</body>
</html>