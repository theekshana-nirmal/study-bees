<?php

session_start();
$_SESSION = array();
session_destroy();

session_start();
$message = "You have successfully Logout";
$_SESSION['message'] = $message;
header("location: ../auth/login.php?success=logout_successful");
exit;
exit;
