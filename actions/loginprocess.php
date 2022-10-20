<?php
//making action  aware of controller
include("../controllers/customer_controller.php");
include("../error/errordisplay");

//collect form data

$email=$_POST['email'];
$unencryptpass=$_POST['password'];


if(isset($_POST['login'])){
	if(verify_customer_ctr($email)!=false){
		$result=verify_customer_ctr($email);
		$encryptpass= $result['customer_pass'];
		if(password_verify($unencryptpass, $encryptpass)){
			session_start();
			$_SESSION['id'] = $result['customer_id'];
			$_SESSION['name'] = $result['customer_name'];
			$_SESSION['email'] = $result['customer_email'];
			header('Location:../index.php');
		}
		else{
			session_start();
			$_SESSION['error'] = 'Invalid login details!';		
			header('Location:../Login/login.php');
		}	
	}
	else{
		session_start();
		$_SESSION['error'] = 'Invalid login details!';		
		header('Location:../Login/login.php');
	}	
}


else {
	
	header('Location:../Login/login.php');
}
?>
