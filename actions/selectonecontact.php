<?php
//making action  aware of controller
include("../controllers/select_one_controller.php");


//collect form data
if (isset($_POST['update'])) {
	$id=$_POST['pid'];
	

	select_one_ctr($id);
	
	

$result=select_one_ctr($id);
$i=0;
echo "<form method='POST' action='../actions/update_contact.php' >";
while($i < count($result)){
echo "<input name='pid' type='hidden' value='".$result[$i]['pid']."'>";
echo "<input name='fname' placeholder='".$result[$i]['pname']."'>";
echo "<input name='number' placeholder='".$result[$i]['pphoned']."'>";
echo "<input type='submit' value='Update' name='update'>";

$i++;
}
echo "</form>";


}



?>
