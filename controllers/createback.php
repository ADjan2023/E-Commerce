
<?php
ob_start();
include 'dbconnect.php';
ob_end_clean();
if(isset($_POST['create'])){
 
 

 $name=$_POST['name'];
 $number=$_POST['number'];
 $add=mysqli_query($db,"INSERT INTO `phonebook`( `pname`, `pphoned`) VALUES ('$name','$number')");
 if($add){
   header('Location: ../index.php');
   exit;
 }
 else{
   echo 'Cannot add task';
 }
}



?>