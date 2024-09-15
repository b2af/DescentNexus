<?php

session_start();
include 'Server.php';


$username = $_POST['pilot'];
$password = $_POST['pilotPassword'];






if ($_SERVER["request_method"==="Post"])
{
    $username = mysqli_real_escape_string($connection, $_POST['$username']);
    $password = mysqli_real_escape_string($connection, $_POST['$password']);
}
$SQL = "SELECT * From Player WHERE pilot='$pilot' and password='$password'";

$result = mysqli_query($connection, $SQL);

if (mysqli_num_rows($result)=== 1)
{
    $_SESSION['user_Id'] =$username;
    header("Location: index.html");

   exit;
}    
else
    {
        (header("not found"));
    }
    

?>