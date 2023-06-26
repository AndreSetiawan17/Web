<?php
// Login / Register Function
require "conf.php";

function register($data) {
    global $users_data;
    global $conn;

    // Update later
    // Error code
    // -1 untuk tidak tahu
    // -2 untuk password tidak sama
    // -3 untuk username sudah terdaftar

    $username = strtolower(stripslashes($data["username"]));
    $email    = mysqli_real_escape_string($conn ,$data["email"]);
    $password = mysqli_real_escape_string($conn ,$data["password"]);
    $confirm  = mysqli_real_escape_string($conn ,$data["confirm-password"]);
    $birthday = $data["birthday-day"] . "/" . $data["birthday-month"] . "/" . $data["birthday-year"];
    $gender   = $data["gender"];


    $result = mysqli_fetch_assoc(mysqli_query($conn, "SELECT username FROM $users_data WHERE username = '$username'"));
    if ( !empty($result) ) { return -3; }


    if ( $password !== $confirm ) { return -2; }

    // Enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);
    
    mysqli_query($conn, "INSERT INTO $users_data (username ,email ,password ,gender ,birthday)
    values (
        '$username', '$email', '$password', '$gender', '$birthday'
    )");
    return 0;

}



?>