<?php

session_start();
$_SESSION = array();
session_destroy();

session_start();
$message = "You have logout successfully!";
$_SESSION['message'] = $message;
header("location: ../auth/login.php?success=logout_successful");
exit;
exit;
