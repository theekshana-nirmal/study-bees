<?php

$servername = "82.197.82.18"; // or your server name
$username = "u432187884_root";        // your MySQL username
$password = "#Root1234";            // your MySQL password
$dbname = "u432187884_localhost";    // your database name

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    //echo "Connected successfully";
    echo "<script>console.log('Connected successfully');</script>";
}
