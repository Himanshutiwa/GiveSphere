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
    <link rel="stylesheet" href="style.css">
</head>

<body>

   <?php
   // 1. Database connection zaroor include karein
   // include 'config.php'; 
   
   // Agar sidebar mein connection nahi hai to upar wali line uncomment karein
   include 'layoutad/sidebar.php';
   ?>
            
            <div class="container-fluid px-4 py-4">
                
                <!-- Stats Row (Hidden for brevity, same as before) -->
                
                <!-- Recent Messages Table -->
                <div class="row">
                    <div class="col-12">
                        <div class="table-container">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <!-- Heading change ki kyunki query 'contact' table ki hai -->
                                <h5 class="fw-bold">Contact Messages</h5> 
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover align-middle">
                                    <thead class="table-light">
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Subject</th>
                                            <th>Message</th>
                                            <th>Response</th>
                                            <th>Timestamp</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                          // Note: $con variable aapki connection file se aana chahiye
                                          $sql = "SELECT * FROM contact";
                                          
                                          // ERROR FIXED: Double brackets hataye
                                          $data = mysqli_query($con, $sql); 

                                          if(mysqli_num_rows($data) > 0)
                                          {
                                            while($result = mysqli_fetch_assoc($data))
                                            {
                                        ?>
                                        <!-- ERROR FIXED: <tr> tag add kiya -->
                                        <tr> 
                                            <th><?= $result['id'] ?></th>
                                            <td><?= $result['name'] ?></td>
                                            <!-- ERROR FIXED: Column sequence sahi kiya -->
                                            <td><?= $result['email'] ?></td>
                                            <td><?= $result['subject'] ?></td>
                                            <td><?= substr($result['message'], 0, 50) ?>...</td> <!-- Message lamba ho to crop karein -->
                                            <td><?= $result['respons'] ?></td>
                                            <td><?= $result['timestamp'] ?></td>
                                            <td>
                                                <!-- ERROR FIXED: ID pass ki URL me aur spelling sahi ki -->
                                                <a href="contact-update.php?id=<?= $result['id'] ?>" class="text-success px-2"><i class="fa fa-edit"></i></a>
                                                <a href="contact-delete.php?id=<?= $result['id'] ?>" class="text-danger" onclick="return confirm('Are you sure?');"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                     <?php
                                            }
                                          }
                                          else {
                                              echo "<tr><td colspan='8' class='text-center'>No messages found</td></tr>";
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
  
</body>
</html>