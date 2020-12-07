<?php

  include './db_conn.php';

  //print the new information to cart modal
  include '../Model/query-consumer.php';
  include '../Model/query-pizza.php';
  include './product-cards.php';

             
  $database = new Database();
  $db = $database->connect();

  $data = filter_var_array($_POST, FILTER_SANITIZE_STRING);

  $product = new Consumer($db);
  $product->addAttempt($data);

  $product = new Pizza($db);
  $productGet = $product->pizzaRead();

  $colNum = 2;
  
  while($row = $productGet->fetch(PDO::FETCH_ASSOC)){
      //variables
          $name = $row['name'];
          $slices = $row['slices_eaten'];
          $comment = $row['comments'];
          if(is_null($comment) == false){
              $comment = "\"".$comment."\"";  
          }
      //variables 

      makePizzaCard($name, $slices, $comment, $colNum);
      $colNum++;
  }

  

?>