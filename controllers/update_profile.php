<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $contact = $_POST["contact"];

        // Perform input validation and security checks

        // Update the user's profile in the database (example: MySQL)
        // Replace with your actual database connection and SQL query
        $servername = "localhost";
        $username = "narendrachowdary";
        $password = "Narendra999";
        $dbname = "mysql";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    
        $sql = "UPDATE user_database SET name='$name', contact='$contact' WHERE email='$email'";
    
        if ($conn->query($sql) === TRUE) {
            echo "Profile updated successfully!";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    
        $conn->close();
    }


?>