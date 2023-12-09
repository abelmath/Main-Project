<?php
// Connect to the database (replace with your database credentials)
$servername = "172.31.22.43";
$username = "Sam200552821";
$password = "V1iXjpugew";
$dbname = "Sam200552821";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch and display content from the 'content' table
$sql = "SELECT * FROM content";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<h2>" . $row["title"]. "</h2><p>" . $row["description"] . "</p>";
    }
} else {
    echo "0 results";
}

$conn->close();

