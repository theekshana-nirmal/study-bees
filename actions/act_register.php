<?php
session_start();
include '../includes/db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone_number = mysqli_real_escape_string($conn, $_POST['phone_number']);

    //Check password
    if (isset($_POST['password']) && isset($_POST['confirm_password']) && $_POST['password'] != $_POST['confirm_password']) {
        echo "Passwords do not match.";
        exit();
    } else {
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $password_hashed = password_hash($password, PASSWORD_DEFAULT); // Hashing the password
        
        // Insert user into the database
        $sql = "INSERT INTO users (first_name, last_name, email, phone_number, psw)
                VALUES ('$first_name', '$last_name', '$email', '$phone_number', '$password_hashed')";
    
        if (mysqli_query($conn, $sql)) {
            $user_id = mysqli_insert_id($conn); // Get the last inserted user ID
    
            // Handling weak subjects
            if (!empty($_POST['weak_subjects'])) {
                $weak_subjects = $_POST['weak_subjects'];
                foreach ($weak_subjects as $subject_id) {
                    $subject_id = intval($subject_id); // Ensuring subject_id is an integer
                    $sql_weak = "INSERT INTO user_weak_subjects (user_id, subject_id)
                                 VALUES ('$user_id', '$subject_id')";
                    mysqli_query($conn, $sql_weak);
                }
    
                // Insert strong subjects based on weak subjects
                $sql_strong = "INSERT INTO user_strong_subjects (user_id, subject_id)
                               SELECT '$user_id', subject_id
                               FROM subjects
                               WHERE subject_id NOT IN (SELECT subject_id FROM user_weak_subjects WHERE user_id = '$user_id')";
    
                mysqli_query($conn, $sql_strong);
            } else {
                echo "Please select at least one subject";
            }
    
            //If Registration is successful! the redirect to login page with saved session
            $_SESSION["registered"] = true;
            if (isset($_SESSION["registered"]) || $_SESSION["registered"] == true) {
                $message = "Congratulations! 🎉 You've joined the Study Bees platform! Log in and partner up with fellow learners to achieve your academic goals together! 💡🤓";
                $_SESSION['message'] = $message;
                header("location: ../auth/login.php?success=registration_successful");
                exit;
            }
        } else {
            //If Registration is not successful! the redirect to register page with error message
            $message = "😞 Uh-oh! Something went wrong. Please try registering again and be part of our learning family! 🌟";
            $_SESSION['message'] = $message;
            header("location: ../auth/register.php?error=registration_failed");
            exit;
        }
    }

}

mysqli_close($conn);


?>