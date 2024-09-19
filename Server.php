<?php

//connection only

//Determine how to how passwords from this file for security purposes. 
$serverName = "descentnexus.com";
$userName= "hahypsmy_b2af";
$password= '!1ProjectD1!';
$databaseName= "hahypsmy_RDL";




$pilot = $_POST['pilot'];
$email = $_POST['email'];
$pilotPassword = $_POST['pilotPassword'];




 


//create the conneciton
$connection = mysqli_connect($serverName, $userName, $password, $databaseName);

?>