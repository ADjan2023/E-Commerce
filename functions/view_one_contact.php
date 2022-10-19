<?php
include("../controllers/select_one_controller.php");
function onecontact(){
$result=select_one_ctr();
$i=0;
echo "<table style ='border: 1px solid black;'>";
while($i < count($result)){
echo "<tr>";
echo "<td>".$result[$i]['pname']."</td>";
echo "<td>".$result[$i]['pphoned']."</td>";

echo "</tr>";
$i++;
}
echo "<table>";

?>


