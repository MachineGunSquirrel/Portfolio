<!-- Header & Navbar -->
  <?php
    include './View/header.php';
    include './View/navbar.php';
  ?>
  <script>
    openNav();
  </script>
<!-- Header & Navbar -->

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
        <div class='bio-buttons'>
        <button onclick="document.location='./Projects.php'"
                  style='grid-column:2'>Projects</button>
          <button onclick="document.location='./Contact.php'"
                  style='grid-column:4'>Contact</button>
        </div>
      </div>

  </div>

<!-- Close page-grid div -->
  </div> 