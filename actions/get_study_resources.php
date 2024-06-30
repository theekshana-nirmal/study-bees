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

    // Query to get study_resources for this subject (resource_id	subject_id	title	description	link)
    $resources_query = "
        SELECT r.resource_id, r.subject_id, r.title, r.description, r.link
        FROM study_resources r
        WHERE r.subject_id = '$subject_id';";
    
    $resources_result = mysqli_query($conn, $resources_query);

    // Check if there are any resources
    if (mysqli_num_rows($resources_result) > 0) {
        $resources = array();
        while ($row = mysqli_fetch_assoc($resources_result)) {
            $resources[] = $row;
        }
    } else {
        $resources = array();
    }

} else {
    echo "Subject not found: " . htmlspecialchars($subject_name);
}

mysqli_close($conn);

?>