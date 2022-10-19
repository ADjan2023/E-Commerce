<?php

$db = mysqli_connect("eu-cdbr-west-03.cleardb.net","b4799e4ad3c3f6","85ebf725","heroku_2f28a549a2aad87");

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


