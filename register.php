<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];


    $servername = "your_servername";
    $username = "your_username";
    $password = "your_password";
    $dbname = "your_database";
    
    $conn = new mysqli($servername, $username, $password, $dbname);

}
?>