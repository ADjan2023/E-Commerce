<?php
ob_start();
include 'dbconnect.php';
ob_end_clean();
if(isset($_POST['delete'])){
   $id=$_POST['id'];
   $delete=mysqli_query($db,"DELETE FROM `phonebook` WHERE `pid`='$id'");
   if($delete){
      header('Location: ../index.php');
      exit;
   }
   echo 'Cannot delete';
}


?>