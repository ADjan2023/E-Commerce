<?php
include("../controllers/view.php");
function viewcontacts(){
$result=select_all_ctr();
$i=0;
echo "<table style ='border: 1px solid black;'>";
while($i < count($result)){
echo "<tr>";
echo "<td>".$result[$i]['pname']."</td>";
echo "<td>".$result[$i]['pphoned']."</td>";
echo "<td> <form method='POST' action='../actions/selectonecontact.php' >
				<input type='hidden' name='pid' value='".$result[$i]['pid']."'>
				<input type='submit' value='Update' name='update'>
			</form>
		</td>
		<td>
			<form method='POST' action='../actions/deletecontact.php' >
				<input type='hidden' name='pid' value='".$result[$i]['pid']."'>
				<input type='submit' value='Delete' name='delete'>
			</form>
				
			
		</td>";
echo "</tr>";
$i++;
}
echo "<table>";
}

?>


