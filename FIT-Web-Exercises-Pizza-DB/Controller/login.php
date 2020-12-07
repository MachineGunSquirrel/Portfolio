<?php
    session_start();
  //if a login has just been clicked attempt to login user
  if(isset($_POST['login'])){
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['password'] = $_POST['password'];
    if($_SESSION['username'] == 'XxX_42069_XxX' && $_SESSION['password'] == 'uwotm80'){
      $_SESSION['sessionValid'] = true;
      header("Location: ./main-page.php");
    }
    else{
      echo"
      <script>
      document.getElementById('form-sub-message').innerHTML = 'Validation Failure. Please try again.';
      </script>";
      session_destroy();
    }
  }
  else if(isset($_POST['logout'])){
    session_destroy();
  }

?>