<?php
    session_start();
    if(!isset($_SESSION['sessionValid'])){
        echo"
        <script>alert('session failed');</script>";
        header('Location: ./index.php');
    }

    include "./View/header.php";
    include "./View/navbar.php";
    include './Controller/db_conn.php';
    include './Controller/product-cards.php';
    include './Controller/ajax-calls.php';
    include './Model/query-pizza.php';

    $database = new Database();
    $db = $database->connect();

    $product = new Pizza($db);

    $productGet = $product->pizzaRead();

    include './Controller/form-submit.php';


?> 

<!-- Insert New User -->
    <div class='insert-user-form-container'>
        <!-- Form -->
            <div class='border-shadow'>
                <h2>Add New Person</h2>
                    <!-- Persons name & slices eaten -->
                        <div class="form-row">
                            <div class="col">
                                <label for="personName">Name</label> 
                                <input id="personName" type='text' class='form-control' placeholder='John S.'/><br>
                            </div>
                            <div class="col">
                                <label for="slicesEaten">Slices Eaten</label> 
                                <input id="slicesEaten" type='number' class='form-control'/><br>
                            </div>
                        </div>
                    <!-- Persons name & slices eaten -->

                    <!-- Comments -->
                        <label for="personComments">Comments</label> 
                        <textarea id='personComments' type="textarea" class="form-control"></textarea>
                    <!-- Comments -->

                    <!-- Form submit button -->
                        <button class='btn btn-primary' name='submitForm' onclick="ajaxAddPerson(document.getElementById('personName').value,  
                                                                                                 document.getElementById('slicesEaten').value, 
                                                                                                 document.getElementById('personComments').value)">
                        Add Person</button>

                    <!-- Message Display -->
                        <p id='form-sub-message'></p>
            </div>
        <!-- Form -->
    </div>
<!-- Insert New User -->


<!-- Displays person and pizza slices eaten -->
    <div>
        <!-- Loops though people (db rows) -->
        <h2>Pizza Consoomers</h2>

            <div class='pizza-time-grid' id="pizza-time">

                    <?php
                    
                        $colNum = 2;
                        
                        while($row = $productGet->fetch(PDO::FETCH_ASSOC)){
                            //variables
                                $name = $row['name'];
                                $slices = $row['slices_eaten'];
                                $comment = $row['comments'];
                                if(is_null($comment) == false){
                                    $comment = "\"".$comment."\"";  
                                }
                            //variables 

                            makePizzaCard($name, $slices, $comment, $colNum);
                            $colNum++;
                        }
                    ?>

            </div>

            <!-- Put your people cards here, they can be listed vertically -->


        <!-- Loops though people (db rows) -->
    </div>
<!-- Displays person and pizza slices eaten -->

<?php include "./View/footer.php"; ?>