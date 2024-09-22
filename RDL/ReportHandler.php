<?php



Class ReportHandler{

 
/////////////////////////SQL insert to database here//////////////////////////////////////////////////////



  
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
    include '../DBConnector.php';
    
    //This is the SQL statement to get all the players from the database. 
      $sql = "SELECT PilotName  FROM Player ";
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
              $pilots[] = $row;
              
            }
           
    
      

      }

      //Close the database
      $connection ->close();

      //Returns an array of pilots
      return $pilots;
    
    
        
     
      
        
    
    }
  }



  function SubmitReport()
  {

     //TODO: #13 Must fix log in system in order to fix report page.  
    include '../DBConnector.php';
   
    //All the fields on the report page. 
    $PilotName = htmlspecialchars($_POST['PilotName']);
    $WinnerScore = htmlspecialchars($_POST['WinnerScore']);
    $WinnerSuicides = htmlspecialchars($_POST['WinnerSuicides']);
     $LoserSuicides = htmlspecialchars($_POST['LoserSuicides']);
     $LoserScore = htmlspecialchars($_POST['LoserScore']);
     $Level = htmlspecialchars($_POST['Level']);
     $RecordingLink = htmlspecialchars($_POST['RecordingLink']);
     $TrackerLink= htmlspecialchars($_POST['TrackerLink']);
     $Comments= htmlspecialchars($_POST['Comments']);
 

    

      //If the server recieves a request method of 'POST contiue. 
    if($_SERVER['REQUEST_METHOD'] == 'POST') {

      //echo var_dump($_POST); Used for trouble shooting purposes. 
      
      //SQL statement for to insert pilot in the match table. 

      $sql = "INSERT INTO `Match` (Pilot, WinnerScore) VALUES ('$PilotName', '$WinnerScore')";
      //TODO:Put #14 in input validation for these text fields: Use as references: https://tryphp.w3schools.com/showphp.php?filename=demo_form_validation_required


        //the error handleing for the new record 
        if ($connection->query($sql) === TRUE) {
          echo "New record created successfully";
        } else {
          echo "Error: " . $sql . "<br>" . $connection->error;
        }
        
        $connection->close();
    
        
    }

   
    
    }

    


 
  }


  if ($_SERVER['REQUEST_METHOD'] == 'POST')
  {
    $reportHandler = new ReportHandler();
  
  // Call the SubmitReport method from the instance
    $reportHandler->SubmitReport();
    
  }



