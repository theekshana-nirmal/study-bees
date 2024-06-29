<?php
include '../includes/db_connect.php';

// SQL query to get the weak subjects of the user
$sql = "SELECT subjects.subject_name 
        FROM user_weak_subjects 
        JOIN subjects ON user_weak_subjects.subject_id = subjects.subject_id 
        WHERE user_weak_subjects.user_id = $user_id";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $weak_subjects = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $weak_subjects[] = $row['subject_name'];
    }

    // Store weak subjects in session
    $_SESSION['weak_subjects'] = $weak_subjects;
}

// SQL query to get the strong subjects of the user
$sql = "SELECT subjects.subject_name 
        FROM user_strong_subjects 
        JOIN subjects ON user_strong_subjects.subject_id = subjects.subject_id 
        WHERE user_strong_subjects.user_id = $user_id";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $strong_subjects = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $strong_subjects[] = $row['subject_name'];
    }

    // Store strong subjects in session
    $_SESSION['strong_subjects'] = $strong_subjects;
}


?>
