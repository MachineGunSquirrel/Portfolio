<?php

  //start session
  session_start();

  //if a cart session to hold items does not exist
  if(!isset($_SESSION{'cart'})){
    //create session to be used
    $_SESSION['cart'] = array();
  }

  //if a cart has just been clicked add item to cart
  if(isset($_POST['code'])){
    //get info out of post
    $prodCode = $_POST['code'];
    $prodName = $_POST['name'];
    $prodImg = $_POST['img'];
    $prodPrice = $_POST['price'];

    //get cart array
    $cartArray = $_SESSION['cart'];

    //variable for storage index, set to next open index by default
    $storedIndex = count($cartArray);

    //loop through cart to see if this item has already been picked
    for($index = 0; $index < count($cartArray); $index++){
      //if item is already stored
      if($cartArray[$index]['code'] == $prodCode){
        $storedIndex = $index;
      }
    }

    //if this item has not been stored
    if(!isset($cartArray[$storedIndex]['code'])){
      //store item info
      $cartArray[$storedIndex]['code'] = $prodCode;
      $cartArray[$storedIndex]['name'] = $prodName;
      $cartArray[$storedIndex]['img'] = $prodImg;
      $cartArray[$storedIndex]['price'] = $prodPrice;

      //set quantity to 1
      $cartArray[$storedIndex]['qty'] = 1;
    }
    else{
      //just add 1 to qty
      $cartArray[$storedIndex]['qty'] += 1;
    }
    //add cartArray to cart session
    $_SESSION['cart'] = $cartArray;

    //clear the post for next input
    $_POST = array();
  }

?>