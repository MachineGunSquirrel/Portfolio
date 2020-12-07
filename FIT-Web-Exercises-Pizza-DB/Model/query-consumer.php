<?php
  class Consumer{
    public function __construct($db){
      $this->conn = $db;
    }

    public function addAttempt($data){
      
      //variables
        $name = $data['personName'];
        $slicesEaten = $data['slicesEaten'];
        $personComments = $data['personComments'];
      //variables

      $query = "INSERT INTO pizzatable
                (name, slices_eaten, comments)
        VALUES ('$name', '$slicesEaten', '$personComments');
      ";

      //prepares query statement
      $results = $this->conn->prepare($query);

      //execute statement
      $results->execute();

      //grab last ID created(last row insert)
      return $this->conn->lastInsertId();
    }
  }

?>