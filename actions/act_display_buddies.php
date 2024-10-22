<?php

// Display the users
$user_id = $_SESSION['user_id'];

if (!empty($users)) {
    foreach ($users as $user) {
        //Hide the  logged in user form the results
        if ($user['user_id'] == $user_id) {
            $visibility = "remove-item";
        }else{
            $visibility = "show-item";
        }

        //Display the users
        echo "<div class="."card study-buddy $visibility".">";
        echo "<img src='" . htmlspecialchars($user['profile_picture']) . "' alt='Profile Picture' class='profile-picture-medium'>";
        echo "<div class='profile-details'>";
        echo "<h2>" . htmlspecialchars($user['first_name']) . " " . htmlspecialchars($user['last_name']) . "</h2>";
        echo "<a href='member_info.php?member_id=" . $user['user_id'] . "'" . "class='btn-primary'> <i class='icon-eye'></i> View Profile</a>";
        echo "</div></div>";
    }
} else {
    echo "<p>No users found with the strong subject: " . htmlspecialchars($subject_name) . "</p>";
}