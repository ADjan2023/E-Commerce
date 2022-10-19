<?php

$db = mysqli_connect("localhost","root","","class_contact_mgt");

// Check connection
   if ($db->connect_error) {
      die("Connection failed: " . $db->connect_error);
      echo "Unsuccessful connection";
}
   else
//Display results
   echo "Connected successfully". "<br>";

// $db = mysqli_connect("localhost","root","admin","academicadvisor");

// // Check connection
//    if ($db->connect_error) {
//       die("Connection failed: " . $db->connect_error);
//       echo "Unsuccessful connection";
// }
//    else
// //Display results
//    echo "Connected successfully". "<br>";
?>


