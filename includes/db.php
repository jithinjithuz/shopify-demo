<?php
// db.php
$servername = "localhost"; // Database server
$username = "root";        // Your database username
$password = "";            // Your database password
$dbname = "demo_website";  // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
