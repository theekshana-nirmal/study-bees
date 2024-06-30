<?php

include "../includes/db_connect.php";

//DISPLAY MESSAGES BASED ON THE $_GET VALUE
if (isset($_GET['success']) && $_GET['success'] == 'registration_successful') {
    $display = "show-item message-success";
    if (isset($_SESSION['message'])) {
        echo "<div class='$display'>" . $_SESSION['message'] . "</div>";
        unset($_SESSION['message']);
    }
} elseif (isset($_GET['error']) && $_GET['error'] == 'registration_failed') {
    $display = "show-item message-error";
    if (isset($_SESSION['message'])) {
        echo "<div class='$display'>" . $_SESSION['message'] . "</div>";
        unset($_SESSION['message']);
    }
} elseif (isset($_GET['error']) && $_GET['error'] == 'UserNotFound') {
    $display = "show-item message-error";
    if (isset($_SESSION['message'])) {
        echo "<div class='$display'>" . $_SESSION['message'] . "</div>";
        unset($_SESSION['message']);
    }
} elseif (isset($_GET['error']) && $_GET['error'] == 'InvalidPassword') {
    $display = "show-item message-error";
    if (isset($_SESSION['message'])) {
        echo "<div class='$display'>" . $_SESSION['message'] . "</div>";
        unset($_SESSION['message']);
    }
} elseif (isset($_GET['success']) && $_GET['success'] == 'profile_updated') {
    $display = "show-item message-success";
    if (isset($_SESSION['message'])) {
        echo "<div class='$display'>" . $_SESSION['message'] . "</div>";
        unset($_SESSION['message']);
    }
} elseif (isset($_GET['error']) && $_GET['error'] == 'profile_update_failed') {
    $display = "show-item message-error";
    if (isset($_SESSION['message'])) {
        echo "<div class='$display'>" . $_SESSION['message'] . "</div>";
        unset($_SESSION['message']);
    }
} elseif (isset($_GET['success']) && $_GET['success'] == 'logout_successful') {
    $display = "show-item message-success";
    if (isset($_SESSION['message'])) {
        echo "<div class='$display'>" . $_SESSION['message'] . "</div>";
        unset($_SESSION['message']);
    }
} else {
}
