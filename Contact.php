<?php
  include './View/header.php';
  include './View/navbar.php';
  include './Controller/mail.php';
?>

<!-- Contact grid -->
  <div class='contact-grid'>
    <!-- Contact Form Div -->
      <div class='contact-form'>
        <!-- Form -->
          <label for="name" style='grid-row:1'>Name:</label>
            <input type="text" id="name" name="name" placeholder='John Doe' style='grid-row:1'>

          <label for="email"style='grid-row:2'>Email:</label>
            <input type="email" id="email" name="email" placeholder='email@host.com' style='grid-row:2'>

          <label for="msg" style='grid-row:3;grid-column:1/3;text-align:center;padding-bottom:0px;margin-bottom:0px;margin-top: 15px'>What can I do for you?</label>
            <textarea type="text" id="msg" name="msg"></textarea>
          
          <button onclick="contactSubmit(document.getElementById('name').value,
                           contactSubmit(document.getElementById('email').value,
                           contactSubmit(document.getElementById('msg').value
            ">Submit</button>
        <!-- Form -->
      </div>
    <!-- Contact Form -->
  </div>
<!-- Contact grid -->

<!-- Submit scripting -->
  <script>
    function contactSubmit(name, email, value){
      //send info to Contact.php

    }
  </script>
<!-- Submit scripting -->

<!-- Close page-grid div -->
  </div> 