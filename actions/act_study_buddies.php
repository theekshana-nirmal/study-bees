<?php

include '../includes/db_connect.php';

// Check if 'subject_name' is set in the URL query parameters
if (isset($_GET['subject_name'])) {
    $subject_name = urldecode($_GET['subject_name']);
    $_SESSION['subject_name'] = $subject_name;
} else {
    header("location: profile.php");
    exit;
}


// Query to get the subject ID based on subject name
$subject_query = "SELECT subject_id FROM subjects WHERE subject_name = '$subject_name'";
$subject_result = mysqli_query($conn, $subject_query);

if (mysqli_num_rows($subject_result) > 0) {
    $subject_row = mysqli_fetch_assoc($subject_result);
    $subject_id = $subject_row['subject_id'];

    // Query to get users who have this subject as a strong subject
    $users_query = "
        SELECT u.user_id, u.first_name, u.last_name, u.email, u.phone_number, u.profile_picture 
        FROM users u
        JOIN user_strong_subjects uss ON u.user_id = uss.user_id
        WHERE uss.subject_id = '$subject_id'
    ";
    $users_result = mysqli_query($conn, $users_query);

    if (mysqli_num_rows($users_result) > 0) {
        $users = array();
        while ($row = mysqli_fetch_assoc($users_result)) {
            $users[] = $row;
        }
    } else {
        $users = array();
    }
} else {
    echo "Subject not found: " . htmlspecialchars($subject_name);
}

mysqli_close($conn);

?>
