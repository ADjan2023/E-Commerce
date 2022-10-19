<?php
//connect to the user account class
require("../classes/general_class.php");

//sanitize data


//--INSERT--//
function update_ctr($id,$a,$b){
	$updatecontact=new general_class();
	return $updatecontact->update_contact($id,$a,$b);


}


//--SELECT--//

//--UPDATE--//

//--DELETE--//

?>