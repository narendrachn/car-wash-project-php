<?php
$servername = "localhost";
$username = "narendrachowdary";
$password = "Narendra999";
$database = "mysql.user-database";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
