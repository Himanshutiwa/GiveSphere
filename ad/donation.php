<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Charity Admin Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>

<?php
// Sidebar ke sath DB connection hona chahiye
include 'layoutad/sidebar.php';
?>

<div class="container-fluid px-4 py-4">

    <div class="row">
        <div class="col-12">
            <div class="table-container">

                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h5 class="fw-bold">Donation List</h5>
                </div>

                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead class="table-light">
                            <tr>
                                <th>ID</th>
                                <th>Full Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Donation Category</th>
                                <th>Amount</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                        <?php
                        $sql = "SELECT * FROM doner ORDER BY id DESC";
                        $data = mysqli_query($con, $sql);

                        if (mysqli_num_rows($data) > 0) {
                            while ($result = mysqli_fetch_assoc($data)) {
                        ?>
                            <tr>
                                <td><?= $result['id'] ?></td>
                                <td><?= $result['fullname'] ?></td>
                                <td><?= $result['email'] ?></td>
                                <td><?= $result['phone'] ?></td>
                                <td><?= $result['address'] ?></td>
                                <td><?= $result['donation_cat'] ?></td>
                                <td>₹<?= $result['donate_amount'] ?></td>
                                <td><?= date("d-m-Y", strtotime($result['timestamp'])) ?></td>
                                <td>
                                    <a href="donation-edit.php?id=<?= $result['id'] ?>" class="text-success px-2">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="donation-delete.php?id=<?= $result['id'] ?>" 
                                       class="text-danger"
                                       onclick="return confirm('Are you sure you want to delete this donation?');">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php
                            }
                        } else {
                            echo "<tr><td colspan='9' class='text-center'>No donations found</td></tr>";
                        }
                        ?>
                        </tbody>

                    </table>
                </div>

            </div>
        </div>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
