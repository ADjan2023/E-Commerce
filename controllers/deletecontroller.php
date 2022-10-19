<?php
//connect to the user account class
require("../classes/general_class.php");

//sanitize data


//--INSERT--//
function del_contact_ctr($a){
	$delcontact=new general_class();
	return $delcontact->delete_contact($a);


}


//--SELECT--//

//--UPDATE--//

//--DELETE--//

?>