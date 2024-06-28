<?php
    //Start the session
    session_start();
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
                <a href="../auth/login.php" class="btn-danger"><i class="icon-logout"></i> Log out</a>
                <a href="profile.php" class="profile-link">
                    <h2>User Name</h2>
                    <img src="../assets/images/default-profile//default-profile-picture.png" alt="Profile Picture" class="profile-picture">
                </a>
            </nav>
        </div>
    </header>

    <!-- User Profile -->
    <div class="profile-page">
        <div class="container">
            <div class="profile-page-layout">
                <!-- Left Column -->
                <div class="user-details-section">
                    <div class="card user-details">
                        <div class="user-pic-and-name">
                            <div class="profile-picture">
                                <img src="../assets/images/default-profile/default-profile-picture.png" alt="Profile Picture">
                            </div>
                            <div class="user-name">
                                <h2>User Name</h2>
                            </div>
                        </div>
                        <div class="user-buttons">
                            <a href="edit-profile.php" class="btn-primary"><i class="icon-cog"></i> Edit Profile</a>
                            <a href="../auth/login.php" class="btn-danger"><i class="icon-logout"></i> Log out</a>
                        </div>
                        <div class="user-contact-details">
                            <div class="user-email">
                                <h3><i class="icon-mail-alt"></i> Email:</h3>
                                <p>user@email.com</p>
                            </div>
                            <div class="user-phone">
                                <h3><i class="icon-phone-squared"></i> Phone:</h3>
                                <p>1234567890</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Right Column -->
                <div class="subject-groups-section">
                    <!-- Weak Subjects -->
                    <div class="card subject-group">
                        <div class="group-title">
                            <p>Weak Subjects</p>
                        </div>
                        <div class="subjects">
                            <a href="study-buddies.php" class="btn-primary">Subject Name</a>
                            <a href="study-buddies.php" class="btn-primary">Subject Name</a>
                            <a href="study-buddies.php" class="btn-primary">Subject Name</a>
                            <a href="study-buddies.php" class="btn-primary">Subject Name</a>
                            <a href="study-buddies.php" class="btn-primary">Subject Name</a>
                        </div>
                    </div>

                    <!-- Strong Subjects -->
                    <div class="card subject-group">
                        <div class="group-title">
                            <p>Strong Subjects</p>
                        </div>
                        <div class="subjects">
                            <a href="study-buddies.php" class="btn-primary">Subject Name</a>
                            <a href="study-buddies.php" class="btn-primary">Subject Name</a>
                            <a href="study-buddies.php" class="btn-primary">Subject Name</a>
                            <a href="study-buddies.php" class="btn-primary">Subject Name</a>
                            <a href="study-buddies.php" class="btn-primary">Subject Name</a>
                        </div>
                    </div>
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