<?php
session_start();

if ( $_SESSION["login"] ) {
    header("Location: crud/");
    exit;
}

header("Location: ../index.html");
exit;

?>