<?php include 'layout/header.php'; ?>

<!-- Banner Section -->
<div class="banner">
    <div class="play-box">
        <div class="play-inner"></div>
    </div>
    <div class="banner-text">Together, we create opportunities for everyone to thrive.</div>
    <div class="scroll-bar" id="scrollBtn">Scroll Down</div>
</div>
<div class="member-login-wrapper">
    <div class="login-card">
        <div class="login-header">
            <h2>Member Login</h2>
            <p>Welcome back! Please access your account.</p>
        </div>

        <form action="login_process.php" method="POST">
            <div class="input-box">
                <label>Email Address</label>
                <input type="email" name="email" placeholder="Enter your email" required>
            </div>

            <div class="input-box">
                <label>Password</label>
                <input type="password" name="password" placeholder="Enter your password" required>
            </div>

            <button type="submit" class="join-btn login-btn-color">Login</button>
        </form>
        
        <p class="login-link">Not a member? <a href="Join.php">Join Now</a></p>
    </div>
</div>

<?php include 'layout/footer.php'; ?>