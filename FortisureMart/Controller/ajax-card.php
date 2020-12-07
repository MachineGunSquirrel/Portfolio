<?php

  //update what's in cart
  include './update-cart.php';

  //print the new information to cart modal
  include './modal-display.php';

  //display number of items in the cart
  //declare total variable
  $itemCount = 0;

  //loop to see how many items are in cart
  for($index = 0; $index < count($_SESSION['cart']); $index++){
    //add item's quantity
    $itemCount += $_SESSION['cart'][$index]['qty'];
  }

  //display total to cart qty indicator
  echo "<script>  document.getElementById('items-in-cart').innerHTML = {$itemCount};  </script>"

?>