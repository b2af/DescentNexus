<?php



Class ReportHandler{


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
    //The DBConnector.php contains the logic to connect to the database. You can just include it here so we don't have to write the same code twice. 
    include 'DBConnector.php';
    
    //This is the SQL statement to get all the players from the database. 
      $sql = "SELECT PilotName FROM Player ";
    // contains the result of the all the pilots. 
      $result = $connection -> query($sql); 
      //Establishes the pilot array.      
      $pilots=[];
    
        //If the result is greater than 0,  continue. 
        if ($result->num_rows>0) {
          //As long as the result has something to pull from,  continue 
          while($row = $result ->fetch_assoc()) {
            {
              //PilotName is being pulled from the database and its being feed to the pilots array. 
              $pilots[] = $row['PilotName'];
              
            }
            
        }
    
        $connection ->close();
        
      }https://prod.liveshare.vsengsaas.visualstudio.com/join?366777A228E5BCF1DFEEC89A1D8D6EC6D20B
    
    
      //The $Pilots now contain all the pilotsnames from the database. The foreach spilts them into individual names. 
      foreach ($pilots as $pilotName):
  
        //print each indivdual name.
       echo $pilotName . "<br>";
  
        endforeach;
      
        
     
      
  
    
    }
    
}
    

  
