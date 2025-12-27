<?php
ob_start();
include 'layoutad/sidebar.php';

$msg = "";
$msg_type = "";
$errors = [];

if (isset($_POST['submit_event'])) {

    $title       = trim($_POST['event_title']);
    $description = trim($_POST['description']);
    $date        = $_POST['date'];
  
    $location    = trim($_POST['location']);
    $goal        = $_POST['fund_goal'];

    // ---------------- VALIDATION ------------------

    if (empty($title)) $errors[] = "Event title is required.";
    if (empty($description)) $errors[] = "Description is required.";
    if (empty($date)) $errors[] = "Date is required.";
   
    if (empty($location)) $errors[] = "Location is required.";
    if (empty($goal) || !is_numeric($goal) || $goal <= 0) {
        $errors[] = "Fund goal must be a positive number.";
    }

    // -------------- IMAGE VALIDATION ------------------

    $upload_dir = "uploads/";
    $images = [];

    if (!is_dir($upload_dir)) {
        mkdir($upload_dir, 0777, true);
    }

    if (!empty($_FILES['cover_image']['name'][0])) {

        foreach ($_FILES['cover_image']['name'] as $key => $name) {

            $type = $_FILES['cover_image']['type'][$key];
            $allowed = ['image/jpeg', 'image/png', 'image/webp'];

            if (!in_array($type, $allowed)) {
                $errors[] = "$name is not a valid image (jpg, png, webp only).";
            }
        }
    } else {
        $errors[] = "At least one image is required.";
    }

    // ---------------- INSERT DATA ------------------

    if (empty($errors)) {

        $title       = mysqli_real_escape_string($con, $title);
        $description = mysqli_real_escape_string($con, $description);
        $location    = mysqli_real_escape_string($con, $location);
        $goal        = (int)$goal;

        foreach ($_FILES['cover_image']['name'] as $key => $name) {

            $tmp = $_FILES['cover_image']['tmp_name'][$key];

            $new_name = time() . "_" . rand(1000, 9999) . "_" . basename($name);
            $path = $upload_dir . $new_name;

            if (move_uploaded_file($tmp, $path)) {
                $images[] = $path;
            }
        }

        // json encode
        $cover_image = json_encode($images, JSON_UNESCAPED_SLASHES);

        $sql = "INSERT INTO category 
                (event_title, description, date,  location, fundraising_goal, cover_image)
                VALUES
                ('$title', '$description', '$date', '$location', '$goal', '$cover_image')";

        if (mysqli_query($con, $sql)) {
            $msg = "Event Added Successfully!";
            $msg_type = "alert-success";
        } else {
            $msg = "Data not saved: " . mysqli_error($con);
            $msg_type = "alert-danger";
        }
    } else {
        $msg = implode("<br>", $errors);
        $msg_type = "alert-danger";
    }
}

$events_result = mysqli_query($con, "SELECT * FROM category ORDER BY id DESC");

?>
<!DOCTYPE html>
<html>
<head>
    <title>Events Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container p-4">

    <?php if(!empty($msg)){ ?>
        <div class="alert <?= $msg_type; ?> alert-dismissible fade show" role="alert">
            <?= $msg; ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    <?php } ?>

    <div class="text-end mb-3">
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addEventModal">
            + Add Event
        </button>
    </div>

    <div class="row">

        <?php while ($event = mysqli_fetch_assoc($events_result)) :
            $imgs = json_decode($event['cover_image'], true);
            $first_image = (!empty($imgs[0])) ? $imgs[0] : 'uploads/default.jpg';
        ?>

            <div class="col-md-4 mb-4">
                <div class="card">

                    <img src="<?= $first_image ?>" class="card-img-top" style="height:250px;object-fit:cover;">

                    <div class="card-body">
                        <h5><?= htmlspecialchars($event['event_title']); ?></h5>
                        <p><?= htmlspecialchars($event['description']); ?></p>

                        <p><b>Date:</b> <?= $event['date'] ?></p>
                      
                        <p><b>Location:</b> <?= htmlspecialchars($event['location']); ?></p>
                        <p><b>Goal:</b> ₹<?= number_format($event['fundraising_goal']); ?></p>

                        <div class="d-flex flex-wrap">
                            <?php if (!empty($imgs)) {
                                foreach ($imgs as $img) { ?>
                                    <img src="<?= $img ?>" width="60" height="60" class="me-1 mb-1" style="object-fit:cover;">
                            <?php }
                            } ?>
                        </div>

                        <div class="mt-2 d-flex justify-content-between">
                            <a href="event-update.php?id=<?= $event['id']; ?>" class="btn btn-sm btn-success">Edit</a>
                            <a href="event-delete.php?id=<?= $event['id']; ?>" onclick="return confirm('Delete this event?')" class="btn btn-sm btn-danger">Delete</a>
                        </div>

                    </div>
                </div>
            </div>

        <?php endwhile; ?>

    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="addEventModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- FIXED FORM -->
            <form method="POST" enctype="multipart/form-data">

                <div class="modal-header bg-primary text-white">
                    <h5>Add Event</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">

                    <input type="text" name="event_title" class="form-control mb-2" placeholder="Title" required>

                    <textarea name="description" class="form-control mb-2" placeholder="Description" required></textarea>

                    <input type="date" name="date" class="form-control mb-2" required>

                   

                    <input type="text" name="location" class="form-control mb-2" placeholder="Location" required>

                    <input type="number" name="fund_goal" class="form-control mb-2" placeholder="Goal" required>

                    <input type="file" name="cover_image[]" multiple class="form-control mb-2" required>

                </div>

                <div class="modal-footer">
                    <button type="submit" name="submit_event" class="btn btn-primary w-100">
                        Save Event
                    </button>
                </div>

            </form>
            <!-- FORM FIX END -->

        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
