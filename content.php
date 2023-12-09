<?php
// Display and manage website content (requires login)
global $conn;
session_start();

if (isset($_SESSION["user_id"])) {
    //  displayING content from the 'content' table
} else {
    echo "Access denied. Please log in.";
}

$conn->close();

