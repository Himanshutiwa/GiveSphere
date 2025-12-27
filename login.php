<?php
// 1. Header Include
include 'layout/header.php';

// Variables initialize
$name = $email = $phone = ""; 

if (isset($_POST['register_btn'])) { 

    $isValid = true;

    // Full Name Validation
    if (empty($_POST['fullname'])) {
        $nameerr = "Please enter your name";
        $isValid = false;
    } else {
        $name = mysqli_real_escape_string($con, $_POST['fullname']);
    }

    // Email Validation
    if (empty($_POST['email'])) {
        $emailerr = "Please enter your email address";
        $isValid = false;
    } else {
        $email = mysqli_real_escape_string($con, $_POST['email']);
    }

    // Phone Validation
    if (empty($_POST['phone'])) {
        $phoneerr = "Please enter your phone number";
        $isValid = false;
    } else {
        $phone = mysqli_real_escape_string($con, $_POST['phone']);
    }

    // Password Validation
    if (empty($_POST['password'])) {
        $passerr = "Please enter a strong password";
        $isValid = false;
    } else {
        // CHANGE HERE: Password hash hata diya hai.
        // Ab jo user type karega wahi database me jayega.
        $pass = $_POST['password']; 
        
        // SQL Injection se bachne ke liye thoda safe kiya hai
        $pass = mysqli_real_escape_string($con, $pass);
    }

    // 2. Insert Logic
    if ($isValid) {
        $sql = "INSERT INTO users (fullname, email, phone, password) VALUES ('$name', '$email', '$phone', '$pass')";
        
        if (mysqli_query($con, $sql)) {
            $success = "User Created successfully. You can login to your account.";
            $name = $email = $phone = ""; // Reset form
        } else {
            $errorMsg = "Database Error: " . mysqli_error($con);
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
<!-- 2. Main Registration Section -->
<section class="reg-wrapper">
    <div class="reg-card">
        
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

        <div class="reg-header">
            <h2>Create Account</h2>
            <p>Sign up to support our causes</p>
        </div>

        <!-- Form Start -->
        <form action="" method="POST" onsubmit="return validateForm(event)">
            
            <!-- Name -->
            <div class="input-group">
                <label>Full Name</label>
                <div class="input-wrapper">
                    <i class="fas fa-user icon"></i>
                    <input type="text" name="fullname" placeholder="Enter your name" value="<?= $name ?>">
                    <small style="color:red"><?= isset($nameerr) ? $nameerr : '' ?></small>
                </div>
            </div>

            <!-- Email -->
            <div class="input-group">
                <label>Email Address</label>
                <div class="input-wrapper">
                    <i class="fas fa-envelope icon"></i>
                    <input type="email" name="email" placeholder="Enter your email" value="<?= $email ?>">
                    <small style="color:red"><?= isset($emailerr) ? $emailerr : '' ?></small>
                </div>
            </div>

            <!-- Phone -->
            <div class="input-group">
                <label>Phone Number</label>
                <div class="input-wrapper">
                    <i class="fas fa-phone icon"></i>
                    <input type="tel" name="phone" placeholder="Enter phone number" value="<?= $phone ?>">
                    <small style="color:red"><?= isset($phoneerr) ? $phoneerr : '' ?></small>
                </div>
            </div>

            <!-- Password -->
            <div class="input-group">
                <label>Password</label>
                <div class="input-wrapper">
                    <i class="fas fa-lock icon"></i>
                    <input type="password" name="password" id="password" placeholder="Create a strong password">
                    <small style="color:red"><?= isset($passerr) ? $passerr : '' ?></small>
                    <i class="fas fa-eye-slash toggle-password" onclick="togglePassword()"></i>
                </div>
            </div>

            <!-- Captcha Section -->
            <div class="input-group">
                <label>Security Check</label>
                <div class="captcha-container">
                    <canvas id="captchaCanvas" width="160" height="45"></canvas>
                    <button type="button" class="refresh-btn" onclick="generateCaptcha()" title="Refresh Code">
                        <i class="fas fa-sync-alt"></i>
                    </button>
                </div>
                <div class="input-wrapper">
                    <i class="fas fa-shield-alt icon"></i>
                    <input type="text" id="captchaInput" placeholder="Enter the code above">
                </div>
            </div>
            <p class="captcha-error" id="captchaError">Incorrect Captcha Code!</p>

            <!-- Submit Button -->
            <button type="submit" name="register_btn" class="btn-submit">Register</button>

            <div class="form-footer">
                Already have an account? <a href="login2.php">Login here</a>
            </div>
        </form>
    </div>
</section>
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

<!-- 3. JavaScript Logic -->
<script>
    // --- Captcha Logic ---
    let captchaCode = "";

    function generateCaptcha() {
        const canvas = document.getElementById('captchaCanvas');
        const ctx = canvas.getContext('2d');
        const chars = "ABCDEFGHJKLMNPQRSTUVWXYZ23456789"; 
        const length = 6;
        
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        
        // Background
        ctx.fillStyle = '#f1f5f9';
        ctx.fillRect(0, 0, canvas.width, canvas.height);

        // Generate Code
        captchaCode = "";
        for (let i = 0; i < length; i++) {
            captchaCode += chars.charAt(Math.floor(Math.random() * chars.length));
        }

        // Noise Lines
        for(let i=0; i<5; i++) {
            ctx.beginPath();
            ctx.moveTo(Math.random() * canvas.width, Math.random() * canvas.height);
            ctx.lineTo(Math.random() * canvas.width, Math.random() * canvas.height);
            ctx.strokeStyle = "rgba(0,0,0,0.1)";
            ctx.stroke();
        }

        // Text
        let x = 20;
        ctx.font = "bold 22px Poppins";
        ctx.textBaseline = "middle";
        
        for (let i = 0; i < length; i++) {
            ctx.save();
            let angle = Math.random() * 0.4 - 0.2;
            ctx.translate(x, canvas.height/2);
            ctx.rotate(angle);
            ctx.fillStyle = "#082c4d";
            ctx.fillText(captchaCode[i], 0, 0);
            ctx.restore();
            x += 20;
        }
    }

    // --- Validation Logic ---
    function validateForm(e) {
        const userInput = document.getElementById('captchaInput').value.toUpperCase();
        const errorMsg = document.getElementById('captchaError');
        const inputField = document.getElementById('captchaInput');

        if (userInput !== captchaCode) {
            e.preventDefault(); 
            errorMsg.style.display = "block";
            inputField.style.borderColor = "#d10c47";
            generateCaptcha();
            inputField.value = "";
            return false;
        } else {
            errorMsg.style.display = "none";
            inputField.style.borderColor = "#ddd";
            return true;
        }
    }

    // --- Password Toggle ---
    function togglePassword() {
        const passwordInput = document.getElementById('password');
        const toggleIcon = document.querySelector('.toggle-password');

        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            toggleIcon.classList.remove('fa-eye-slash');
            toggleIcon.classList.add('fa-eye');
        } else {
            passwordInput.type = 'password';
            toggleIcon.classList.remove('fa-eye');
            toggleIcon.classList.add('fa-eye-slash');
        }
    }

    window.onload = generateCaptcha;
</script>

<?php
include 'layout/footer.php';
?>