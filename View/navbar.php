<!-- Navbar -->

<div id="mySidenav" class="sidenav">
  <!-- <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a> -->
  <a href="./Index.php" onclick='showNavButton()'>Home</a>
  <a href="./Projects.php" onclick='showNavButton()'>Projects</a>
  <a href="./Contact.php">Contact</a>

  <!-- Navbar Animation Javascript -->
    <script>
      // function showNavButton(){
        // var element = document.getElementById('mySidenav');
          // style = window.getComputedStyle(element);
          // width = style.getPropertyValue('width');
          // width = document.getElementById('mySidenav').style.width
          // console.log(document.getElementById('mySidenav').style.width);
          //   if(width == '200px'){
          //     document.getElementById("ham").style.opacity = "0";
          //     document.getElementById("ham").style.display = "none";
          //   }
            // else if(width == '0'){
            // else{
            //   document.getElementById("ham").style.opacity = "1";
            //   document.getElementById("ham").style.display = "block";
            // }
      // }

      function openNav() {
        document.getElementById("mySidenav").style.width = "200px";
        document.getElementById("ham").style.display = "none";
        document.getElementById("cross").style.display = "block";
        // showNavButton()
      }

      function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("ham").style.display = "block";
        document.getElementById("cross").style.display = "none";
        // showNavButton()
      }
    </script>

  <!-- Social Media Links -->
    <div class='social'>
      <!-- Twitter Follow Button -->
        <div class='twitter'>
          <a href="https://twitter.com/PytSkee?ref_src=twsrc%5Etfw" 
            class="twitter-follow-button" 
            data-size="large" data-show-screen-name="false" data-dnt="true" data-show-count="false">
              Follow @PytSkee</a><br>
              <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
      <!-- Twitter Follow Button -->
      <!-- Linkedin Follow Button -->
        <div class='linkedIn'>
          <!-- <div class='linkedIn-a'> -->
            <script src="https://platform.linkedin.com/in.js" type="text/javascript"> lang: en_US</script>
            <script type="IN/FollowCompany" data-id="1337" data-counter="bottom"></script>
          <!-- </div> -->
        </div>
      <!-- Linkedin Follow Button -->
    </div>

</div>

<!-- Navbar Open Button -->
<span id='ham' 
      style="font-size:25px;font-weight:lighter;cursor:pointer;margin-top:10px;margin-left:17px;position:absolute;color:white;display:block" 
      onclick="openNav()">&#9776;</span>
<span id='cross' 
      style="font-size:40px;font-weight:lighter;cursor:pointer;margin-top:-5px;margin-left:15px;position:absolute;color:white;display:none;z-index:1" 
      onclick="closeNav()">&times;</span>
