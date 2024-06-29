<?php
//Start the session
session_start();
$user_id = $_SESSION['user_id'];
$email = $_SESSION['email'];
$first_name = $_SESSION['first_name'];
$last_name = $_SESSION['last_name'];
$_SESSION['full_name'] = $first_name . " " . $last_name;
$full_name = $_SESSION['full_name'];
$profile_picture = $_SESSION['profile_picture'];
$phone_number = $_SESSION['phone_number'];

//Check if the user is logged in, if not then redirect to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: ../auth/login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/images/logo/favicon-32x32.png">

    <!-- Styles -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/css/profile.css">
    <link rel="stylesheet" href="../assets/css/forms.css">
    <link rel="stylesheet" href="../assets/css/edit-profile.css">

    <title>Study Bees | <?php echo $full_name ?></title>
</head>

<body>
    <!-- NAVIGATION BAR -->
    <header class="navbar-shadow">
        <div class="container">
            <div class="logo logo-s">
                <img src="../assets/images/logo/logo-primary.png" alt="LOGO" class="logo-small">
                <h1>Study Bees</h1>
            </div>
            <nav>
                <a href="../auth/logout.php" class="btn-danger"><i class="icon-logout"></i> Log out</a>
                <a href="profile.php" class="profile-link">
                    <h2><?php echo $full_name ?></h2>
                    <img src="<?php echo $profile_picture ?>" alt="Profile Picture" class="profile-picture-small">
                </a>
            </nav>
        </div>
    </header>

    <!-- User Profile -->
    <div class="profile-page">
        <div class="container">
            <div class="edit-profile-page-layout">
                <!-- Left Column -->
                <div class="user-details-section">
                    <div class="card user-details">
                        <div class="user-pic-and-name">
                            <div class="profile-picture">
                                <img src="<?php echo $profile_picture ?>" alt="Profile Picture" class="profile-picture-large">
                            </div>
                            <div class="user-name">
                                <h2><?php echo $full_name; ?></h2>
                            </div>
                        </div>
                        <div class="user-buttons">
                            <a href="profile.php" class="btn-primary"><i class="icon-reply"></i> Back</a>
                            <a href="../auth/login.php" class="btn-danger"><i class="icon-logout"></i> Log out</a>
                        </div>
                        <div class="user-contact-details">
                            <div class="user-email">
                                <h3><i class="icon-mail-alt"></i> Email:</h3>
                                <p><?php echo $email; ?></p>
                            </div>
                            <div class="user-phone">
                                <h3><i class="icon-phone-squared"></i> Phone:</h3>
                                <p><?php echo $phone_number; ?></p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Column -->
                <div class="edit-user-details-section">
                    <form action="../actions/act_edit_profile.php" method="POST" class="card" enctype="multipart/form-data">
                        <div class="input-group">
                            <label>Profile Picture</label>
                            
                            <input type="file" name="profile_picture" accept="image/*">
                        </div>
                        <div class="row-group">
                            <div class="input-group">
                                <label>First Name<span class="txt-color-danger">*</span></label>
                                <input type="text" name="first_name" required value="<?php echo $first_name ?>">
                            </div>
                            <div class="input-group">
                                <label>Last Name<span class="txt-color-danger">*</span></label>
                                <input type="text" name="last_name" required value="<?php echo $last_name ?>">
                            </div>
                        </div>
                        <div class="input-group">
                            <label>Email<span class="txt-color-danger">*</span></label>
                            <input type="email" name="email" required value="<?php echo $email ?>">
                        </div>
                        <div class="input-group">
                            <label>Phone Number</label>
                            <input type="tel" name="phone_number" required value="<?php echo $phone_number ?>">
                        </div>
                        <div class="input-group">
                            <label>Password<span class="txt-color-danger">*</span></label>
                            <input type="password" name="password" required>
                        </div>
                        <div class="input-group">
                            <label>Confirm Password<span class="txt-color-danger">*</span></label>
                            <input type="password" name="confirm_password" required>
                        </div>
                        <!-- Weak Subject Select -->
                        <div class="input-group">
                            <label>Select your weak subjects</label>
                            <div class="selections">
                                <?php include '../actions/get_checkbox_data.php'; ?>
                            </div>
                        </div>
                        <div class="button-group">
                            <a href="profile.php" class="btn-secondary">Cancel</a>
                            <button type="submit" class="btn-primary" name="update_profile"><i class="icon-floppy-1"></i> Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- FOOTER BAR -->
    <?php
    $footer_logo_image_path = '../assets/images/logo/logo-light.png';

    $home_page_path = '../index.php';
    $about_us_page_path = '../pages/about-us.php';
    $how_it_works_page_path = '../pages/how-it-works.php';
    $contact_us_page_path = '../pages/about-us.php#contact-us';

    include '../includes/footer.php';
    ?>
</body>

</html>