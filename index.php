<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/logo/favicon-32x32.png">

    <!-- Styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/carousel.css">


    <title>Study Bees</title>
</head>

<body>
    <!-- NAVIGATION BAR -->
    <?php
    $navbar_logo_image_path = 'assets/images/logo/logo-primary.png';
    $registration_page_path = 'auth/register.php';
    $login_page_path = 'auth/login.php';

    include 'includes/header.php';
    ?>

    <!-- HERO SECTION -->
    <section class="hero-section">
        <div class="container">
            <div class="column-left">
                <div>
                    <h1><span class="txt-color-primary">Together</span><br> We Learn Better</h1>
                    <p>
                        Study Bees is a platform designed to help students find study partners. Whether you're struggling with a difficult subject or simply want to collaborate with like-minded individuals, Study Bees is here to connect you with the right study partner. Our platform provides a safe and convenient way to find study buddies who can support and motivate you on your academic journey. Join Study Bees today and unlock the power of collaborative learning.
                    </p>
                </div>
                <a href="auth/register.php" class="btn-secondary">Join Now</a>
            </div>
            <div class="column-right">
                <img src="assets/images/home-1.png" alt="Hero Section Image">
            </div>
        </div>
    </section>

    <!-- HOW IT WORKS SECTION -->
    <section class="how-it-works-section">
        <div class="row-top">
            <h1>How it Works</h1>
        </div>
        <div class="container">
            <div class="row-bottom">
                <div class="column-left">
                    <img src="assets/images/home-2.png" alt="How it Works Image">
                </div>
                <div class="column-right">
                    <p>
                        Discover how Study Bees makes finding study partners easy! Whether you need help with a tough subject or want to stay motivated, Study Bees is here to support your academic journey. Here's how our platform works:
                    </p>
                    <a href="pages/how-it-works.php">Read more <i class="icon-angle-double-right"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- TESTIMONIALS SECTION -->
    <section class="testimonials-section">
        <div class="container">
            <div class="row-top">
                <h1>Success Stories</h1>
            </div>
            <div class="row-bottom">

                <!-- Carousel Goes Here-->
                <div class="carousel">
                    <a class="prev">
                        <i class="icon-angle-circled-left"></i>
                    </a>
                    <div class="carousel-track-container">
                        <!-- Cards -->
                        <div class="carousel-track">
                            <!-- Card -->
                            <div class="carousel-card card">
                                <img src="assets/images/carousel/user1.png" alt="User Photo">
                                <div>
                                    <h2>User Name</h2>
                                    <p>
                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut quidem laudantium architecto facilis culpa tenetur.
                                    </p>
                                </div>
                            </div>

                            <!-- Card -->
                            <div class="carousel-card card">
                                <img src="assets/images/carousel/user1.png" alt="User Photo">
                                <div>
                                    <h2>User Name</h2>
                                    <p>
                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut quidem laudantium architecto facilis culpa tenetur.
                                    </p>
                                </div>
                            </div>

                            <!-- Card -->
                            <div class="carousel-card card">
                                <img src="assets/images/carousel/user1.png" alt="User Photo">
                                <div>
                                    <h2>User Name</h2>
                                    <p>
                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut quidem laudantium architecto facilis culpa tenetur.
                                    </p>
                                </div>
                            </div>

                            <!-- Card -->
                            <div class="carousel-card card">
                                <img src="assets/images/carousel/user1.png" alt="User Photo">
                                <div>
                                    <h2>User Name</h2>
                                    <p>
                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut quidem laudantium architecto facilis culpa tenetur.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="next">
                        <i class="icon-angle-circled-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <script src="assets/js/carousel.js"></script>

    <!-- CALL TO ACTION SECTION -->
    <?php
    $cta_image_path = 'assets/images/home-cta.png';
    include 'includes/cta-section.php';
    ?>

    <!-- FOOTER BAR -->
    <?php
    $footer_logo_image_path = 'assets/images/logo/logo-light.png';

    $home_page_path = 'index.php';
    $about_us_page_path = 'pages/about-us.php';
    $how_it_works_page_path = 'pages/how-it-works.php';
    $contact_us_page_path = 'pages/about-us.php#contact-us';

    include 'includes/footer.php';
    ?>
</body>

</html>