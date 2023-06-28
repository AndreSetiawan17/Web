<?php
session_start();


function verify() {
    global $conn;

    $session = $_ENV["SESSION"];
    var_dump($session);

    // -1 tidak login
    // -2 kunci tidak sesuai
    // -3 kunci tidak ada
    // -100 tidak tahu

    if ( isset($_SESSION["login"]) ) {
        $id   = $_SESSION["id"];
        $skey = $_SESSION["key"]; // Session key

        
        $result = mysqli_fetch_assoc(mysqli_query($conn, "SELECT kunci FROM $session WHERE id = $id"));
        if ( !$result ) { return -3; }
        $dkey = $result["key"]; // Database key

        var_dump($id);
        
        
        echo "<br><br><br><br>";
        
        echo "Session key -->";
        var_dump($skey);
        echo "<br><br>";
        echo "Database key -->";
        var_dump($dkey);
        
        if ( $skey !== $dkey ) { return -2; }

        return 1;
    } else {
        return -1;
    }
}


?>