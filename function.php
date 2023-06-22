<?php 


function query($text) {
    global $conn;
    $result = mysqli_query($conn,$text);
    $arr = [];

    while ( $i = mysqli_fetch_assoc($result)) {
    $arr[] = $i;
    }

    return $arr;
}












?>