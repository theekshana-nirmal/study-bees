<?php
    //Start the session
    session_start();

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

    <!-- User Profile -->
    <div class="profile-page">
        <div class="container">
            <div class="edit-profile-page-layout">
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
                            <a href="profile.php" class="btn-primary"><i class="icon-reply"></i> Back</a>
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
                <div class="edit-user-details-section">
                    <form action="#" method="POST" class="card">
                        <div class="input-group">
                            <label>Profile Picture</label>
                            <input type="file" accept=".png, .jpeg, .jpg" name="profile-picture">
                        </div>
                        <div class="row-group">
                            <div class="input-group">
                                <label>First Name<span class="txt-color-danger">*</span></label>
                                <input type="text" name="f-name" required>
                            </div>
                            <div class="input-group">
                                <label>Last Name<span class="txt-color-danger">*</span></label>
                                <input type="text" name="l-name" required>
                            </div>
                        </div>
                        <div class="input-group">
                            <label>Email<span class="txt-color-danger">*</span></label>
                            <input type="email" name="email" required>
                        </div>
                        <div class="input-group">
                            <label>Phone Number</label>
                            <input type="tel" name="phone-number">
                        </div>
                        <div class="input-group">
                            <label>Password<span class="txt-color-danger">*</span></label>
                            <input type="password" name="password" required>
                        </div>
                        <div class="input-group">
                            <label>Confirm Password<span class="txt-color-danger">*</span></label>
                            <input type="password" name="confirm-password" required>
                        </div>
                        <!-- Weak Subject Select -->
                        <div class="input-group">
                            <label>Select your weak subjects</label>
                            <div class="selections">
                                <div class="subject-select-box">
                                    <input type="checkbox" id="mathematics" name="subjects[]" value="Mathematics">
                                    <label for="mathematics">Mathematics</label>
                                </div>
                                <div class="subject-select-box">
                                    <input type="checkbox" id="science" name="subjects[]" value="Science">
                                    <label for="science">Science</label>
                                </div>
                                <div class="subject-select-box">
                                    <input type="checkbox" id="english" name="subjects[]" value="English Language">
                                    <label for="english">English Language</label>
                                </div>
                                <div class="subject-select-box">
                                    <input type="checkbox" id="ict" name="subjects[]" value="ICT">
                                    <label for="ict">ICT</label>
                                </div>
                                <div class="subject-select-box">
                                    <input type="checkbox" id="sinhala" name="subjects[]" value="Sinhala Language">
                                    <label for="sinhala">Sinhala Language</label>
                                </div>
                                <div class="subject-select-box">
                                    <input type="checkbox" id="tamil" name="subjects[]" value="Tamil Language">
                                    <label for="tamil">Tamil Language</label>
                                </div>
                                <div class="subject-select-box">
                                    <input type="checkbox" id="history" name="subjects[]" value="History">
                                    <label for="history">History</label>
                                </div>
                                <div class="subject-select-box">
                                    <input type="checkbox" id="geography" name="subjects[]" value="Geography">
                                    <label for="geography">Geography</label>
                                </div>
                                <div class="subject-select-box">
                                    <input type="checkbox" id="business" name="subjects[]" value="Business Studies">
                                    <label for="business">Business Studies</label>
                                </div>
                                <div class="subject-select-box">
                                    <input type="checkbox" id="civic" name="subjects[]" value="Civic Education">
                                    <label for="civic">Civic Education</label>
                                </div>
                            </div>
                        </div>
                        <div class="button-group">
                            <a href="profile.php" class="btn-secondary">Cancel</a>
                            <button type="submit" class="btn-primary"><i class="icon-floppy-1"></i> Save</button>
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