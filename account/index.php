<?php
session_start();

if ( $_SESSION["login"] ) {
    header("Location: ../");
    exit;
}
header("Location: login/");





?>