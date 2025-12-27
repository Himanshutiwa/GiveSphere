<?php include 'layout/header.php';
if(isset($_SESSION['userdata']) && $_SESSION['userdata']['role']=='user')
{
    header('Location:user');
}
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $email = $_POST['email'];
    $pwd = $_POST['password'];
    $sql = "Select*from users where email ='$email' and password = '$pwd'";
    $data = mysqli_query($con,$sql);
    if(mysqli_num_rows($data)!=1)
    {
        $error = "Invalid email id and password";
    }
    else{
        $result = mysqli_fetch_assoc($data);
        $_SESSION['userdata']=$result;
        if($result['role']=='admin')
        {
            header('Location:ad/');
        }
        else{
            header('Location:user/');
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
<div class="member-login-wrapper">
    <div class="login-card">
        <div class="login-header">
            <h2>User Login</h2>
            <p>Welcome back! Please access your account.</p>
        </div>

        <form action="" method="POST" id="login">
            <div class="input-box">
                <label>Email Address</label>
                <input type="text" name="email" placeholder="Enter your email" >
            </div>

            <div class="input-box">
                <label>Password</label>
                <input type="password" name="password" placeholder="Enter your password">
            </div>

            <button type="submit" class="join-btn login-btn-color">Login</button>
        </form>
        
        <p class="login-link">Not a user? <a href="login.php">Register</a></p>
    </div>
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

<!-- News SEction End-->

<?php include 'layout/footer.php'; ?>