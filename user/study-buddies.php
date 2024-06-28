<?php
    //Start the session
    session_start();
    require_once "config.php";

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
    <link rel="stylesheet" href="../assets/css/study-buddies.css">

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
                <a href="../auth/logout.php" class="btn-danger"><i class="icon-logout"></i> Log out</a>
                <a href="profile.php" class="profile-link">
                    <h2>User Name</h2>
                    <img src="../assets/images/default-profile//default-profile-picture.png" alt="Profile Picture" class="profile-picture">
                </a>
            </nav>
        </div>
    </header>

    <!-- TITLE SECTION -->
    <div class="title-row">
        <div class="container">
            <a href="profile.php">
                <i class="icon-left-open"></i>
            </a>
            <h1 class="title">Subject Name</h1>
            <div class="spacer"></div>
        </div>
    </div>

    <!-- Show Results -->
    <div class="study-buddies-page">
        <div class="container">
            <div class="study-buddies-layout">
                <!-- Left Column -->
                <div class="card study-buddies-section">
                    <div class="group-title">
                        <p>Study Buddies</p>
                    </div>
                    <div class="result-wrapper">
                        <!-- Results -->
                        <div class="card study-buddy">
                            <img src="../assets/images/default-profile/default-profile-picture.png" alt="User Photo">
                            <div class="profile-details">
                                <h2>User Name</h2>
                                <a href="profile.php" class="btn-primary"> <i class="icon-eye"></i> View Profile</a>
                            </div>
                        </div>

                        <div class="card study-buddy">
                            <img src="../assets/images/default-profile/default-profile-picture.png" alt="User Photo">
                            <div class="profile-details">
                                <h2>User Name</h2>
                                <a href="profile.php" class="btn-primary"> <i class="icon-eye"></i> View Profile</a>
                            </div>
                        </div>

                        <div class="card study-buddy">
                            <img src="../assets/images/default-profile/default-profile-picture.png" alt="User Photo">
                            <div class="profile-details">
                                <h2>User Name</h2>
                                <a href="profile.php" class="btn-primary"> <i class="icon-eye"></i> View Profile</a>
                            </div>
                        </div>

                        <div class="card study-buddy">
                            <img src="../assets/images/default-profile/default-profile-picture.png" alt="User Photo">
                            <div class="profile-details">
                                <h2>User Name</h2>
                                <a href="profile.php" class="btn-primary"> <i class="icon-eye"></i> View Profile</a>
                            </div>
                        </div>

                        <div class="card study-buddy">
                            <img src="../assets/images/default-profile/default-profile-picture.png" alt="User Photo">
                            <div class="profile-details">
                                <h2>User Name</h2>
                                <a href="profile.php" class="btn-primary"> <i class="icon-eye"></i> View Profile</a>
                            </div>
                        </div>

                        <div class="card study-buddy">
                            <img src="../assets/images/default-profile/default-profile-picture.png" alt="User Photo">
                            <div class="profile-details">
                                <h2>User Name</h2>
                                <a href="profile.php" class="btn-primary"> <i class="icon-eye"></i> View Profile</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Column -->
                <div class="card study-materials-section">
                    <div class="group-title">
                        <p>Study Materials</p>
                    </div>
                    <div class="result-wrapper">
                        <!-- Results -->
                        <div class="card study-material">
                            <div class="material-details">
                                <h2>Study Material Title</h2>
                                <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus dicta ad nisi, natus ipsum</P>
                            </div>
                            <a href="#" target="_blank" class="btn-primary"><i class="icon-angle-double-right"></i></a>
                        </div>

                        <div class="card study-material">
                            <div class="material-details">
                                <h2>Study Material Title</h2>
                                <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus dicta ad nisi, natus ipsum</P>
                            </div>
                            <a href="#" target="_blank" class="btn-primary"><i class="icon-angle-double-right"></i></a>
                        </div>

                        <div class="card study-material">
                            <div class="material-details">
                                <h2>Study Material Title</h2>
                                <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus dicta ad nisi, natus ipsum</P>
                            </div>
                            <a href="#" target="_blank" class="btn-primary"><i class="icon-angle-double-right"></i></a>
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