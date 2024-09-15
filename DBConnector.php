<?php

//connection only

//Determine how to how passwords from this file for security purposes. 
$serverName = "descentnexus.com";
$userName= "hahypsmy_b2af";
$password= '!1ProjectD1!';
$databaseName= "hahypsmy_RDL";





//create the conneciton
$connection = mysqli_connect($serverName, $userName, $password, $databaseName);



//Error check connection
if ($connection->connect_error) {
  die("Connection failed: " . $connnection->connect_error);
}
else{
  //echo "Connection Successful ";
}






