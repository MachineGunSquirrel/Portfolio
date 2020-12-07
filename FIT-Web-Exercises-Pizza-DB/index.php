<?php
    //start session
    include "./View/header.php";
    include "./Controller/login.php";
?>
    <div class='form-container box-shadow'>

        <!-- Home Button to navigate to main page of site -->
            <form action="main-page.php">
                <button id='btn-home' class='btn btn-success'>Home</button>
            </form> 
        <!-- Home Button -->


        <form action='' method="post">
            <!-- Username and Password inputs -->
                <label for="usernameInput">Username</label> 
                <input id="usernameInput" class='form-control' name='username'/><br>

                <label for="passwordInput">Password</label> 
                <input id="passwordInput" class='form-control' type="password" name='password'/><br>
            <!-- Username and Password inputs -->

            <!-- Login and Logout buttons -->
                <button class='btn btn-primary' type="submit" name='login'>Login</button>
                <button class='btn btn-secondary' type="submit" name="logout">Logout</button><br>
            <!-- Login and Logout buttons -->

            <!-- Message Display (For showing if login was successful/error if not/perhaps even if a page was denied)-->
                <p id='form-sub-message'></p>
            <!-- Message Display -->
        </form> 
    </div>  


<?php
    
    include "./View/footer.php";
?>