<?php
//making action  aware of controller
include("../controllers/customer_controller.php");

//collect form data
if (isset($_POST['add'])) {
	$fname=$_POST['fname'];
	$phone=$_POST['number'];

	if(add_contact_ctr($name,$email,$password,$country,$city,$contact)==TRUE){
		header('Location:../Login/login.php');
	}
	
		
	
}



?>
