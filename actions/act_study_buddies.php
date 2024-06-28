<?php

// Check if 'subject_name' is set in the URL query parameters
if (isset($_GET['subject_name'])) {
    $subjectName = urldecode($_GET['subject_name']);
    $_SESSION['subject_name'] = $subjectName;
} else {
    header("location: profile.php");
    exit;
}

?>
