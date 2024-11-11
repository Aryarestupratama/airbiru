<?php
// Database connection settings
$servername = "localhost"; // Replace with your database server name, often 'localhost'
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$dbname = "airbiru"; // Replace with your actual database name

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check if the connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
