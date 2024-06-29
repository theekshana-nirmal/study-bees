<?php
//Start the session
session_start();

//Check if the user is logged in, if not then redirect to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: ../auth/login.php");
    exit;
}
$subject_name = $_SESSION['subject_name'];
$full_name = $_SESSION['full_name'];
$profile_picture = $_SESSION['profile_picture'];

//Get the member id of the page
include '../actions/get_member_info.php';

$member_id = $_SESSION['member_id'];
$member_email = $_SESSION['member_email'];
$member_full_name = $_SESSION['member_full_name'];
$member_profile_picture = $_SESSION['member_profile_picture'];
$member_phone_number = $_SESSION['member_phone_number'];

//Get user selected subjects
include '../actions/get_member_subjects.php';
$member_weak_subjects = $_SESSION['member_weak_subjects'];
$member_strong_subjects = $_SESSION['member_strong_subjects'];

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

    <title>Study Bees | Profile ?></title>
</head>

<body>
    <!-- NAVIGATION BAR -->
    <header class="navbar-shadow">
        <div class="container">
            <div class="logo logo-s">
                <img src="<?php echo $profile_picture ?>" alt="LOGO" class="logo-small">
                <h1>Study Bees</h1>
            </div>
            <nav>
                <a href="../auth/logout.php" class="btn-danger"><i class="icon-logout"></i> Log out</a>
                <a href="profile.php" class="profile-link">
                    <h2><?php echo $full_name; ?></h2>
                    <img src="<?php echo $profile_picture ?>" alt="Profile Picture" class="profile-picture">
                </a>
            </nav>
        </div>
    </header>

    <!-- TITLE SECTION -->
    <div class="title-row">
        <div class="container">
            <a href="study-buddies.php?subject_name=<?php echo $subject_name ?>">
                <i class="icon-left-open"></i>
            </a>
            <h1 class="title"><?php echo $subject_name ?></h1>
            <div class="spacer"></div>
        </div>
    </div>

    <!-- User Profile -->
    <div class="profile-page">
        <div class="container">
            <div class="profile-page-layout">
                <!-- Left Column -->
                <div class="user-details-section">
                    <div class="card user-details">
                        <div class="user-pic-and-name">
                            <div class="profile-picture">
                                <img src="<?php echo $member_profile_picture ?>" alt="Profile Picture">
                            </div>
                            <div class="user-name">
                                <h2><?php echo $member_full_name; ?></h2>
                            </div>
                        </div>
                        <div class="user-contact-details">
                            <div class="user-email">
                                <h3><i class="icon-mail-alt"></i> Email:</h3>
                                <p><?php echo $member_email; ?></p>
                            </div>
                            <div class="user-phone">
                                <h3><i class="icon-phone-squared"></i> Phone:</h3>
                                <p><?php echo $member_phone_number; ?></p>
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
                            <!-- Print all the weak subjects of the user -->
                            <?php foreach ($member_weak_subjects as $subject) : ?>
                                <a class="normal-information"><?php echo htmlspecialchars($subject); ?></a>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <!-- Strong Subjects -->
                    <div class="card subject-group">
                        <div class="group-title">
                            <p>Strong Subjects</p>
                        </div>
                        <div class="subjects">
                            <!-- Print all the strong subjects of the user -->
                            <?php foreach ($member_strong_subjects as $subject) : ?>
                                <a class="normal-information"><?php echo htmlspecialchars($subject); ?></a>
                            <?php endforeach; ?>
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