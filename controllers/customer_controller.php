<?php
//connect to the user account class
require("../classes/customer_class.php");

//sanitize data


//--Register--//
function add_customer_ctr($name,$email,$password,$country,$city,$contact,$role){
	$addcontact=new customer_class();
	return $addcontact->add_customer($name,$email,$password,$country,$city,$contact,$role);
}


//--VLogin--//
function verify_customer_ctr($a){
	$select_one=new customer_class();
	return $select_one->select_one_customer($a);
}

//--UPDATE--//

//--DELETE--//

?>