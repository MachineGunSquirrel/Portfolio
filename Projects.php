<?php
  include './View/header.php';
  include './View/navbar.php';
?>
<span id='ham' style="font-size:30px;cursor:pointer;margin-top:5px;margin-left:15px;position:absolute;color:#CBCBCB" onclick="openNav()">&#9776;</span>

<!-- Projects Div -->
  <div class='projects-grid'>
    <div class='link-container'>
      <div style="background-image: url('./View/Public/Images/flag-background.jpg');
                  background-size: 100vw;">
        <h1 onclick="document.getElementById('demo').src = './Great-American-Shooting-Sports/Index.php'"
          style='text-align: center; 
                 color:#ffffff; 
                 font-weight: bold; 
                 font-size: 40px; 
                 font-family: century Gothic, CenturyGothic, sans-serif;'
          >Great American<br>Shooting Sports
        </h1>
      </div>
      <div style='background-color: #5DE1D9;'>
        <a onclick="document.getElementById('demo').src = './FortisureMart/index.php'"
           style='text-align: center; 
                  color:#ffffff; 
                  font-weight: bold; 
                  font-size: 46px; 
                  font-family: century Gothic, CenturyGothic, sans-serif;'>
          <h1 style='font-weight:bold;font-size:40px;'>
              <span style='color: #3B3A6D;'
                >Fortisure</span>
              <span style='color: #9F1224;'
                >Mart</span>
          </h1>
        </a>
      </div>

    </div>
    <div class='frame-container'>
      <iframe id='demo' frameborder="0"></iframe>
    </div>
    <div class='description'>
      <h1>Click a title to demo the site.</h1>
    </div>


  </div>

<!-- Close page-grid div -->
  </div> 