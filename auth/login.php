<?php
    //Start the session
    session_start();
    require_once "config.php";
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
    <link rel="stylesheet" href="../assets/css/forms.css">

    <title>Study Bees</title>
</head>

<body>
    <!-- NAVIGATION BAR -->
    <?php
    $navbar_logo_image_path = '../assets/images/logo/logo-primary.png';
    $registration_page_path = 'register.php';
    $login_page_path = 'login.php';

    include '../includes/header.php';
    ?>

    <!-- TITLE SECTION -->
    <div class="title-row">
        <div class="container">
            <a href="../index.php">
                <i class="icon-home"></i>
            </a>
            <h1 class="title">Log in</h1>
            <div class="spacer"></div>
        </div>
    </div>
    
    <!-- Log in Form -->
    <div class="form-wrapper">
        <div class="container">
            <div class="card">
                <form action="#" method="POST">
                   <p class="form-heading-text">Welcome back! Access your account to stay in touch with your study community. <br> Please enter your email and password to log in.</p>
                    <hr>
                    <div class="input-group">
                        <label>Email<span class="txt-color-danger">*</span></label>
                        <input type="email" name="email" required>
                    </div>
                    <div class="input-group">
                        <label>Password<span class="txt-color-danger">*</span></label>
                        <input type="password" name="password" required>
                    </div>
                    <p class="notice-normal"><b>Note: </b>If you experience any issues logging in, please ensure your email and password are correct or <a href="../pages/about-us.php#contact-us" class="txt-color-primary">contact</a> our support team for assistance.</p>
                    <button type="submit" class="btn-primary">Log in</button>
                    <p>Don't have an account? <a href="register.php" class="txt-color-primary">Register</a></p>
                </form>
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