<?php

include 'layoutad/sidebar.php'; 


if (isset($_GET['id'])) {
    
   
    $id = mysqli_real_escape_string($con, $_GET['id']);

    $sql = "DELETE FROM users WHERE id = '$id'";
    $query = mysqli_query($con, $sql);

    if ($query) {
       
        echo "<script>
                alert('User deleted successfully!');
                window.location.href = 'users.php'; 
              </script>";
    } else {
     
        echo "<script>
                alert('Something went wrong. Please try again.');
                window.location.href = 'users.php';
              </script>";
    }
} else {
   
    header("Location: users.php");
}
?>