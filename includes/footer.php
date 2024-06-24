<!-- FOOTER BAR -->
<footer>
    <div class="container">
        <div class="row-top">
            <div class="column-left">
                <div class="logo logo-l">
                    <img src="<?php echo htmlspecialchars($footer_logo_image_path); ?>" alt="LOGO" class="logo-large">
                    <h1>Study Bees</h1>
                </div>
            </div>
            <div class="column-right">
                <div class="footer-links">
                    <a href="<?php echo htmlspecialchars($home_page_path); ?>">Home</a>
                    <a href="<?php echo htmlspecialchars($contact_us_page_path); ?>">Contact Us</a>
                    <a href="<?php echo htmlspecialchars($about_us_page_path); ?>">About Us</a>
                    <a href="#">Privacy Policy</a>
                    <a href="<?php echo htmlspecialchars($how_it_works_page_path); ?>">How it Works</a>
                    <a href="#">Terms and Conditions</a>
                </div>
            </div>
        </div>
        <div class="row-bottom">
            <?php
            echo "<p>Copyright &copy; " . date("Y") . " Study Bees. All rights reserved.</p>";
            ?>
        </div>
    </div>
</footer>