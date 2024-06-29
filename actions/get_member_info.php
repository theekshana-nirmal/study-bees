<?php

include '../includes/db_connect.php';

// Check if 'member_id' is set in the URL query parameters
if (isset($_GET['member_id'])) {
    $member_id = urldecode($_GET['member_id']);
    $_SESSION['member_id'] = $member_id;

    //get user data
    $sql = "SELECT * FROM users WHERE user_id = $member_id";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $member_email = $row['email'];
        $member_first_name = $row['first_name'];
        $member_last_name = $row['last_name'];
        $member_profile_picture = $row['profile_picture'];
        $member_phone_number = $row['phone_number'];

        // Store user data in session
        $_SESSION['member_email'] = $member_email;
        $_SESSION['member_first_name'] = $member_first_name;
        $_SESSION['member_last_name'] = $member_last_name;
        $_SESSION['member_full_name'] = $member_first_name . " " . $member_last_name;
        $_SESSION['member_profile_picture'] = $member_profile_picture;
        $_SESSION['member_phone_number'] = $member_phone_number;
    } else {
        header("location: study-buddies?error=user-not-found.php");
        exit;
    }
} else {
    header("location: study-buddies?error=user-not-found.php");
    exit;
}