<?php
session_start();
include '../includes/db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone_number = mysqli_real_escape_string($conn, $_POST['phone_number']);
    $user_id = $_SESSION['user_id'];

    echo $first_name . "<br>";
    echo $last_name . "<br>";
    echo $email . "<br>";
    echo $phone_number . "<br>";
    echo $user_id . "<br>";

    //Check password
    if (isset($_POST['password']) && isset($_POST['confirm_password']) && $_POST['password'] != $_POST['confirm_password']) {
        echo "Passwords do not match.";
        exit();
    } else {
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $password_hashed = password_hash($password, PASSWORD_DEFAULT); // Hashing the password
        echo "Hashed password = " . $password_hashed . "<br>";
    }

    //  Update basic User data in the database
    $sql = "UPDATE users SET first_name = '$first_name', last_name = '$last_name', email = '$email', phone_number = '$phone_number', psw = '$password_hashed' WHERE user_id = '$user_id'";

    if (mysqli_query($conn, $sql)) {
        echo "Record updated successfully" . "<br>";
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }

    // Handling weak subjects
    $sql_delete = "DELETE FROM user_weak_subjects WHERE user_id = '$user_id'";
    $sql_delete_strong = "DELETE FROM user_strong_subjects WHERE user_id = '$user_id'";
    if (mysqli_query($conn, $sql_delete) && mysqli_query($conn, $sql_delete_strong)) {
        if (!empty($_POST['weak_subjects'])) {
            $weak_subjects = $_POST['weak_subjects'];
            // Loop through each weak subject
            foreach ($weak_subjects as $subject_name) {
                //get subject id from subject name
                $sql_subject_id = "SELECT subject_id FROM subjects WHERE subject_name = '$subject_name'";
                $result = mysqli_query($conn, $sql_subject_id);
                $row = mysqli_fetch_assoc($result);
                $subject_id = $row['subject_id'];

                // Insert weak subjects
                $sql_weak = "INSERT INTO user_weak_subjects (user_id, subject_id)
                                  VALUES ('$user_id', '$subject_id')";
                if (mysqli_query($conn, $sql_weak)) {
                    echo "Weak subjects inserted successfully" . "<br>";
                } else {
                    echo "Error inserting weak subjects: " . mysqli_error($conn);
                }
            }
            
            // Insert strong subjects based on weak subjects
            $sql_strong = "INSERT INTO user_strong_subjects (user_id, subject_id)
                                SELECT '$user_id', subject_id
                                FROM subjects
                                WHERE subject_id NOT IN (SELECT subject_id FROM user_weak_subjects WHERE user_id = '$user_id')";
            if (mysqli_query($conn, $sql_strong)) {
                echo "Strong subjects inserted successfully" . "<br>";
            } else {
                echo "Error inserting strong subjects: " . mysqli_error($conn);
            }
        
        //GO to profile page with success message
        header("location: ../user/profile.php?message=edit_profile_success");
        exit();

        } else {
            echo "Error deleting existing records: " . mysqli_error($conn);
        }
    }
}
mysqli_close($conn);
