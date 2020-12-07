<?php
class Product {

  public function __construct($db){
    $this->conn = $db;
  }

  function prodRead(){
    //select all products from db
    $query = "SELECT * FROM products";
    //prepare query statement
    $stmt = $this->conn->prepare($query);
    //execute query
    $stmt->execute();
    //return values
    return $stmt;
  }
}

?>