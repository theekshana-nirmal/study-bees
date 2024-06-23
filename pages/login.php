<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/images/logo/favicon-32x32.png">

    <!-- Styles -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/reset.css">

    <title>Study Bees</title>
</head>

<body>
    <!-- NAVIGATION BAR -->
    <?php
    $navbar_logo_image_path = '../assets/images/logo/logo-primary.png';
    $registration_page_path = 'register.php';
    $login_page_path = 'login.php';

    include 'header.php';
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


    <!-- FOOTER BAR -->
    <?php
    $footer_logo_image_path = '../assets/images/logo/logo-light.png';

    $home_page_path = '../index.php';
    $about_us_page_path = 'about-us.php';
    $how_it_works_page_path = '#';
    $contact_us_page_path = 'about-us.php#contact-us';

    include 'footer.php';
    ?>
</body>

</html>