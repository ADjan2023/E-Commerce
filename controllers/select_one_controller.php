<?php
//connect to the user account class
require("../classes/general_class.php");

//sanitize data


//--INSERT--//
function select_one_ctr($a){
	$select_one=new general_class();
	return $select_one->select_one_contact($a);


}


//--SELECT--//

//--UPDATE--//

//--DELETE--//

?>