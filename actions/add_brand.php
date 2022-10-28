<?php
include("../controllers/product_controller.php");


$bname=$_POST['bname'];
if(isset($_POST['save'])){
	if(add_brand_ctr($bname)==TRUE){
			header('Location:../Admin/admin_dash.php');
		}

}




?>