<?php
include 'layoutad/config.php';
session_start();
if(!isset($_SESSION['userdata']))
{
    header('Location:../login2.php');

}
elseif($_SESSION['userdata']['role']!='admin'){
      header('Location:../login2.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Charity Admin Dashboard</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="d-flex" id="wrapper">
    
    <!-- Sidebar -->
    <div id="sidebar-wrapper">
        <div class="sidebar-heading text-center">
            <i class="fas fa-hand-holding-heart me-2 text-primary"></i> GiveSphere
        </div>
        <div class="list-group list-group-flush mt-3">
            <a href="index.php" class="list-group-item list-group-item-action active">
                <i class="fas fa-tachometer-alt me-2"></i> Dashboard
            </a>
            <a href="donation.php" class="list-group-item list-group-item-action">
                <i class="fas fa-donate me-2"></i> Donations
            </a>
            <a href="volunteer.php" class="list-group-item list-group-item-action">
                <i class="fas fa-users me-2"></i> Volunteers
            </a>
            <a href="event.php" class="list-group-item list-group-item-action">
                <i class="fas fa-calendar-alt me-2"></i> Events
            </a>
            
            </a>
            <a href="users.php" class="list-group-item list-group-item-action">
                <i class="fas fa-user me-2"></i> Users
            </a>
             <a href="slider.php" class="list-group-item list-group-item-action">
                <i class="fas fa-user me-2"></i> Slider Add
            </a>
             <a href="contactus.php" class="list-group-item list-group-item-action">
                <i class="fas fa-user me-2"></i> Contact
            </a>
            <a href="setting.php" class="list-group-item list-group-item-action">
                <i class="fas fa-cog me-2"></i> Settings
            </a>
            <a href="logout.php" class="list-group-item list-group-item-action mt-5 text-danger">
                <i class="fas fa-sign-out-alt me-2"></i> Logout
            </a>
        </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content Wrapper -->
    <div id="page-content-wrapper">
        
        <!-- Top Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom">
            <div class="container-fluid">
                <button class="btn btn-primary" id="menu-toggle">
                    <i class="fas fa-bars"></i>
                </button>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
                                <img src="https://ui-avatars.com/api/?name=Admin+User&background=0d6efd&color=fff" class="rounded-circle" width="35" alt="Admin">
                                <span class="ms-2 fw-bold">Himanshu</span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end shadow border-0">
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item text-danger" href="#">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->