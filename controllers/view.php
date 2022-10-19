<?php
//connect to the user account class
require("../classes/general_class.php");

//sanitize data


//--INSERT--//
function select_all_ctr(){
	$seeall=new general_class();
	return $seeall->select_all_contacts();


}


//--SELECT--//

//--UPDATE--//

//--DELETE--//

?>