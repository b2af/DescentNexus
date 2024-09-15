<?php
/////////////////////////SQL insert to database here//////////////////////////////////////////////////////



// For inserting into the database use later.
//$pilot = $_POST['pilot'];
  /*

  $email = $_POST['email'];
  $pilotPassword = $_POST['pilotPassword'];
  */
  
  function addPilot ($connection, $pilot, $email, $pilotPassword) {
  
  
  $sql = "INSERT INTO Player (PlayerID, PilotName, email, Password, MatchesPlayed, TotalDeaths, TotalKills, TeamID, LevelRating, GameID, SeasonID) VALUES (NULL,'$pilot', '$email', '$pilotPassword', NULL, NULL, NULL, NULL, NULL, NULL, NULL)";
  
  
  
  if ($connection->query($sql) === TRUE) {
     
      
      header("Location: http://descentnexus.com/index.html");
      exit();
      
  } else {
    echo "Error: " . $sql . "<br>" . $connection->error;
  }
  
  
  mysqli_close($connection);
  
  }
  
  
  
  function getPilot(){
  
    include 'DBConnector.php';
    
    
      $sql = "SELECT PilotName FROM Player ";
      $result = $connection -> query($sql); 
    
      $pilots=[];
    
    
        if ($result->num_rows>0) {
          while($row = $result ->fetch_assoc()) {
          $pilots[] = $row;
        }
    
        $connection ->close();
        
      }
    
    
      
      $pilots=print_r(getPilot());
      return $pilots;


    
    }

    
