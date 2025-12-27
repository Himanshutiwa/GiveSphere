<?php
include 'layout/header.php';

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$nameerr = $emailerr = $subjecterr = $messageerr = "";
$success = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (empty($_POST['name'])) {
        $nameerr = "*Name field is required*";
    } elseif (!preg_match("/^[A-Za-z\s]+$/", $_POST['name'])) {
        $nameerr = "*Only letters and spaces allowed*";
    }

    if (empty($_POST['email'])) {
        $emailerr = "*Email field is required*";
    } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $emailerr = "*Invalid email format*";
    }

    if (empty($_POST['subject'])) {
        $subjecterr = "*Subject field is required*";
    }

    if (empty($_POST['message'])) {
        $messageerr = "*Message field is required*";
    }

    if ($nameerr == "" && $emailerr == "" && $subjecterr == "" && $messageerr == "") {

        $name    = $_POST['name'];
        $email   = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $query = "INSERT INTO contact (name, email, subject, message) 
                  VALUES ('$name', '$email', '$subject', '$message')";

        if (mysqli_query($con, $query)) {
            $success = "Your data has been submitted successfully!";
        } else {
            echo "Error: " . mysqli_error($con);
        }
    }
}
?>


<!-- Banner Section -->
<div class="banner">
    <div class="play-box">
        <div class="play-inner"></div>
    </div>
    <div class="banner-text">Together, we create opportunities for everyone to thrive.</div>
    <div class="scroll-bar" id="scrollBtn">Scroll Down</div>
</div>
<!-- Contact Section Start -->
<div class="contact-section">
    <div class="contact-container">

        <!-- Left Side: Info & Map -->
        <div class="contact-info">
            <p class="contact-label">CONTACT</p>
            <div class="label-underline"></div>
            <h1>If You Have Any Query,<br>Please Contact Us</h1>

            <!-- Map Container -->
            <div id="map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3557.446227993991!2d80.9401517752247!3d26.92106467664223!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399957f6b5f1fa83%3A0x9d06aea16ba57354!2sTechsima%20Solution%20Private%20Limited!5e0!3m2!1sen!2sin!4v1763826323282!5m2!1sen!2sin"
                    width="100%"
                    height="450"
                    style="border:0;"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>

        <!-- Right Side: Form -->
        
        <div class="contact-form-area">

            <div class="form-header-text">
                <h2>We're Here to Help!</h2>
                <p>Whether you have questions about our services, need technical support, or want to discuss a potential partnership, we're ready to listen. Simply fill out the contact form below, and our dedicated team will get back to you promptly.</p>
            </div>
              <?php
           if(isset($success))
           {

           
         ?>
         <div class="alert alert-success" role="alert">
            &#x2714;<?= $success; ?>
         </div>
         <?php
           }
         ?>
            <form id="contactForm" method="POST">
                <div class="form-row">
                    <input type="text" name="name" placeholder="Your Name" name="name">
                    
                    <input type="email" name="email" placeholder="Your Email" name="email">
                     
                </div>
                  <small style="color:red;"><?= $nameerr ?></small>
                    <small style="color:red;"><?= $emailerr ?></small>

                <input type="text" name="subject" placeholder="Subject" name="subject">
                <small style="color:red;"><?= $subjecterr ?></small>
                <textarea name="message" placeholder="Message" rows="8" ></textarea>
                 <small style="color:red;"><?= $messageerr ?></small>
                <!-- Fixed Button: Removed <a> tag inside button -->
                <button type="submit" class="send-button">Send Message</button>
            </form>

        </div>

    </div>
</div>
<!-- Contact Section End -->

<!-- Scroll Top Button (Optional: Footer already has one) -->
<div class="scroll-top-button">
    <a href="#header" aria-label="Scroll to top">
        <span>&#8593;</span>
    </a>
</div>

<!-- News Section Start -->
<section class="newsletter-section1">
    <h2>Subscribe the Newsletter</h2>

    <form class="subscription-form" action="#" method="post">
        <div class="input-group">
            <input type="email" class="email-input" placeholder="Enter Your Email" required>
            <button type="submit" class="submit-button">
                <span class="send-icon">&#x27A4;</span>
            </button>
        </div>
        <p class="spam-warning">Don't worry, we won't spam you with emails.</p>
    </form>
</section>
<!-- News Section End-->

<?php
include 'layout/footer.php';
?>