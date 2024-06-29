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
                header("location: edit_profile.php?message=edit_profile_failed");
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
                echo "Error: Please select an image file - jpg, jpeg, png, gif allowed";
                exit();
            }

            // Validate image size (optional)
            if ($imageSize > 1048576) { // 1 MB
                echo "Error: Image size is too large (Max 1 MB)";
                exit();
            }

            // Create a new unique filename (optional)
            $newImageName = uniqid('', true) . '.' . $imageExtension;

            // Specify the destination folder for uploaded image
            $destination = '../user/uploads/profile-picture/' . $newImageName;

            // Move the uploaded file to the destination folder
            if (move_uploaded_file($imageTmpName, $destination)) {
                echo "Image uploaded successfully!";
                // Update the profile picture in the database
                $sql = "UPDATE users SET profile_picture = '$destination' WHERE user_id = '$user_id'";
                if (mysqli_query($conn, $sql)) {
                    echo "Profile picture updated successfully";
                    $_SESSION['profile_picture'] = $destination;
                    header("location: ../user/profile.php?message=profile_updated");
                    exit();
                } else {
                    echo "Error updating profile picture: " . mysqli_error($conn);
                }
            } else {
                echo "Error: There was a problem uploading the image.";
            }
        } else {
            echo "Error: No image uploaded!";
        }
    }
}
mysqli_close($conn);
