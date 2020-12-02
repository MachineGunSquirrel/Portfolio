<?php
  include './View/header.php';
  include './View/navbar.php';
?>

<script>document.getElementById("mySidenav").style.width = "200px";</script>

<span id='ham' style="font-size:30px;cursor:pointer;margin-top:5px;margin-left:15px;position:absolute;color:#CBCBCB;display:none" onclick="openNav()">&#9776;</span>

<!-- Bio div -->
  <div class='bio-grid'>

    <div class = 'bio'>
      <div class='bio-img'>
        <img src="./View/Public/Images/Profile.png" alt="" onclick="linkGithub()">
          <script>
            function linkGithub(){
              window.open("https://github.com/MachineGunSquirrel", "_blank");
            }
          </script>
      </div>
      <h2>I'm Peter, a Web Developer.</h2>
      <h1>I work with HTML, CSS, PHP, JavaScript, and Ajax to design websites and user interfaces.
      </h1>
    </div>

  </div>

<!-- Close page-grid div -->
  </div> 