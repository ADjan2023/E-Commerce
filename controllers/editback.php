
<?php
ob_start();
include 'dbconnect.php';
ob_end_clean();
if(isset($_POST['update'])){
   $id=$_POST['id'];
   $name=$_POST['name'];
   $phone=$_POST['phone'];
   $edit=mysqli_query($db,"UPDATE `phonebook` SET `pname`='$name',`pphoned`='$phone'  WHERE `pid`='$id'");
   
   if($edit){
      header('Location: ../index.php');
      exit;
   }
   else{
      echo 'Cannot edit';
   }
}




?>