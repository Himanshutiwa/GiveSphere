<?php
include 'layoutad/sidebar.php';

if(isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM contact WHERE id = $id";
    $data = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($data);

    // Existing data
    $name    = $row['name'];
    $email   = $row['email'];
    $subject = $row['subject'];
    $message = $row['message'];

} else {
    header("Location: contactus.php");
    exit();
}

$msg = "";
$msg_type = "";

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name    = $_POST['name'];
    $email   = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $update = "UPDATE contact 
               SET name='$name', email='$email', subject='$subject', message='$message'
               WHERE id=$id";

    if(mysqli_query($con, $update)) {
        $msg = "User Data Updated Successfully!";
        $msg_type = "alert-success"; 
    } else {
        $msg = "User Data NOT Updated!";
        $msg_type = "alert-danger"; 
    }
}
?>
<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-6">   <!-- yahan size control hota hai -->
 <!-- Alert Message -->
                    <?php if(!empty($msg)){ ?>
                        <div class="alert <?= $msg_type; ?> alert-dismissible fade show" role="alert">
                            <?php if($msg_type == 'alert-success') { echo '<i class="fas fa-check-circle"></i>'; } else { echo '<i class="fas fa-exclamation-triangle"></i>'; } ?>
                            <?= $msg; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php } ?>
            <form action="" method="POST">

                <input type="hidden" name="id" value="<?= $id; ?>">

                <!-- Full Name -->
                <div class="mb-3">
                    <label class="form-label fw-bold text-secondary">Full Name</label>
                    <div class="input-group">
                        <span class="input-group-text bg-light"><i class="fas fa-user"></i></span>
                        <input type="text" name="name" value="<?= $name; ?>" class="form-control" required>
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

                <!-- Subject -->
                <div class="mb-3">
                    <label class="form-label fw-bold text-secondary">Subject</label>
                    <div class="input-group">
                        <span class="input-group-text bg-light"><i class="fas fa-book"></i></span>
                        <input type="text" name="subject" value="<?= $subject; ?>" class="form-control" required>
                    </div>
                </div>

                <!-- Message -->
                <div class="mb-3">
                    <label class="form-label fw-bold text-secondary">Message</label>
                    <textarea name="message" class="form-control" rows="4" required><?= $message; ?></textarea>
                </div>

                <!-- Buttons -->
                <div class="d-flex justify-content-between align-items-center mt-4 pt-2 border-top">
                    <a href="contactus.php" class="btn btn-secondary">
                        <i class="fas fa-arrow-left"></i> Back
                    </a>

                    <button type="submit" class="btn btn-success">
                        Update Data <i class="fas fa-save"></i>
                    </button>
                </div>

            </form>

        </div>
    </div>
</div>

