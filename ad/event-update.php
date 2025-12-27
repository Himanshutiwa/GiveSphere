<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Event - Admin Panel</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>

<?php
include 'layoutad/sidebar.php';

$msg = "";
$msg_type = "";

$id = $event_title = $description = $date  = $location = $goal = $image = "";

/* ================= FETCH EVENT ================= */
if (isset($_GET['id'])) {
    $id = mysqli_real_escape_string($con, $_GET['id']);

    $sql = "SELECT * FROM category WHERE id='$id'";
    $result = mysqli_query($con, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $event_title = $row['event_title'];
        $description = $row['description'];
        $date        = $row['date'];
       
        $location    = $row['location'];
        $goal        = $row['fundraising_goal'];
    
    } else {
        $msg = "Event not found!";
        $msg_type = "alert-danger";
    }
}

/* ================= UPDATE EVENT ================= */
if (isset($_POST['update_btn'])) {

    $id_update   = mysqli_real_escape_string($con, $_POST['id']);
    $title       = mysqli_real_escape_string($con, $_POST['event_title']);
    $desc        = mysqli_real_escape_string($con, $_POST['description']);
    $date_update = $_POST['date'];
    $time_update = $_POST['time'];
    $loc_update  = mysqli_real_escape_string($con, $_POST['location']);
    $goal_update = (int)$_POST['goal'];

    if (empty($title) || empty($desc) || empty($date_update) || empty($time_update) || empty($loc_update) || empty($goal_update)) {
        $msg = "All fields are required!";
        $msg_type = "alert-danger";
    } else {

        /* IMAGE UPLOAD */
        $image_update = $image; // old image by default

        if (!empty($_FILES['image']['name'])) {
            $image_name = time() . "_" . $_FILES['image']['name'];
            $tmp_name   = $_FILES['image']['tmp_name'];
            $path       = "uploads/" . $image_name;

            move_uploaded_file($tmp_name, $path);
            $image_update = $image_name;
        }

        $update_sql = "UPDATE category SET 
            event_title='$title',
            description='$desc',
            date='$date_update',
           
            location='$loc_update',
            fundraising_goal='$goal_update',
            image='$image_update'
        WHERE id='$id_update'";

        if (mysqli_query($con, $update_sql)) {
            $msg = "✅ Event Updated Successfully!";
            $msg_type = "alert-success";

            $event_title = $title;
            $description = $desc;
            $date = $date_update;
            
            $location = $loc_update;
            $goal = $goal_update;
            $image = $image_update;
        } else {
            $msg = "Server Error: " . mysqli_error($con);
            $msg_type = "alert-danger";
        }
    }
}
?>

<div class="container mt-5 mb-5">
    <div class="col-md-7 mx-auto">
        <div class="card shadow">
            <div class="card-header bg-primary text-white">
                <h4><i class="fas fa-edit"></i> Update Event</h4>
            </div>

            <div class="card-body">
                <?php if (!empty($msg)) { ?>
                    <div class="alert <?= $msg_type; ?>"><?= $msg; ?></div>
                <?php } ?>

                <form method="POST" enctype="multipart/form-data">

                    <input type="hidden" name="id" value="<?= $id; ?>">

                    <div class="mb-3">
                        <label>Event Title</label>
                        <input type="text" name="event_title" value="<?= htmlspecialchars($event_title); ?>" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label>Description</label>
                        <textarea name="description" class="form-control" required><?= htmlspecialchars($description); ?></textarea>
                    </div>

                    <div class="mb-3">
                        <label>Date</label>
                        <input type="date" name="date" value="<?= $date; ?>" class="form-control" required>
                    </div>

                  

                    <div class="mb-3">
                        <label>Location</label>
                        <input type="text" name="location" value="<?= htmlspecialchars($location); ?>" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label>Fundraising Goal</label>
                        <input type="number" name="goal" value="<?= $goal; ?>" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label>Event Image</label>
                        <input type="file" name="cover_image" class="form-control">
                        <?php if ($image) { ?>
                            <img src="uploads/events/<?= $image; ?>" width="120" class="mt-2 rounded">
                        <?php } ?>
                    </div>

                    <button type="submit" name="update_btn" class="btn btn-success">
                        Update Event
                    </button>

                    <a href="event.php" class="btn btn-secondary ms-2">Back</a>

                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
