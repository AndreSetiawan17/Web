<?php
session_start();

$tusers  = $_ENV["TUSERS"];
$session = $_ENV["SESSION"];


function register($data) {
    global $tusers;
    global $conn;

    $month = [];
    for ( $i = 1; $i <= 12; $i++ ) {
        $month[
            ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"]
        [$i] //Index
        ] = $i + 1;
    }

    // Error Code
    // -1  tidak tahu
    // -2  username sudah terdaftar
    // -3  password tidak sama

    $username = mysqli_real_escape_string($conn ,strtolower(stripslashes($data["username"])));
    $email    = mysqli_real_escape_string($conn ,$data["email"]);
    $password = mysqli_real_escape_string($conn ,$data["password"]);
    $confirm  = $data["confirm-password"];
    $birthday = $data["birthday-year"] . "-" . $month[$data["birthday-month"]] . "-" . $data["birthday-day"];
    $gender   = $data["gender"];


    // Mengecek apakah ada username yang sama pada database
    $result = mysqli_fetch_assoc(mysqli_query($conn, "SELECT username FROM $tusers WHERE username = '$username'"));
    if ( !empty($result) ) { return -2; }


    if ( $password !== $confirm ) { return -3; }

    // Enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);
    
    mysqli_query($conn, "INSERT INTO $tusers (username ,email ,password ,gender ,birthday)
    values (
        '$username', '$email', '$password', '$gender', '$birthday'
    )");

    return 1;
}

function login($data) {
    global $session;
    global $tusers;
    global $conn;


    $username = strtolower($data["username"]);
    $password = $data["password"];


    $result    = mysqli_query($conn, "SELECT * FROM $tusers WHERE username = '$username'");
    $user_data = mysqli_fetch_assoc($result);

    // -1 tidak tahu
    // -2 username tidak ada
    // -3 password salah

    if ( empty($user_data) ) { return -2; }

    if ( mysqli_num_rows($result) === 1 ) {
        if (password_verify($password, $user_data["password"]) ) {

            // Session
            $id = $user_data["id"];
            $result = mysqli_fetch_assoc(mysqli_query($conn ,"SELECT kunci FROM $session WHERE id = $id"));
            
            while (true) {
                global $kunci;

                //Membuat string acak untuk dijadikan kunci 
                $kunci = bin2hex(random_bytes(100));
                
                // Jika tidak ada kunci yang dibuat sebelumnya
                if ( !$result ) { break; }
                
                elseif ( $kunci !== $result ) { break; }
            }

            // Jika kunci sebelumnya ada maka akan dihapus dan diganti dengan yang baru
            if ( $result ) {
                echo '<h1>Delete</h1>';
                mysqli_query($conn, "DELETE FROM $session WHERE id = $id");
            }

            // Memasukkan id dan key kedalam database
            mysqli_query($conn, "INSERT INTO $session (id, kunci) values ($id, '$kunci')");

            $_SESSION["login"] = true;
            $_SESSION["id"]    = $id;
            $_SESSION["key"]   = $kunci;
            return 1;


        } else { return -3; }
    }else { print_r(mysqli_error($conn)); return -1;}
}

function verify($loc) {
    global $session;
    global $conn;

    // HELP
    // Loc harus berisi path yang akan menuju hierarki yang sama dengan lokasi file ini

    // -1 tidak login
    // -2 kunci tidak sesuai
    // -3 kunci tidak ada
    // -100 tidak tahu

    if ( isset($_SESSION["login"]) ) {
        $id   = $_SESSION["id"];
        $skey = $_SESSION["key"]; // Session key

        $result = mysqli_fetch_assoc(mysqli_query($conn, "SELECT kunci FROM $session WHERE id = $id"));
        if ( !$result ) { 
            // Jika tidak ada kunci tetapi session login sudah didefinisikan
            $loc .= "account/";
            header("Location: $loc");
         }
        $dkey = $result["kunci"]; // Database key
        
        if ( $skey !== $dkey ) { return -2; }
        return 1;
    } else {
        $loc .= "account/";
        header("Location: $loc");
    }
}

function extrax($text) {
    global $conn;
    $result = mysqli_query($conn,$text);
    $arr = [];
    while ( $i = mysqli_fetch_assoc($result)) {
        $arr[] = $i;
    } return $arr;
}
?>