<?php

function DBConn ()

{

$serverName = "descentnexus.com";
$userName= "hahypsmy_b2af";
$password= '!1ProjectD1!';
$databaseName= "hahypsmy_RDL";

  //create the conneciton
$connection = mysqli_connect($serverName, $userName, $password, $databaseName);

 print("This button works");
//Check the connection of the database server. 
if ($connection->connect_error) 
{
  die("Connection failed: " . $connection->connect_error);
}
else
{
  echo "Connection Successful ";
}


}



?>



