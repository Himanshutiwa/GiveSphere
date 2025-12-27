<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User - Admin Panel</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
   <link rel="stylesheet" href="style.css"> 
   
</head>

<body>

<?php
// 1. Include Sidebar/Database
include 'layoutad/sidebar.php'; 

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

                    <form action="" method="POST" enctype="multipart/form-data">
                        
                        <input type="hidden" name="user_id" value="<?= $user_id; ?>">

                        <!-- Full Name -->
                        <div class="mb-3">
                            <label class="form-label fw-bold text-secondary">Full Name</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light"><i class="fas fa-user"></i></span>
                                <input type="text" name="fullname" value="<?= $fullname; ?>" class="form-control" required>
                            </div>
                        </div>

                          <div class="mb-3">
                            <label class="form-label fw-bold text-secondary">Image</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light"><i class="fas fa-user"></i></span>
                                <input type="file" name="file"  class="form-control" required>
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
                                    <i class="fas fa-list-ul"></i> View Updated List
                                </a>

                                <!-- Submit Button -->
                                <button type="submit" name="update_btn" class="btn btn-success">
                                    Update Data <i class="fas fa-save"></i>
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