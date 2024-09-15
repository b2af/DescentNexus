
<?php

include("DBConnector.php");


DBConn();

var_dump($connection);

function insertAccountName($connection)
{
    
$pilot = $_POST['pilot'];
$email = $_POST['email'];
$pilotPassword = $_POST['pilotPassword'];


     

    //run the sql that performs the database inserting action. 
    
    $sql = "INSERT INTO Player (PlayerID, PilotName, email, Password, MatchesPlayed, TotalDeaths, TotalKills, TeamID, LevelRating, GameID, SeasonID) VALUES (NULL,'$pilot', '$email', '$pilotPassword', NULL, NULL, NULL, NULL, NULL, NULL, NULL)";
    
    
    
    if ($connection->query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $connection->error;
    }
    
    
    mysqli_close($connection);
    
    header("Location: index.html");
    
}


?>

