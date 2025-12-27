 <?php

  include 'config.php';
  session_start();
 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GiveSphere - Charity begins at home, but should not end there.</title>
    
    <!-- CSS Files -->
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/all.min.css">
    <link rel="stylesheet" href="CSS/aos.css">
    <link rel="stylesheet" href="CSS/bootstrap.css">

    
    <!-- Main Style CSS (Includes Login CSS) -->
    <link rel="stylesheet" href="CSS/Style.css">
    
    <!-- Font Awesome for Login Icons -->
</head>
<body>

<!-- TOP BAR -->
<div class="top-bar">
    <div class="top-inner">
        <div class="top-left">
            <span class="top-item"><i class="fa-solid fa-phone"></i>+91 7729038218</span>
            <span class="top-item"><i class="fa-solid fa-envelope"></i>charityinfo@gmail.com</span>
            <span class="top-item"><i class="fa-solid fa-location-dot"></i> 123 Jankipuram, lucknow, UP</span>
        </div>
        <div class="top-right">
            <a class="social"><i class="fa-brands fa-twitter"></i></a>
            <a class="social"><i class="fa-brands fa-facebook-f"></i></a>
            <a href=""class="social"><i class="fa-brands fa-youtube"></i></a>
        </div>
    </div>
</div>

<!-- Header Start (NAVBAR) -->
<header class="header" id="header">
    <div class="max-width header-inner">
        <div class="logo">
            <a class="logo-link" href="index.php">
                <span>GiveSphere</span>
            </a>
        </div>
        <nav class="navbar">
            <a href="index.php" class="nav-link">Home</a>
            <a href="About.php" class="nav-link">About</a>
            <a href="Service.php" class="nav-link">Service</a> 
            <a href="Donate.php" class="nav-link">Donation</a>
            <a href="Event.php" class="nav-link">Event</a>
            
            <a href="Contact.php" class="nav-link">Contact</a>
            <a href="Join.php" class="nav-link">Join Now</a>
            <a href="login.php" class="nav-link">Login</a>
        </nav>
        <!-- 'bars' icon is the hamburger -->
        <i class="fa-solid fa-bars bars" id="hamburger"></i> 
    </div>
</header>
<!-- Header End -->
<!-- 
Sidebar for Mobile
<div class="sidebar" id="sidebar">
    <a href="#" class="sidebar-close" id="sidebarCloseBtn">&times;</a>
    <a href="index.php" class="sidebar-link">Home</a>
    <a href="About.php" class="sidebar-link">About</a>
    <a href="Service.php" class="sidebar-link">Service</a>
    <a href="Donate.php" class="sidebar-link">Donation</a>
    <a href="Event.php" class="sidebar-link">Event</a>
    <a href="Contact.php" class="sidebar-link">Contact</a>
    <a href="Join.php" class="sidebar-link">Join Now</a>
    <a href="login.php" class="sidebar-link">Login</a>
</div> -->