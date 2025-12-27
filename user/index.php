<?php
session_start();


if (!isset($_SESSION['userdata']) || $_SESSION['userdata']['role'] != 'user') {
    header('Location: ../login2.php');
    exit;
}


$con = mysqli_connect("localhost", "root", "", "givesphere");
if (!$con) die("Database connection failed");

$user_id = $_SESSION['userdata']['id'];


$sql = "SELECT * FROM users WHERE id='$user_id'";
$result = mysqli_query($con, $sql);
$user = mysqli_fetch_assoc($result);


if (isset($_POST['name'], $_POST['email'], $_POST['phone'], $_POST['address'])) {

    $name    = mysqli_real_escape_string($con, $_POST['name']);
    $email   = mysqli_real_escape_string($con, $_POST['email']);
    $phone   = mysqli_real_escape_string($con, $_POST['phone']);
    $address = mysqli_real_escape_string($con, $_POST['address']);


    if (isset($_FILES['profile_img']) && $_FILES['profile_img']['name'] != "") {
        $img_name = $_FILES['profile_img']['name'];
        $img_tmp  = $_FILES['profile_img']['tmp_name'];
        $ext = pathinfo($img_name, PATHINFO_EXTENSION);
        $image = "user_" . $user_id . "." . $ext;

        move_uploaded_file($img_tmp, "../uploads/" . $image);

        $update_sql = "UPDATE users 
                       SET fullname='$name', email='$email', phone='$phone', address='$address', image='$image' 
                       WHERE id='$user_id'";
    } else {
        $update_sql = "UPDATE users 
                       SET name='$name', email='$email', phone='$phone', address='$address' 
                       WHERE id='$user_id'";
    }
    // echo $update_sql;
    // die();
    if (mysqli_query($con, $update_sql)) {
        echo "<script>alert('Profile updated successfully');</script>";

        $result = mysqli_query($con, $sql);
        $user = mysqli_fetch_assoc($result);
    } else {
        echo "<script>alert('Failed to update profile');</script>";
    }
}


