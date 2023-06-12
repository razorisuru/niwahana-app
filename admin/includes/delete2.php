<?php session_start(); ?>
<!-- Footer -->
<?php  include "../header.php" ?>

<?php
  if ($_SESSION['role'] == 'super_admin'){
?>

<?php 
     if(isset($_GET['delete']))
     {
         $userid= $_GET['delete'];

         // SQL query to delete data from user table where id = $userid
         $query = "DELETE FROM details2 WHERE id = {$userid}"; 
         $delete_query= mysqli_query($conn, $query);
         header("Location: home.php");
     }
              ?>

<?php 
    }else {
      header('Location: ../../view.php');
    }
  ?>

  <!-- Footer -->
<?php include "footer.php" ?>