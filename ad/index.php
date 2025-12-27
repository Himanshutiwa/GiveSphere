<?php
include 'layoutad/sidebar.php';

?>


<!-- Main Content Starts Here -->
<div class="container-fluid px-4 py-4">

    <!-- Stats Row -->
    <div class="row g-3 mb-4">
        <div class="col-md-3">
            <div class="card stats-card p-3">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <p class="text-muted mb-1">Total Donations</p>
                        <h3 class="fw-bold mb-0">$124,500</h3>
                        <small class="text-success"><i class="fas fa-arrow-up"></i> 12%</small>
                    </div>
                    <div class="icon-box bg-light-primary"><i class="fas fa-dollar-sign"></i></div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card stats-card p-3">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <p class="text-muted mb-1">Volunteers</p>
                        <h3 class="fw-bold mb-0">1,204</h3>
                        <small class="text-success"><i class="fas fa-user-plus"></i> 45 New</small>
                    </div>
                    <div class="icon-box bg-light-success"><i class="fas fa-users"></i></div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card stats-card p-3">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <p class="text-muted mb-1">Events Held</p>
                        <h3 class="fw-bold mb-0">86</h3>
                        <small class="text-muted">Upcoming: 4</small>
                    </div>
                    <div class="icon-box bg-light-warning"><i class="fas fa-calendar-check"></i></div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card stats-card p-3">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <p class="text-muted mb-1">Lives Impacted</p>
                        <h3 class="fw-bold mb-0">50K+</h3>
                        <small class="text-success">Global</small>
                    </div>
                    <div class="icon-box bg-light-danger"><i class="fas fa-heart"></i></div>
                </div>
            </div>
        </div>
    </div>


    <!-- Recent Donations Table -->
    <div class="row">
        <div class="col-12">
            <div class="table-container">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h5 class="fw-bold">Recent Donations</h5>
                    <button class="btn btn-outline-primary btn-sm">View All</button>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead class="table-light">
                            <tr>
                                <th>ID</th>
                                <th>Donor Name</th>
                                <th>Amount</th>
                                <th>Cause</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>#D001</td>
                                <td><img src="https://ui-avatars.com/api/?name=John+Doe" width="30" class="rounded-circle me-2"> John Doe</td>
                                <td class="fw-bold">$500</td>
                                <td>Clean Water</td>
                                <td>Oct 24, 2023</td>
                                <td><span class="badge bg-success status-badge">Completed</span></td>
                                <td><button class="btn btn-sm btn-light"><i class="fas fa-ellipsis-v"></i></button></td>
                            </tr>
                            <tr>
                                <td>#D002</td>
                                <td><img src="https://ui-avatars.com/api/?name=Sarah+Smith" width="30" class="rounded-circle me-2"> Sarah Smith</td>
                                <td class="fw-bold">$120</td>
                                <td>Education</td>
                                <td>Oct 24, 2023</td>
                                <td><span class="badge bg-warning text-dark status-badge">Pending</span></td>
                                <td><button class="btn btn-sm btn-light"><i class="fas fa-ellipsis-v"></i></button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div> <!-- End Container Fluid -->

</div> <!-- End Page Content Wrapper -->
</div> <!-- End Wrapper -->

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="script.js"></script>

</body>

</html>