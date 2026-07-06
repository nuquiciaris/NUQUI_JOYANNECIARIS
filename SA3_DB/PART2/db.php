<?php


session_start();


$connection = mysqli_connect("localhost", "root", "", "accounts_db");


if(!$connection) {
    die("Connection failed");
}


?>

