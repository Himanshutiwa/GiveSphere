<!-- header -->

<?php
 $catsql = "Select *from category";
 $cat = mysqli_query($con,$catsql);
 if( mysqli_affected_rows($cat)>0)
 {
    while($category = mysqli_affected_rows($cat)){

    }
 }

?>
<!-- make a category page title change  -->

<?php
 $id = $_GET['catid'];
 $cat = "Select * from category where id = $id";
 $category = mysqli_query($con,$cat);
 $data = mysqli_fetch_assoc($category);

?>
<h1><?= $data['category_name'] ?></h1>
<!-- shop section  -->

<?php
  $catid = $_GET['catid'];
  $sql = "Select * from categpry  where category =$id";
  
?>
<!-- product detial page -->
<?php
?>



