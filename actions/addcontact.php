<?php
//making action  aware of controller
include("../controllers/general_controller.php");

//collect form data
if (isset($_POST['add'])) {
	$fname=$_POST['fname'];
	$phone=$_POST['number'];

	add_contact_ctr($fname,$phone);
	
		header('Location:../view/form.php');
	
}



?>
