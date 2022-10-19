<?php
//connect to the user account class
require("../classes/general_class.php");

//sanitize data


//--INSERT--//
function add_contact_ctr($a,$b){
	$addcontact=new general_class();
	return $addcontact->add_contact($a,$b);


}


//--SELECT--//

//--UPDATE--//

//--DELETE--//

?>