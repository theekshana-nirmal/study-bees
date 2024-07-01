<?php
session_start();
include '../includes/db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone_number = mysqli_real_escape_string($conn, $_POST['phone_number']);
    $user_id = $_SESSION['user_id'];

    //Check password
    if (isset($_POST['password']) && isset($_POST['confirm_password']) && $_POST['password'] != $_POST['confirm_password']) {
        $message = "❌ Oops! The passwords don't match. Please try again.";
        $_SESSION['message'] = $message;
        header("Location: ../user/edit-profile.php?error=profile_update_failed");
        exit();
    } else {
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $password_hashed = password_hash($password, PASSWORD_DEFAULT); // Hashing the password
    }

    //  Update basic User data in the database
    $sql = "UPDATE users SET first_name = '$first_name', last_name = '$last_name', email = '$email', phone_number = '$phone_number', psw = '$password_hashed' WHERE user_id = '$user_id'";

    if (mysqli_query($conn, $sql)) {
    } else {
        $message = "😞 Oh no! Profile update failed. Please try again.";
        $_SESSION['message'] = $message;
        header("Location: ../user/edit-profile.php?error=profile_update_failed");
        exit();
    }

    // Handling weak subjects
    $sql_delete = "DELETE FROM user_weak_subjects WHERE user_id = '$user_id'";
    $sql_delete_strong = "DELETE FROM user_strong_subjects WHERE user_id = '$user_id'";
    if (mysqli_query($conn, $sql_delete) && mysqli_query($conn, $sql_delete_strong)) {
        if (!empty($_POST['weak_subjects'])) {
            // Get weak subjects from the form
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
                } else {
                    $message = "😞 Oh no! Profile update failed. Please try again.";
                    $_SESSION['message'] = $message;
                    header("Location: ../user/edit-profile.php?error=profile_update_failed");
                    exit();
                }
            }

            // Insert strong subjects based on weak subjects
            $sql_strong = "INSERT INTO user_strong_subjects (user_id, subject_id)
                                SELECT '$user_id', subject_id
                                FROM subjects
                                WHERE subject_id NOT IN (SELECT subject_id FROM user_weak_subjects WHERE user_id = '$user_id')";
            if (mysqli_query($conn, $sql_strong)) {
            } else {
                $message = "😞 Oh no! Profile update failed. Please try again.";
                $_SESSION['message'] = $message;
                header("Location: ../user/edit-profile.php?error=profile_update_failed");
                exit();
            }
        }

        //Profile picture upload
        // Get information about the uploaded file
        $image = $_FILES['profile_picture'];

        // Check if image was uploaded
        if (isset($image) && $image['error'] === 0) {

            // Get image details
            $imageName = $image['name'];
            $imageTmpName = $image['tmp_name'];
            $imageSize = $image['size'];
            $imageError = $image['error'];

            // Allowed image extensions
            $allowedExtensions = array('jpg', 'jpeg', 'png', 'gif');

            // Extract image extension
            $imageExtension = explode('.', $imageName);
            $imageExtension = strtolower(end($imageExtension));

            // Validate image extension
            if (!in_array($imageExtension, $allowedExtensions)) {
                $message = "😞 Invalid image file! Please upload a jpg, jpeg, png, or gif.";
                $_SESSION['message'] = $message;
                header("Location: ../user/edit-profile.php?error=profile_update_failed");
                exit();
            }

            // Validate image size (optional)
            if ($imageSize > 20048576) { // 20 MB
                $message = "😞 Image size too large! Max 20 MB allowed.";
                $_SESSION['message'] = $message;
                header("Location: ../user/edit-profile.php?error=profile_update_failed");
                exit();
            }

            // Create a new unique filename (optional)
            $newImageName = uniqid('', true) . '.' . $imageExtension;

            // Specify the destination folder for uploaded image
            $destination = '../user/uploads/profile-picture/' . $newImageName;

            // Move the uploaded file to the destination folder
            if (move_uploaded_file($imageTmpName, $destination)) {
                // Update the profile picture in the database
                $sql = "UPDATE users SET profile_picture = '$destination' WHERE user_id = '$user_id'";
                if (mysqli_query($conn, $sql)) {
                    $_SESSION['profile_picture'] = $destination;

                    //SUCCESS MESSAGE
                    $message = "👏 Success! Profile updated successfully! Looking good! 😄";
                    $_SESSION['message'] = $message;
                    header("location: ../user/profile.php?success=profile_updated");
                    exit();
                } else {
                    $message = "😞 Oh no! Profile update failed. Please try again.";
                    $_SESSION['message'] = $message;
                    header("Location: ../user/edit-profile.php?error=profile_update_failed");
                    exit();
                }
            } else {
                $message = "😞 Oh no! Profile update failed. Please try again.";
                $_SESSION['message'] = $message;
                header("Location: ../user/edit-profile.php?error=profile_update_failed");
                exit();
            }
        } else {
            $message = "👏 Success! Profile updated successfully! Looking good! 😄";
            $_SESSION['message'] = $message;
            header("location: ../user/profile.php?success=profile_updated");
            exit();
        }
    }
}
mysqli_close($conn);
