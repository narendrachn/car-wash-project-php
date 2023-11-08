<?php
// Include database connection code (e.g., db_connection.php)
require_once "controllers/db_connection.php";

// User registration
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"]; // The plaintext password entered by the user

    // Generate a unique salt for each user (you can use random_bytes or a similar function)
    $id = uniqid(mt_rand(), true);

    // Create a secure hash of the password using the salt (you can use password_hash)
    $hashed_password = password_hash($password . $id, PASSWORD_BCRYPT);

    // Insert the username, hashed password, and salt into the database
    $sql = "INSERT INTO users (username, password, id) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $username, $hashed_password, $id);

    if ($stmt->execute()) {
        echo "User registered successfully!";
    } else {
        echo "Error registering user: " . $stmt->error;
    }
}
?>
