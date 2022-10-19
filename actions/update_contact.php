<?php
//making action  aware of controller
include("../controllers/update_controller.php");


//collect form data
if (isset($_POST['update'])) {
	$id=$_POST['pid'];
	$name=$_POST['fname'];
	$phone=$_POST['number'];
	

	update_ctr($id, $name, $phone);
	
	
if (update_ctr($id, $name, $phone)===TRUE){
	header('Location:../view/form.php');
}
else{
	echo "Cannot update contact";
}



}




?>
