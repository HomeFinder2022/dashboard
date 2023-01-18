<?php

require_once 'connection.php';

  class Evento{

    function infoEvento(){

      global $conn;
    
      $sql = "SELECT *
      FROM eventos";
    
      $id = "";
      $title = "";
      $description = "";
      $start_datetime = "";
      $end_datetime = "";
    
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
              $id = $row['id'];
              $title = $row['title'];
              $description = $row['description'];
              $start_datetime = $row['start_datetime'];
              $end_datetime = $row['end_datetime'];
          }
      } 
      $conn->close();
  
      $res = array("id" => $id, "title"=>$title, "description"=>$description, "start_datetime"=>$start_datetime, "end_datetime"=>$end_datetime);
      $res = json_encode($res);
    
      return $res;
    }

  }



