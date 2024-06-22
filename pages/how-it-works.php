<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/images/logo/favicon-32x32.png">

    <!-- Styles -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/css/how-it-works.css">

    <title>Study Bees</title>
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
                <a href="#">Log in</a>
                <a href="#" class="btn-primary">Register</a>
            </nav>
        </div>
    </header>

    <!-- TITLE SECTION -->
    <div class="title-row">
        <div class="container">
            <a href="../index.php">
                <i class="icon-home"></i>
            </a>
            <h1 class="title">How it Works</h1>
            <div class="spacer"></div>
        </div>
    </div>
    <!-- STEP 01 -->
    <div class="container">
        <section class="section">
            <div class="column-text">
                <h1><span class="txt-color-primary">Step 01:</span><br> Sign Up and Customize Your Profile</h1>
                <p>
                    When you sign up, customize your profile by selecting the subjects you excel in and those you need assistance with. This helps other students understand your strengths and areas where you seek support. Your personalized profile on Study Bees is the key to finding the perfect study partner who complements your skills and can assist you in areas where you may need help.
                </p>
            </div>
            <div class="column-image">
                <img src="../assets/images/how-it-works/how-it-works-1.png" alt="Hero Section Image">
            </div>
        </section>
    </div>

    <!-- STEP 02 -->
    <div class="container">
        <section class="section">
            <div class="column-image">
                <img src="../assets/images/how-it-works/how-it-works-2.png" alt="Hero Section Image">
            </div>
            <div class="column-text">
                <h1><span class="txt-color-primary">Step 02:</span><br> Browse Profiles by Subjects</h1>
                <p>
                    With your profile set up, you can start browsing through the profiles of other students based on the subjects they excel in. Since users specify their strengths when creating their profiles, you can easily find peers who are proficient in the subjects you need assistance with. This targeted search ensures you connect with study partners who can provide valuable support in your areas of study.
                </p>
            </div>
        </section>
    </div>

    <!-- STEP 03 -->
    <div class="container">
        <section class="section">
            <div class="column-text">
                <h1><span class="txt-color-primary">Step 03:</span><br> Connect and Collaborate</h1>
                <p>
                    When you find a potential study partner, view their contact information and reach out to introduce yourself. Discuss your study goals and how you can support each other. Study Bees makes it easy to connect with like-minded students, ensuring a collaborative and motivating study experience. Join Study Bees today and enhance your learning journey!
                </p>
            </div>
            <div class="column-image">
                <img src="../assets/images/how-it-works/how-it-works-3.png" alt="Hero Section Image">
            </div>
        </section>
    </div>

    <!-- CALL TO ACTION SECTION -->
    <?php
    $cta_image_path = '../assets/images/home-cta.png';
    include 'cta-section.php';
    ?>

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