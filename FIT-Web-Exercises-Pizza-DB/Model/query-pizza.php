<?php
class Pizza {

  public function __construct($db){
    $this->conn = $db;
  }

  function pizzaRead(){
    //select all products from db
    $query = "SELECT * FROM pizzatable ORDER BY slices_eaten DESC";
    //prepare query statement
    $stmt = $this->conn->prepare($query);
    //execute query
    $stmt->execute();
    //return values
    return $stmt;
  }
}

?>