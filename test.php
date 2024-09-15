<?php


/*

function getPilot(){
    

    include 'DBConnector.php';
    
    
    
  
    
    
    
    
    
    
    
     
    
    
    //create the conneciton
   
    
      $sql = "SELECT PilotName FROM Player";
      $result = $connection -> query($sql); 
    
      $pilots=[];
    
    
        if ($result->num_rows>0) {
          while($row = $result ->fetch_assoc()) {
          $pilots[] = $row;
        }
    
        $connection ->close();
        
      }
    
    
      
      $pilots =implode($pilots);
      echo $pilots;
    
    };


*/
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

          foreach ($pilot as $pilots):;
        
        
          
           $pilotString = json_encode($pilots);
            echo $pilotString;

        };

    //echo getPilot();
?>




