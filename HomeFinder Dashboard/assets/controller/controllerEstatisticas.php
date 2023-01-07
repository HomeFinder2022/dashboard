<?php

require_once 'connection.php';

  class Estatistica{

   

    function getStat(){

      global $conn;
    
      $sql = "SELECT precovenda, idimovel
      FROM imoveisvenda";
    
      // $preco = "";
      // $imovel = "";
   
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
              // $preco = $row['precovenda'];
              // $imovel = $row['idimovel'];
              $data = $row;
                
          
            
          }
      } 
      $conn->close();
  
      $res = array($row);
      $res = json_encode($res);
    
      return $res;
    }


    }




