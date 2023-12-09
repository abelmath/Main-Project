<?php
// Display all registered users (requires login)
global $conn;
session_start();

if (isset($_SESSION["user_id"])) {
    //  display users from the 'admin' table
    $sql = "SELECT * FROM admin";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<h2>" . $row["username"]. "</h2><p>" . $row["email"] . "</p>";
            // Add update and delete functionality as needed
        }
    } else {
        echo "0 results";
    }
} else {
    echo "Access denied. Please log in.";
}

$conn->close();

