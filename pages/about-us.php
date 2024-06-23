<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/images/logo/favicon-32x32.png">

    <!-- Styles -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/css/about-us.css">

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
            <h1 class="title">About Us</h1>
            <div class="spacer"></div>
        </div>
    </div>

    <!-- ABOUT US -->
    <div class="about-us-main-section">
        <div class="container">
            <section class="section">
                <div class="row-text">
                    <h1>From <span class="txt-color-primary">Students,</span> For <span class="txt-color-primary">Students:</span> <br>A Collaborative Effort!</h1>
                    <p>
                        We're a passionate group of five, 1st year BICT undergraduate students at Uva Wellassa University, Sri Lanka. We've created this platform to help students connect with ideal study partners. This project is our collaborative effort to foster a supportive learning community as part of our group assignment. We hope this website helps students find the perfect study partners to succeed!
                    </p>
                </div>
                <div class="row-image">
                    <img src="../assets/images/about-us/about-us-1.png" alt="About Us Section Image">
                </div>
            </section>
        </div>
    </div>

    <!-- OUR TEAM SECTION -->
    <div class="container">
        <section class="section">
            <div class="row-text">
                <h1><span class="txt-color-primary">Our Team</span></h1>
            </div>
            <div class="cards">
                <div class="card">
                    <img src="../assets/images/about-us/user1.png" alt="User Photo">
                    <div>
                        <h2>G. Nimna Kshithija</h2>
                        <p>
                            UWU/ICT/22/032
                        </p>
                    </div>
                </div>
                <div class="card">
                    <img src="../assets/images/about-us/user1.png" alt="User Photo">
                    <div>
                        <h2>T.A. Vithanage</h2>
                        <p>
                            UWU/ICT/22/036
                        </p>
                    </div>
                </div>
                <div class="card">
                    <img src="../assets/images/about-us/user1.png" alt="User Photo">
                    <div>
                        <h2>K.A. Sajani Nimeshika</h2>
                        <p>
                            UWU/ICT/22/046
                        </p>
                    </div>
                </div>
                <div class="card">
                    <img src="../assets/images/about-us/user1.png" alt="User Photo">
                    <div>
                        <h2>D.M. Janith Navodya Dasanayaka</h2>
                        <p>
                            UWU/ICT/22/061
                        </p>
                    </div>
                </div>
                <div class="card">
                    <img src="../assets/images/about-us/user1.png" alt="User Photo">
                    <div>
                        <h2>P.G. Theekshana Nirmal Bandara</h2>
                        <p>
                            UWU/ICT/22/082
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <hr>
    <!-- CONTACT US SECTION -->
    <div class="contact-us-section" id="contact-us">
        <div class="row-text">
            <h1><span class="txt-color-primary">CONTACT US</span></h1>
        </div>
        <div class="container">
            <form action="#" method="POST">
                <div class="input-group">
                    <label>Name</label>
                    <input type="text" name="name">
                </div>
                <div class="input-group">
                    <label>Email<span class="txt-color-danger">*</span></label>
                    <input type="email" name="email" required>
                </div>
                <div class="input-group">
                    <label>Message<span class="txt-color-danger">*</span></label>
                    <textarea name="message" rows="5"></textarea>
                </div>
                <button type="submit" class="btn-primary">Send</button>
            </form>
        </div>
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
    $about_us_page_path = '#';
    $how_it_works_page_path = 'how-it-works.php';
    $contact_us_page_path = '#contact-us';

    include 'footer.php';
    ?>
</body>

</html>