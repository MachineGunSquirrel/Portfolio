<?php
  include './View/header.php';
  include './View/navbar.php';
?>

<!-- Projects Div -->
  <div class='projects-grid'>
    <div class='link-container'>
      <!-- GASS -->
        <div style="background-image: url('./View/Public/Images/flag-background.jpg');
                    background-size: cover;">
          <h1 onclick="document.getElementById('demo').src = './Great-American-Shooting-Sports/Index.php'"
            style='text-align: center; 
                  color:#ffffff; 
                  font-weight: bold; 
                  font-size: 40px; 
                  text-shadow: 2px 2px 5px black;
                  font-family: century Gothic, CenturyGothic, sans-serif;'
            >Great American<br>Shooting Sports
          </h1>
        </div>
      <!-- GASS -->
      <!-- FortisureMart -->
        <div style='background-color: #5DE1D9;'>
          <a onclick="document.getElementById('demo').src = './FortisureMart/index.php'"
            style='text-align: center; 
                    color:#ffffff; 
                    font-weight: bold; 
                    font-size: 46px; 
                    font-family: century Gothic, CenturyGothic, sans-serif;'>
            <h1 style='font-weight:bold;font-size:40px;
                       padding-top: 25px'>
                <span style='color: #3B3A6D;'
                  >Fortisure</span>
                <span style='color: #9F1224;'
                  >Mart</span>
            </h1>
          </a>
        </div>
      <!-- FortisureMart -->
      <!-- Pizza-DB -->
        <div style='background-color: #d2bf98;'>
          <a onclick="document.getElementById('demo').src = './FIT-Web-Exercises-Pizza-DB/main-page.php'"
            ><h1 style='color: #801a17; 
                        font-size: 52px;
                        font-weight: 700;
                        font-family: century Gothic, CenturyGothic, sans-serif;
                        text-align: center;
                        padding-top: 20px'>PizzaDB</h1>
          </a>
        </div>
      <!-- Pizza-DB -->

    </div>
    <div class='frame-container'>
      <iframe id='demo' frameborder="0"></iframe>
    </div>
    <div class='description'>
      <h1 onclick="document.getElementById('demo').src = ''">Click a title to demo the site. Click here to close the demo.</h1>
    </div>


  </div>

<!-- Close page-grid div -->
  </div> 