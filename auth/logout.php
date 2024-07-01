<?php

session_start();
$_SESSION = array();
session_destroy();

session_start();
$message = "👋 You've logged out successfully! See you next time!";
$_SESSION['message'] = $message;
header("location: ../auth/login.php?success=logout_successful");
exit;
exit;
