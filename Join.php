<?php
include 'layout/header.php';

$full_name = $email = $phone = $password = $country = $city = $full_address = "";
$join_fee = 100;

if (isset($_POST['join'])) {

    $isValid = true;

    if (empty($_POST['full_name'])) {
        $nameerr = "Please enter Your Full Name";
        $isValid = false;
    } else {
        $full_name = mysqli_real_escape_string($con, $_POST['full_name']);
    }

    if (empty($_POST['email'])) {
        $emailerr = "Please enter your email address";
        $isValid = false;
    } else {
        $email = mysqli_real_escape_string($con, $_POST['email']);
    }

    if (empty($_POST['phone'])) {
        $phoneerr = "Please enter your phone number";
        $isValid = false;
    } else {
        $phone = mysqli_real_escape_string($con, $_POST['phone']);
    }

    if (empty($_POST['password'])) {
        $passworderr = "Please enter password";
        $isValid = false;
    } else {
        $password = mysqli_real_escape_string($con, $_POST['password']);
    }

    if (empty($_POST['country'])) {
        $countryerr = "Please enter country";
        $isValid = false;
    } else {
        $country = mysqli_real_escape_string($con, $_POST['country']);
    }

    if (empty($_POST['city'])) {
        $cityerr = "Please enter city";
        $isValid = false;
    } else {
        $city = mysqli_real_escape_string($con, $_POST['city']);
    }

    if (empty($_POST['full_address'])) {
        $full_addresserr = "Please enter address";
        $isValid = false;
    } else {
        $full_address = mysqli_real_escape_string($con, $_POST['full_address']);
    }

    if ($isValid) {

        $sql = "INSERT INTO volunteer 
        (full_name, email, phone, password, country, city, full_address, join_fee)
        VALUES
        ('$full_name','$email','$phone','$password','$country','$city','$full_address','$join_fee')";

        if (mysqli_query($con, $sql)) {
            $success = "Welcome to team! You can login now.";
            $full_name = $email = $phone = $password = $country = $city = $full_address = "";
        } else {
            $errorMsg = mysqli_error($con);
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
   <?php if (!empty($success)) { ?>
                        <div class="alert <?= $msg_type ?> alert-dismissible fade show">
                            <?= $success?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    <?php } ?>

<?php if (isset($errorMsg)) { ?>
    <div class="alert alert-danger" role="alert">
        &#x274C; <?= $errorMsg; ?>
    </div>
<?php } ?>

<div class="join-wrapper">
    <div class="join-container">

        <div class="join-header">
            <h2>Become a Member</h2>
            <p>Join our community and make a difference today.</p>
        </div>

        <!-- Membership Fee Alert -->
        <div class="fee-alert">
            <div class="fee-icon"><i class="fas fa-crown"></i></div>
            <div class="fee-text">
                <h3>Lifetime Membership Fee: Rs.100</h3>
                <p>Your contribution helps us serve the needy better.</p>
            </div>
        </div>
        <form action="" method="POST" class="join-form">

            <div class="form-grid">

                <div class="input-box">
                    <label>Full Name</label>
                    <input type="text" name="full_name" value="<?= $full_name ?>" >
                    <small style="color:red"><?= $nameerr ?? '' ?></small>
                </div>

                <div class="input-box">
                    <label>Email Address</label>
                    <input type="email" name="email" value="<?= $email ?>" >
                    <small style="color:red"><?= $emailerr ?? '' ?></small>
                </div>

                <div class="input-box">
                    <label>Phone Number</label>
                    <input type="text" name="phone" value="<?= $phone ?>" >
                    <small style="color:red"><?= $phoneerr ?? '' ?></small>
                </div>

                <div class="input-box">
                    <label>Create Password</label>
                    <input type="password" name="password" value="<?= $password ?>" >
                    <small style="color:red"><?= $passworderr ?? '' ?></small>
                </div>

                <div class="input-box">
                    <label>Country</label>
                    <input type="text" name="country" value="<?= $country ?>" >
                    <small style="color:red"><?= $countryerr ?? '' ?></small>
                </div>

                <div class="input-box">
                    <label>City</label>
                    <input type="text" name="city" value="<?= $city ?>" >
                    <small style="color:red"><?= $cityerr ?? '' ?></small>
                </div>

            </div>

            <div class="input-box full-width">
                <label>Full Address</label>
                <textarea name="full_address" rows="3"><?= $full_address ?></textarea>

                <small style="color:red"><?= $full_addresserr ?? '' ?></small>
            </div>

            <!-- hidden join fee -->
            <input type="hidden" name="join_fee" value="100">

            <div class="payment-check">
                <input type="checkbox" id="agree">
                                <label for="agree">
                    I agree to pay <b>Rs.100</b> as a joining fee and accept the terms.
                </label>
                <small style="color:red"><?= $join_feeerr ?? '' ?></small>
            </div>

            <button type="submit" name="join" class="join-btn">
                Pay Rs.100 & Join Now
            </button>


        </form>



    </div>
</div>

<?php include 'layout/footer.php'; ?>