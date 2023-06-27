<?php
session_start();

$_SESSION["login"] = true;


echo "Sesstion Active";
header("Location: ./");
?>