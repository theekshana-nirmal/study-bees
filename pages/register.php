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

    include 'header.php';
    ?>

    <!-- TITLE SECTION -->
    <div class="title-row">
        <div class="container">
            <a href="../index.php">
                <i class="icon-home"></i>
            </a>
            <h1 class="title">Register</h1>
            <div class="spacer"></div>
        </div>
    </div>

    <!-- Registration Form -->
    <div class="form-wrapper">
        <div class="container">
            <div class="card">
                <form action="#" method="POST">
                   <p class="form-heading-text">Register now to find study partners who need your help in your strong subjects and who can support you in your weak subjects! 🏆</p>
                    <hr>
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
                    <hr>
                    <p class="notice-normal"><b>Note: </b>The subjects you do not mark as a weak subject will be considered as your strong subjects. You can review and modify these selections at any time by editing your profile after registration.</p>
                    <button type="submit" class="btn-primary">Create Account</button>
                    <p>Already have an account? <a href="login.php" class="txt-color-primary">Log in</a></p>
                </form>
            </div>
        </div>
    </div>

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