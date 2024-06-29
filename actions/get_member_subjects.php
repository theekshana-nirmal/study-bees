<?php
include '../includes/db_connect.php';

// SQL query to get the weak subjects of the user
$sql_weak = "SELECT subjects.subject_name 
        FROM user_weak_subjects 
        JOIN subjects ON user_weak_subjects.subject_id = subjects.subject_id 
        WHERE user_weak_subjects.user_id = $member_id";

$result_weak = mysqli_query($conn, $sql_weak);

if (mysqli_num_rows($result_weak) > 0) {
    $member_weak_subjects = array();
    while ($row = mysqli_fetch_assoc($result_weak)) {
        $member_weak_subjects[] = $row['subject_name'];
    }

    // Store weak subjects in session
    $_SESSION['member_weak_subjects'] = $member_weak_subjects;
}

// SQL query to get the strong subjects of the user
$sql_strong = "SELECT subjects.subject_name 
        FROM user_strong_subjects 
        JOIN subjects ON user_strong_subjects.subject_id = subjects.subject_id 
        WHERE user_strong_subjects.user_id = $member_id";

$result = mysqli_query($conn, $sql_strong);

if (mysqli_num_rows($result) > 0) {
    $member_strong_subjects = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $member_strong_subjects[] = $row['subject_name'];
    }

    // Store strong subjects in session
    $_SESSION['member_strong_subjects'] = $member_strong_subjects;
}


?>