if (isset($_POST['new_password'], $_POST['c_password'])) {

    $new_password = $_POST['new_password'];
    $c_password   = $_POST['c_password'];

    if ($new_password == "" || $c_password == "") {
        echo "<script>alert('Password field empty');</script>";
    } elseif ($new_password != $c_password) {
        echo "<script>alert('Password not matched');</script>";
    } else {
        $update_pw = "UPDATE users SET password='$new_password' WHERE id='$user_id'";
        if (mysqli_query($con, $update_pw)) {
            echo "<script>alert('Password updated successfully');</script>";
        } else {
            echo "<script>alert('Password update failed');</script>";
        }
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GiveSphere - Dashboard</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="../CSS/Style.css">
    <link rel="stylesheet" href="style.css">


</head>

<body>

    <!-- TOP BAR -->
    <div class="top-bar">
        <div class="top-inner">
            <div class="top-left">
                <span class="top-item"><i class="fa-solid fa-phone"></i>+91 7729038218</span>
                <span class="top-item"><i class="fa-solid fa-envelope"></i>charityinfo@gmail.com</span>
                <span class="top-item"><i class="fa-solid fa-location-dot"></i> 123 Jankipuram, Lucknow, UP</span>
            </div>
            <div class="top-right">
                <a class="social"><i class="fa-brands fa-twitter"></i></a>
                <a class="social"><i class="fa-brands fa-facebook-f"></i></a>
                <a class="social"><i class="fa-brands fa-youtube"></i></a>
            </div>
        </div>
    </div>

    <header class="header" id="header">
        <div class="max-width header-inner">
            <div class="logo">
                <a class="logo-link" href="index.php">
                    <span>GiveSphere</span>
                </a>
            </div>
            <nav class="navbar">
                <a href="../index.php" class="nav-link">Home</a>
                <a href="../About.php" class="nav-link">About</a>
                <a href="../Service.php" class="nav-link">Service</a>
                <a href="../Donate.php" class="nav-link">Donation</a>
                <a href="../Event.php" class="nav-link">Event</a>

                <a href="../Contact.php" class="nav-link">Contact</a>
                <a href="../Join.php" class="nav-link">Join Now</a>
                <a href="../login.php" class="nav-link">Login</a>
            </nav>

        </div>
    </header>

    <div class="container-fluid">
        <div class="row">
            <!-- SIDEBAR -->
            <nav class="col-md-3 col-lg-2 profile-sidebar">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link tab-pane fade show active" id="v-pills-profile-tab" data-bs-toggle="pill" href="#v-pills-profile" role="tab">
                        <i class="fas fa-user"></i> User Profile
                    </a>
                    <a class="nav-link tab-pane" id="v-pills-donation-tab" data-bs-toggle="pill" href="#v-pills-donation" role="tab">
                        <i class="fas fa-hand-holding-heart"></i> Donation
                    </a>
                    <a class="nav-link tab-pane" id="v-pills-update-tab" data-bs-toggle="pill" href="#v-pills-update" role="tab">
                        <i class="fas fa-edit"></i> Update Events
                    </a>
                    <a class="nav-link tab-pane" id="v-pills-password-tab" data-bs-toggle="pill" href="#v-pills-password" role="tab">
                        <i class="fas fa-key"></i> Change Password
                    </a>
                    <hr>
                    <a href="logout.php " class="nav-link logout-link tab-pane">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </a>
                </div>
            </nav>

            <!-- MAIN CONTENT AREA -->
            <main class="col-md-9 col-lg-10 px-md-4 py-4">
                <div class="tab-content" id="v-pills-tabContent">


                    <!-- 1. USER PROFILE SECTION -->
                    <div class="container mt-5">

                        <div class="content-card">
                            <h4 class="section-title">My Profile</h4>

                            <!-- Update Profile Button -->
                            <button id="editBtn" class="btn btn-primary mb-3">Update Profile</button>

                            <form id="profileForm" action="" method="POST" enctype="multipart/form-data">
                                <!-- Profile Image -->
                                <div class="text-center mb-4">

                                    <img src="../uploads/<?= isset($user['image']) && $user['image'] != '' ? $user['image'] : 'default.png' ?>" height="200" width="200" style="border-radius:50%;">
                                    <label for="profileUpload" class="upload-icon">
                                        <br>
                                        <i class="fa-solid fa-pen"></i>
                                    </label>

                                    <input type="file" id="profileUpload" name="profile_img" hidden>
                                </div>

                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label class="form-label text-secondary">Full Name</label>
                                        <input type="text" class="form-control" name="name" value="<?= $user['fullname'] ?? '' ?>" disabled>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label text-secondary">Email</label>
                                        <input type="email" class="form-control" name="email" value="<?= $user['email'] ?? '' ?>" disabled>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label text-secondary">Phone</label>
                                        <input type="text" class="form-control" name="phone" value="<?= $user['phone'] ?? '' ?>" disabled>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label text-secondary">Address</label>
                                        <textarea name="address" class="form-control" disabled><?= $user['address'] ?? '' ?></textarea>
                                    </div>
                                </div>

                                <div class="mt-4 text-end">
                                    <button type="submit" id="saveBtn" class="btn btn-success" hidden>Save Changes</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- 2. DONATION TABLE SECTION -->
                    <div class="tab-pane fade" id="v-pills-donation" role="tabpanel">
                        <div class="content-card">
                            <h4 class="section-title">Donation History</h4>
                            <div class="table-responsive">
                                <table class="table table-hover border">
                                    <thead class="table-light">
                                        <tr>
                                            <th>ID</th>
                                            <th>Cause</th>
                                            <th>Date</th>
                                            <th>Amount</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>#101</td>
                                            <td>Child Education</td>
                                            <td>12 Oct 2023</td>
                                            <td class="fw-bold text-success">₹2,000</td>
                                            <td><span class="badge bg-success">Success</span></td>
                                        </tr>
                                        <tr>
                                            <td>#105</td>
                                            <td>Food Relief</td>
                                            <td>05 Nov 2023</td>
                                            <td class="fw-bold text-success">₹5,500</td>
                                            <td><span class="badge bg-success">Success</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                    <!-- 4. CHANGE PASSWORD SECTION -->


                    <div class="tab-pane fade" id="v-pills-password" role="tabpanel">
                        <div class="content-card" style="max-width: 500px;">
                            <h4 class="section-title">Change Password</h4>
                            <form method="post" action="">

                                <div class="mb-3">
                                    <label class="form-label text-secondary">New Password</label>
                                    <input type="password" name="new_password" class="form-control" placeholder="********">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label text-secondary">Confirm New Password</label>
                                    <input type="password" name="c_password" class="form-control" placeholder="********">
                                </div>
                                <button class="btn btn-primary w-100 mt-2" type="submit">Update Password</button>
                            </form>
                        </div>
                    </div>

                </div>
            </main>
        </div>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script>
        document.getElementById('editBtn').addEventListener('click', function(e) {
            e.preventDefault();
            const form = document.getElementById('profileForm');
            const inputs = form.querySelectorAll('input, textarea');
            inputs.forEach(input => input.disabled = false);
            document.getElementById('saveBtn').hidden = false;
        });
        document.getElementById('profileUpload').addEventListener('change', function(e) {
    const file = e.target.files[0];
    if (file) {
        document.querySelector('.profile-img').src = URL.createObjectURL(file);
    }
});
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>