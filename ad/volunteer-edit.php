<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Volunteers - Admin Panel</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>

<?php
include 'layoutad/sidebar.php';

$msg = "";
$msg_type = "";

$user_id = "";
$full_name = "";
$email = "";
$phone = "";
$country = "";
$city = "";
$full_address = "";

/* ================= FETCH DATA ================= */
if (isset($_GET['id'])) {
    $user_id = mysqli_real_escape_string($con, $_GET['id']);

    $sql = "SELECT * FROM volunteer WHERE id='$user_id'";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $full_name    = $row['full_name'];
        $email        = $row['email'];
        $phone        = $row['phone'];
        $country      = $row['country'];
        $city         = $row['city'];
        $full_address = $row['full_address'];
    } else {
        $msg = "Volunteer not found!";
        $msg_type = "alert-danger";
    }
}

/* ================= UPDATE DATA ================= */
if (isset($_POST['update_btn'])) {

    $id_update           = $_POST['id'];
    $full_name_update    = mysqli_real_escape_string($con, $_POST['full_name']);
    $email_update        = mysqli_real_escape_string($con, $_POST['email']);
    $phone_update        = mysqli_real_escape_string($con, $_POST['phone']);
    $country_update      = mysqli_real_escape_string($con, $_POST['country']);
    $city_update         = mysqli_real_escape_string($con, $_POST['city']);
    $full_address_update = mysqli_real_escape_string($con, $_POST['full_address']);

    $update_query = "UPDATE volunteer SET 
        full_name='$full_name_update',
        email='$email_update',
        phone='$phone_update',
        country='$country_update',
        city='$city_update',
        full_address='$full_address_update'
        WHERE id='$id_update'";

    if (mysqli_query($con, $update_query)) {
        $msg = "Volunteer Data Updated Successfully!";
        $msg_type = "alert-success";

        // update values on page
        $full_name    = $full_name_update;
        $email        = $email_update;
        $phone        = $phone_update;
        $country      = $country_update;
        $city         = $city_update;
        $full_address = $full_address_update;

    } else {
        $msg = "Error Updating Data: " . mysqli_error($con);
        $msg_type = "alert-danger";
    }
}
?>

<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card shadow-lg">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0"><i class="fas fa-user-edit"></i> Edit Member Details</h4>
                </div>

                <div class="card-body p-4">

                    <?php if (!empty($msg)) { ?>
                        <div class="alert <?= $msg_type ?> alert-dismissible fade show">
                            <?= $msg ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    <?php } ?>

                    <form method="POST">

                        <!-- IMPORTANT FIX -->
                        <input type="hidden" name="id" value="<?= $user_id ?>">

                        <div class="mb-3">
                            <label>Full Name</label>
                            <input type="text" name="full_name" value="<?= $full_name ?>" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label>Email</label>
                            <input type="email" name="email" value="<?= $email ?>" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label>Phone</label>
                            <input type="text" name="phone" value="<?= $phone ?>" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label>Country</label>
                            <input type="text" name="country" value="<?= $country ?>" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label>City</label>
                            <input type="text" name="city" value="<?= $city ?>" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label>Full Address</label>
                            <textarea name="full_address" class="form-control" required><?= $full_address ?></textarea>
                        </div>

                        <div class="d-flex justify-content-between mt-4">
                            <a href="volunteer.php" class="btn btn-secondary">Back</a>
                            <button type="submit" name="update_btn" class="btn btn-success">
                                Update Data
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
