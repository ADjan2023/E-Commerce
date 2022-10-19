<?php
//making action  aware of controller
include("../controllers/deletecontroller.php");

//collect form data
if (isset($_POST['delete'])) {
	$id=$_POST['pid'];
	

	del_contact_ctr($id);
	
		header('Location:../view/form.php');
	
}



?>
