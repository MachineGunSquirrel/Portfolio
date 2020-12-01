<!-- Navbar -->

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#">Home</a>
  <a href="#">Projects</a>
  <a href="#">Contact</a>

  <!-- Navbar Animation Javascript -->
    <script>
      function openNav() {
        document.getElementById("mySidenav").style.width = "200px";
        document.getElementById("ham").style.opacity = "0";
      }

      function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("ham").style.opacity = "1";
      }
    </script>

  <!-- Social Media Links -->
    <div class='social'>
      <!-- Twitter Follow Button -->
        <a href="https://twitter.com/PytSkee?ref_src=twsrc%5Etfw" 
          class="twitter-follow-button" 
          data-size="large" data-show-screen-name="false" data-dnt="true" data-show-count="false">
            Follow @PytSkee</a><br>
            <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
      <!-- Twitter Follow Button -->
      <!-- Linkedin Follow Button -->
        <script src="https://platform.linkedin.com/in.js" type="text/javascript"> lang: en_US</script>
        <script type="IN/FollowCompany" data-id="1337" data-counter="bottom"></script>
      <!-- Linkedin Follow Button -->
    </div>

</div>
