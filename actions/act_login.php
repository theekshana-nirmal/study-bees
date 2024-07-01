<?php

session_start();
include '../includes/db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];

    // Check if user exists
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $user_id = $row['user_id'];
        $hashed_password = $row['psw'];
        $first_name = $row['first_name'];
        $last_name = $row['last_name'];
        $profile_picture = $row['profile_picture'];
        $phone_number = $row['phone_number'];


        // Verify password
        if (password_verify($password, $hashed_password)) {
            // Password is correct, start session
            $_SESSION['user_id'] = $user_id;
            $_SESSION['email'] = $email;
            $_SESSION['first_name'] = $first_name;
            $_SESSION['last_name'] = $last_name;
            $_SESSION['full_name'] = $first_name . " " . $last_name;
            $_SESSION['profile_picture'] = $profile_picture;
            $_SESSION['phone_number'] = $phone_number;
            $_SESSION['profile_picture'] = $profile_picture;
            
            $_SESSION['loggedin'] = true;

            // Redirect to the profile page
            header("Location: ../user/profile.php");
            exit();
        } else {
            // Invalid password
            $message = "🚫 Oops! Invalid email or password. Please try again. If you don't have an account, please <a href='register.php' class='txt-color-primary'>sign up here</a> to join our community!";
            $_SESSION['message'] = $message;
            header("Location: ../auth/login.php?error=InvalidPassword");
            exit();
        }
    } else {
        // No user found with that email
        $message = "🔍 User not found! If you don't have an account, please <a href='register.php' class='txt-color-primary'>sign up here</a> to get started!";
        $_SESSION['message'] = $message;
        header("Location: ../auth/login.php?error=UserNotFound");
        exit();
    }
}

mysqli_close($conn);

?>