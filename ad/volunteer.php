<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Charity Admin Dashboard</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <?php
    include 'layoutad/sidebar.php';
    ?>

    <!-- Main Content Container -->
    <div class="container-fluid px-4 py-4">

        <!-- Welcome Stats Row -->
        <div class="row g-3 mb-4">
            <!-- Stat 1 -->
            <div class="col-md-3">
                <div class="card stats-card p-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <p class="text-muted mb-1">Total Donations</p>
                            <h3 class="fw-bold mb-0">$124,500</h3>
                            <small class="text-success"><i class="fas fa-arrow-up"></i> 12% this month</small>
                        </div>
                        <div class="icon-box bg-light-primary">
                            <i class="fas fa-dollar-sign"></i>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Stat 2 -->
            <div class="col-md-3">
                <div class="card stats-card p-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <p class="text-muted mb-1">Volunteers</p>
                            <h3 class="fw-bold mb-0">1,204</h3>
                            <small class="text-success"><i class="fas fa-user-plus"></i> 45 New</small>
                        </div>
                        <div class="icon-box bg-light-success">
                            <i class="fas fa-users"></i>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Stat 3 -->
            <div class="col-md-3">
                <div class="card stats-card p-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <p class="text-muted mb-1">Events Held</p>
                            <h3 class="fw-bold mb-0">86</h3>
                            <small class="text-muted">Upcoming: 4</small>
                        </div>
                        <div class="icon-box bg-light-warning">
                            <i class="fas fa-calendar-check"></i>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Stat 4 -->
            <div class="col-md-3">
                <div class="card stats-card p-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <p class="text-muted mb-1">Lives Impacted</p>
                            <h3 class="fw-bold mb-0">50K+</h3>
                            <small class="text-success">Global Reach</small>
                        </div>
                        <div class="icon-box bg-light-danger">
                            <i class="fas fa-heart"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Donations Table -->
        <div class="row">
            <div class="col-12">
                <div class="table-container">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h5 class="fw-bold">Member List</h5>
                        <a href="volunteer-add.php" class="btn btn-outline-primary btn-sm">Add Member</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover align-middle">
                            <thead class="table-light">
                                <tr>
                                    <th>ID</th>
                                    <th>Full_Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Country</th>
                                    <th>City</th>
                                    <th>Full_Address</th>
                                    <th>Join_Fee</th>
                                    <th>Timestamp</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                $sql = "SELECT * FROM volunteer ORDER BY id ";
                                $data = mysqli_query($con, $sql);

                                if (mysqli_num_rows($data) > 0) {
                                    while ($result = mysqli_fetch_assoc($data)) {
                                ?>
                                        <tr>
                                            <td><?= $result['id'] ?></td>
                                            <td><?= $result['full_name'] ?></td>
                                            <td><?= $result['email'] ?></td>
                                            <td><?= $result['phone'] ?></td>
                                            <td><?= $result['country'] ?></td>
                                            <td><?= $result['city'] ?></td>
                                            <td><?= $result['full_address'] ?></td>
                                            <td>₹<?= $result['join_fee'] ?></td>
                                            <td><?= $result['timestamp'] ?></td>
                                            <td>
                                                <a href="volunteer-edit.php?id=<?= $result['id'] ?>">
                                                    <i class="fa fa-edit text-success px-2"></i>
                                                </a>
                                                <a href="volunterr-delete.php?id=<?= $result['id'] ?>">
                                                    <i class="fa fa-trash text-danger"></i>
                                                </a>
                                            </td>
                                        </tr>
                                <?php
                                    }
                                }
                                ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Chart.js for Graphs -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="script.js"></script>

</body>

</html>