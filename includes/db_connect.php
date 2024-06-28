<?php

$servername = "localhost"; // or your server name
$username = "root";        // your MySQL username
$password = "";            // your MySQL password
$dbname = "study_bees";    // your database name

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}else{
    //echo "Connected successfully";
    echo "<script>console.log('Connected successfully');</script>";
}

?>
