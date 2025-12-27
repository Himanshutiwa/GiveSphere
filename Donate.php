<?php
include 'layout/header.php';

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$nameerr = $emailerr = $phoneerr = $messageerr = $choose_donation_err = $donation_amount_err = "";
$success = "";
$msg_type = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // NAME
    if (empty($_POST['name'])) {
        $nameerr = "*Name field is required*";
    } elseif (!preg_match("/^[A-Za-z ]+$/", $_POST['name'])) {
        $nameerr = "*Only alphabets and spaces allowed*";
    } else {
        $name = mysqli_real_escape_string($con, $_POST['name']);
    }

    // EMAIL
    if (empty($_POST['email'])) {
        $emailerr = "*Email field is required*";
    } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $emailerr = "*Invalid email format*";
    } else {
        $email = mysqli_real_escape_string($con, $_POST['email']);
    }

    // PHONE
    if (empty($_POST['phone'])) {
        $phoneerr = "*Phone field is required*";
    } elseif (!preg_match("/^[0-9]{10}$/", $_POST['phone'])) {
        $phoneerr = "*Phone must be 10 digits*";
    } else {
        $phone = mysqli_real_escape_string($con, $_POST['phone']);
    }

    // ADDRESS / MESSAGE
    if (empty($_POST['message'])) {
        $messageerr = "*Address field is required*";
    } else {
        $message = mysqli_real_escape_string($con, $_POST['message']);
    }

    // DONATION CATEGORY
    if (empty($_POST['Choose_Donation']) || $_POST['Choose_Donation'] == "-- Choose Donation category --") {
        $choose_donation_err = "*Please select a donation category*";
    } else {
        $choose_donation = mysqli_real_escape_string($con, $_POST['Choose_Donation']);
    }

    // DONATION AMOUNT (IMPORTANT FIX)
    if (empty($_POST['donation_amount']) || !is_numeric($_POST['donation_amount'])) {
        $donation_amount_err = "*Please select a donation amount*";
    } else {
        $donation_amount = mysqli_real_escape_string($con, $_POST['donation_amount']);
    }

    // INSERT DATA
    if (
        empty($nameerr) &&
        empty($emailerr) &&
        empty($phoneerr) &&
        empty($messageerr) &&
        empty($choose_donation_err) &&
        empty($donation_amount_err)
    ) {

        $sql = "INSERT INTO doner 
        (fullname, email, phone, address, donation_cat, donate_amount) 
        VALUES 
        ('$name', '$email', '$phone', '$message', '$choose_donation', '$donation_amount')";

        if (mysqli_query($con, $sql)) {
            $success = "Thank you! Your donation has been submitted successfully.";
            $msg_type = "alert-success";
        } else {
            die("DB ERROR: " . mysqli_error($con));
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

 <!--Donation Section Start-->

 <section class="donation-section">
     <div class="section-header">
         <span class="subtitle">DONATION</span>
         <h2 class="title">Our Donation Causes <br> Around the World</h2>
     </div>

     <div class="causes-container">


         <div class="cause-card">
             <div class="progress-sidebar">
                 <div class="amount-top">
                     <span class="label">Raised</span>
                     <span class="value">$8000</span>
                 </div>
                 <div class="progress-bar-bg">
                     <div class="progress-bar-fill" data-percentage="85">
                         <span class="percent-text counter" data-target="85">0</span>%
                     </div>
                 </div>
                 <div class="amount-bottom">
                     <span class="label">Goal</span>
                     <span class="value">$10000</span>
                 </div>
             </div>
             <div class="card-content">
                 <div class="image-wrapper">
                     <img src="image/donation-1.jpg" alt="Healthy Food">
                     <span class="category-badge" style="background-color: #0a5eb2;">Food</span>
                 </div>
                 <div class="text-content">
                     <h3>Healthy Food</h3>
                     <p>Through your donations and volunteer work, we spread kindness and support to children.</p>
                     <a class="donate-btn" href="donate.html">
                         <span>+</span> Donate Now
                     </a>
                 </div>
             </div>
         </div>


         <div class="cause-card">
             <div class="progress-sidebar">
                 <div class="amount-top">
                     <span class="label">Raised</span>
                     <span class="value">$8000</span>
                 </div>
                 <div class="progress-bar-bg">
                     <div class="progress-bar-fill" data-percentage="95">
                         <span class="percent-text counter" data-target="95">0</span>%
                     </div>
                 </div>
                 <div class="amount-bottom">
                     <span class="label">Goal</span>
                     <span class="value">$10000</span>
                 </div>
             </div>
             <div class="card-content">
                 <div class="image-wrapper">
                     <img src="image/donation-2.jpg" alt="Water Treatment">
                     <span class="category-badge" style="background-color: #055397;">Health</span>
                 </div>
                 <div class="text-content">
                     <h3>Water Treatment</h3>
                     <p>Through your donations and volunteer work, we spread kindness and support to children.</p>
                     <a class="donate-btn" href="donate.html">
                         <span>+</span> Donate Now
                     </a>
                 </div>
             </div>
         </div>


         <div class="cause-card">
             <div class="progress-sidebar">
                 <div class="amount-top">
                     <span class="label">Raised</span>
                     <span class="value">$8000</span>
                 </div>
                 <div class="progress-bar-bg">
                     <div class="progress-bar-fill" data-percentage="75">
                         <span class="percent-text counter" data-target="75">0</span>%
                     </div>
                 </div>
                 <div class="amount-bottom">
                     <span class="label">Goal</span>
                     <span class="value">$10000</span>
                 </div>
             </div>
             <div class="card-content">
                 <div class="image-wrapper">
                     <img src="image/donation-3.jpg" alt="Education Support">
                     <span class="category-badge" style="background-color: #155abb;">Education</span>
                 </div>
                 <div class="text-content">
                     <h3>Education Support</h3>
                     <p>Through your donations and volunteer work, we spread kindness and support to children.</p>
                     <a class="donate-btn" href="donate.html">
                         <span>+</span> Donate Now
                     </a>
                 </div>
             </div>
         </div>

     </div>
 </section>
 <!--Donation Section End-->
 <!-- newsletter section start -->

 <?php if (!empty($success)) { ?>
     <div class="alert <?= $msg_type ?> alert-dismissible fade show">
         <?= $success ?>
         <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
     </div>
 <?php }
    ?>

 <div class="donation-wrapper ">

     <div class="donation-container">

         <div class="left-content" id="left-panel">
             <div class="text-content">
                 <h2 class="te">
                     Let's Donate to Needy People for <br>Better Lives
                 </h2>
                 <p class="para">
                     Through your donations, we spread kindness and support to children, families, and communities struggling to find stability.
                 </p>
             </div>
         </div>


         <div class="right-form">
             <form id="donationform" method="POST">

    <input type="text" name="name" placeholder="Your Name">
    <small style="color:red;"><?= $nameerr ?></small>

    <input type="email" name="email" placeholder="Your Email">
    <small style="color:red;"><?= $emailerr ?></small>

    <input type="text" name="phone" placeholder="Phone Number">
    <small style="color:red;"><?= $phoneerr ?></small>

    <textarea name="message" rows="5" placeholder="Full Address"></textarea>
    <small style="color:red;"><?= $messageerr ?></small>

    <select name="Choose_Donation">
        <option>-- Choose Donation category --</option>
        <option>Food Donation</option>
        <option>Clothes Donation</option>
        <option>Book / Educational Material Donation</option>
        <option>Medicine / Health Supplies Donation</option>
        <option>Volunteering / Service Donation</option>
        <option>Sponsorship / Scholarship</option>
        <option>Religious / Zakat Donations</option>
    </select>
    <small style="color:red;"><?= $choose_donation_err ?></small>

    <!-- 🔥 FIXED: DEFAULT AMOUNT -->
    <input type="hidden" name="donation_amount" id="selected-amount" value="10">
    <small style="color:red;"><?= $donation_amount_err ?></small>

    <div class="donation-amounts">
        <div class="amount-btn active" data-amount="10">$10</div>
        <div class="amount-btn" data-amount="20">$20</div>
        <div class="amount-btn" data-amount="30">$30</div>
        <div class="amount-btn" data-amount="40">$40</div>
        <div class="amount-btn" data-amount="50">$50</div>
    </div>

    <button type="submit" class="donate-btn">Donate Now</button>
</form>

         </div>
     </div>
 </div>

 <!-- newsletter section end -->
 <!--Support Section Start-->

 <section class="cta-section">

     <div class="corner-shape top-left1"></div>
     <div class="corner-shape bottom-right"></div>

     <div class="cta-container">
         <h2 class="cta-title">
             Our Door Are Always Open to More <br>
             People Who Want to Support Each <br>
             Others!
         </h2>
         <p class="cta-description">
             Through your donations and volunteer work, we spread kindness and support to children,
             families, and communities struggling to find stability.
         </p>
         <div class="cta-buttons">
             <a href="Donate.php" class="btn btn-yellow">Donate Now</a>
             <a href="Join.php" class="btn btn-teal">Join Us Now</a>
         </div>
     </div>
 </section>
 <!--Support Section End-->
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

 <!-- News SEction End-->

 <?php
    include 'layout/footer.php'
    ?>