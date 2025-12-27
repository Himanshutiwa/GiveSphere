<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Volunteer - Admin Panel</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>

<?php
include 'layoutad/sidebar.php';

$msg = "";
$msg_type = "";

$full_name = $email = $phone = $country = $city = $full_address = $join_fee = "";

// ================= ADD LOGIC =================
if (isset($_POST['add_btn'])) {

    $isValid = true;

    // Full Name
    if (empty($_POST['full_name'])) {
        $isValid = false;
        $msg = "Full Name is required";
    } else {
        $full_name = mysqli_real_escape_string($con, $_POST['full_name']);
    }

    // Email
    if (empty($_POST['email'])) {
        $isValid = false;
        $msg = "Email is required";
    } else {
        $email = mysqli_real_escape_string($con, $_POST['email']);
    }

    // Phone
    if (empty($_POST['phone'])) {
        $isValid = false;
        $msg = "Phone number is required";
    } else {
        $phone = mysqli_real_escape_string($con, $_POST['phone']);
    }

    // Password
    if (empty($_POST['password']) || strlen($_POST['password']) < 6) {
        $isValid = false;
        $msg = "Password must be at least 6 characters";
    } else {
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    }

    // Country
    $country = mysqli_real_escape_string($con, $_POST['country']);

    // City
    $city = mysqli_real_escape_string($con, $_POST['city']);

    // Address
    $full_address = mysqli_real_escape_string($con, $_POST['full_address']);

    // Join Fee
    if (empty($_POST['join_fee'])) {
        $isValid = false;
        $msg = "Join fee is required";
    } else {
        $join_fee = mysqli_real_escape_string($con, $_POST['join_fee']);
    }

    // INSERT
    if ($isValid) {
        $sql = "INSERT INTO volunteer 
        (full_name, email, phone, password, country, city, full_address, join_fee) 
        VALUES 
        ('$full_name','$email','$phone','$password','$country','$city','$full_address','$join_fee')";

        if (mysqli_query($con, $sql)) {
            $msg = "Volunteer added successfully!";
            $msg_type = "alert-success";
            $full_name = $email = $phone = $country = $city = $full_address = $join_fee = "";
        } else {
            $msg = mysqli_error($con);
            $msg_type = "alert-danger";
        }
    } else {
        $msg_type = "alert-danger";
    }
}
?>

<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card shadow-lg">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0"><i class="fas fa-user-plus"></i> Add Volunteer</h4>
                </div>

                <div class="card-body p-4">

                    <?php if (!empty($msg)) { ?>
                        <div class="alert <?= $msg_type ?> alert-dismissible fade show">
                            <?= $msg ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    <?php } ?>

                    <form method="POST">

                        <!-- Full Name -->
                        <div class="mb-3">
                            <label class="fw-bold">Full Name</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                <input type="text" name="full_name" value="<?= $full_name ?>" class="form-control">
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="mb-3">
                            <label class="fw-bold">Email</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                <input type="email" name="email" value="<?= $email ?>" class="form-control">
                            </div>
                        </div>

                        <!-- Phone -->
                        <div class="mb-3">
                            <label class="fw-bold">Phone</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                <input type="text" name="phone" value="<?= $phone ?>" class="form-control" >
                            </div>
                        </div>

                        <!-- Password -->
                        <div class="mb-3">
                            <label class="fw-bold">Password</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                <input type="password" name="password" class="form-control" >
                            </div>
                        </div>

                        <!-- Country -->
                        <div class="mb-3">
                            <label class="fw-bold">Country</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-flag"></i></span>
                                <input type="text" name="country" value="<?= $country ?>" class="form-control">
                            </div>
                        </div>

                        <!-- City -->
                        <div class="mb-3">
                            <label class="fw-bold">City</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-city"></i></span>
                                <input type="text" name="city" value="<?= $city ?>" class="form-control">
                            </div>
                        </div>

                        <!-- Address -->
                        <div class="mb-3">
                            <label class="fw-bold">Full Address</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-home"></i></span>
                                <textarea name="full_address" class="form-control"><?= $full_address ?></textarea>
                            </div>
                        </div>

                        <!-- Join Fee -->
                        <div class="mb-3">
                            <label class="fw-bold">Join Fee</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-rupee-sign"></i></span>
                                <input type="number" name="join_fee" value="<?= $join_fee ?>" class="form-control" >
                            </div>
                        </div>

                        <!-- Buttons -->
                        <div class="d-flex justify-content-between mt-4">
                            <a href="volunteer.php" class="btn btn-secondary">
                                <i class="fas fa-arrow-left"></i> Back
                            </a>

                            <button type="submit" name="add_btn" class="btn btn-success">
                                <i class="fas fa-save"></i> Add Volunteer
                            </button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
