<?php
session_start();

if ( isset($_SESSION["login"]) && $_SESSION["login"] ) {
    header("Location: ../");
    exit;
}
header("Location: login/");





?>