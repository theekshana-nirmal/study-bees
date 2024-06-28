<?php
include '../includes/db_connect.php';

// Initialize the array to store the user's weak subjects
$user_weak_subjects = array();

// SQL query to fetch user's weak subjects
$sql = "SELECT subject_name FROM subjects 
        INNER JOIN user_weak_subjects ON subjects.subject_id = user_weak_subjects.subject_id 
        WHERE user_weak_subjects.user_id = $user_id";

// Execute the query
$result = mysqli_query($conn, $sql);

// Check if the query was successful
if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $user_weak_subjects[] = $row['subject_name'];
    }
}

// All subjects list
$subjects = array(
    'Mathematics',
    'Science',
    'English Language',
    'ICT',
    'Sinhala Language',
    'Tamil Language',
    'History',
    'Geography',
    'Business Studies',
    'Civic Education'
);

// Loop through each subject to create checkboxes
foreach ($subjects as $subject) {
    $checked = '';

    // Check if the subject is in the user's weak subjects array
    if (in_array($subject, $user_weak_subjects)) {
        $checked = 'checked';
    }

    // Output the checkbox and label
    echo '<div class="subject-select-box">';
    echo '<input type="checkbox" id="' . htmlspecialchars($subject) . '" name="subjects[]" value="' . htmlspecialchars($subject) . '" ' . $checked . '>';
    echo '<label for="' . htmlspecialchars($subject) . '">' . htmlspecialchars($subject) . '</label>';
    echo '</div>';
}