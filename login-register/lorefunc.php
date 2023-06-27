<?php
// Login / Register Function
$tusers = $_ENV["TUSERS"];

function register($data) {
    global $tusers;
    global $conn;

    // Update later
    // Error code
    // -1 untuk tidak tahu
    // -2 untuk username sudah terdaftar
    // -3 untuk password tidak sama

    $username = strtolower(stripslashes($data["username"]));
    $email    = mysqli_real_escape_string($conn ,$data["email"]);
    $password = mysqli_real_escape_string($conn ,$data["password"]);
    $confirm  = mysqli_real_escape_string($conn ,$data["confirm-password"]);
    $birthday = $data["birthday-day"] . "/" . $data["birthday-month"] . "/" . $data["birthday-year"];
    $gender   = $data["gender"];


    $result = mysqli_fetch_assoc(mysqli_query($conn, "SELECT username FROM $tusers WHERE username = '$username'"));
    if ( !empty($result) ) { return -3; }


    if ( $password !== $confirm ) { return -2; }

    // Enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);
    
    mysqli_query($conn, "INSERT INTO $tusers (username ,email ,password ,gender ,birthday)
    values (
        '$username', '$email', '$password', '$gender', '$birthday'
    )");
    return 0;

}

function login($data) {
    global $tusers;
    global $conn;


    $username = strtolower($data["username"]);
    $password = $data["password"];


    $result    = mysqli_query($conn, "SELECT * FROM $tusers WHERE username = '$username'");
    $user_data = mysqli_fetch_assoc($result);

    // -1 tidak tahu
    // -2 username tidak ada
    // -3 password salah

    if ( mysqli_num_rows($result) === 1 ) {
        if (password_verify($password, $user_data["password"]) ) {

            






            // Upgrade later
            // echo "<h1>Bisa cuy</h1>";
            // sleep(5);
            // header("Location: ../../index.html");
        }else { echo "Kata sandi salah"; }
    }else { echo "Error: " . mysqli_error($conn); }
}

?>