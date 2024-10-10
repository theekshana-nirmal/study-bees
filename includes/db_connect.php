<?php

$servername = "localhost";     // Your server name
$username = "root";            // Your MySQL username
$password = "";                // Your MySQL password
$dbname = "your_database_name"; // Your database name

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    //echo "Connected successfully";
    echo "<script>console.log('Connected successfully');</script>";
}
