<?php
// Handle user registration
global $conn;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate inputs
    // Hash password
    // Check for duplicate email
    // Upload image

    // Insert data into 'admin' table
    $sql = "INSERT INTO admin (username, password, email) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $username, $hashed_password, $email);

    // Execute the statement
    $stmt->execute();

    // Close the statement
    $stmt->close();
}

