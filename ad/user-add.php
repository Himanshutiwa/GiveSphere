<?php
include 'layoutad/sidebar.php';

$msg = "";
$msg_type = "";

$fullname = "";
$email = "";
$phone = "";
$password = "";

if (isset($_POST['update_btn'])) {

    $fullname = trim($_POST['fullname']);
    $email    = trim($_POST['email']);
    $phone    = trim($_POST['phone']);
    $password = trim($_POST['password']);

    // ✅ Validation
    if (empty($fullname)) {
        $msg = "Full Name is required!";
        $msg_type = "alert-danger";
    }
    elseif (!preg_match("/^[a-zA-Z\s]+$/", $fullname)) {
        $msg = "Name should contain only letters!";
        $msg_type = "alert-danger";
    }
    elseif (empty($email)) {
        $msg = "Email is required!";
        $msg_type = "alert-danger";
    }
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $msg = "Invalid email format!";
        $msg_type = "alert-danger";
    }
    elseif (empty($phone)) {
        $msg = "Phone number is required!";
        $msg_type = "alert-danger";
    }
    elseif (!preg_match("/^[0-9]{10}$/", $phone)) {
        $msg = "Phone must be 10 digits!";
        $msg_type = "alert-danger";
    }
    elseif (empty($password)) {
        $msg = "Password is required!";
        $msg_type = "alert-danger";
    }
    elseif (strlen($password) < 6) {
        $msg = "Password must be at least 6 characters!";
        $msg_type = "alert-danger";
    }
    else {

        // ✅ Check duplicate email
        $check = mysqli_query($con, "SELECT * FROM users WHERE email='$email'");
        if (mysqli_num_rows($check) > 0) {
            $msg = "Email already exists!";
            $msg_type = "alert-danger";
        } else {

            // ✅ Insert user (plain password)
            $insert = "INSERT INTO users (fullname, email, phone, password)
                       VALUES ('$fullname', '$email', '$phone', '$password')";

            if (mysqli_query($con, $insert)) {
                $msg = "User added successfully!";
                $msg_type = "alert-success";

                // Clear form after success
                $fullname = "";
                $email = "";
                $phone = "";
                $password = "";
            } else {
                $msg = "Database error while adding user!";
                $msg_type = "alert-danger";
            }
        }
    }
}
?>


<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-7"> <!-- Width thoda badhaya taaki buttons fit aayein -->
            <div class="card shadow-lg">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0"><i class="fas fa-user-edit"></i> Edit User Details</h4>
                </div>
                <div class="card-body p-4">
                    
                    <!-- Alert Message -->
                    <?php if(!empty($msg)){ ?>
                        <div class="alert <?= $msg_type; ?> alert-dismissible fade show" role="alert">
                            <?php if($msg_type == 'alert-success') { echo '<i class="fas fa-check-circle"></i>'; } else { echo '<i class="fas fa-exclamation-triangle"></i>'; } ?>
                            <?= $msg; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php } ?>

                    <form action="" method="POST">
                        
                        <input type="hidden" name="user_id" value="<?= $user_id; ?>">

                        <!-- Full Name -->
                        <div class="mb-3">
                            <label class="form-label fw-bold text-secondary">Full Name</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light"><i class="fas fa-user"></i></span>
                                <input type="text" name="fullname" value="<?= $fullname; ?>" class="form-control" required>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="mb-3">
                            <label class="form-label fw-bold text-secondary">Email Address</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light"><i class="fas fa-envelope"></i></span>
                                <input type="email" name="email" value="<?= $email; ?>" class="form-control" required>
                            </div>
                        </div>

                        <!-- Phone -->
                        <div class="mb-3">
                            <label class="form-label fw-bold text-secondary">Phone Number</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light"><i class="fas fa-phone"></i></span>
                                <input type="text" name="phone" value="<?= $phone; ?>" class="form-control" required>
                            </div>
                        </div>
                            <div class="mb-3">
                            <label class="form-label fw-bold text-secondary">Password</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light"><i class="fa-solid fa-lock"></i></span>
                                <input type="text" name="password" value="<?= $password; ?>" class="form-control" required>
                            </div>
                        </div>
                        <!-- BUTTONS SECTION -->
                        <div class="d-flex justify-content-between align-items-center mt-4 pt-2 border-top">
                            <!-- Left Side: Back Button -->
                            <a href="users.php" class="btn btn-secondary">
                                <i class="fas fa-arrow-left"></i> Back
                            </a>

                            <!-- Right Side: View & Update Buttons -->
                            <div>
                                <!-- NEW BUTTON: View Updated Data -->
                                <a href="users.php" class="btn btn-info text-white me-2">
                                    <i class="fas fa-list-ul"></i> View Add List
                                </a>

                                <!-- Submit Button -->
                                <button type="submit" name="update_btn" class="btn btn-success">
                                    Add Data <i class="fas fa-save"></i>
                                </button>
                            </div>
                        </div>
                        <!-- End Buttons -->

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>