<?php
$servername = "localhost";  // usually localhost
$username = "root";         // your MySQL username
$password = "";             // your MySQL password
$database = "netflix_db";   // the database we created

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connection Successful";

// Close connection (optional here, usually after queries)
$conn->close();
?>
