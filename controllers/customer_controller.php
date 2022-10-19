<?php
//connect to the user account class
require("../classes/general_class.php");

//sanitize data


//--INSERT--//
function add_contact_ctr($name,$email,$password,$country,$city,$contact){
	$addcontact=new general_class();
	return $addcontact->add_contact($name,$email,$password,$country,$city,$contact);


}


//--SELECT--//

//--UPDATE--//

//--DELETE--//

?>