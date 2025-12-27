<?php
include 'layoutad/sidebar.php';
  if(isset($_GET['id']))
  {
    $id = $_GET['id'];
    $query = "DELETE FROM contact where id=$id";
    if(mysqli_query($con,$query))
    {
        echo "<script>
         alert('your data has been deleted successfully');
         window.location.href='contactus.php';
         </script>";
 
    } else{
        echo "<script>
        alert('your data not deleted');
        window.location.href='contactus.php';
        </script>";
    }
  }
?>