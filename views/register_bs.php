<?php
    $page_title ="Bible Study";
    $page_heading = "Bible Study Registration";
    // include the configs for db
    require_once("../config/db.php");
    
    require_once("../classes/Registrationbs.php");

    // load the login class
    require_once("../classes/Login.php");

    $login = new Login();
    include "header_login.php";
    // Is user already logged in?
    if ($login->isUserLoggedIn() == true) {
        
?>
    <?php
        
        $registerbs = new Registrationbs();
       
    ?>

    <div>
        <section class="p-2  form_container d-flex aligns-items-center justify-content-center bg-light" > 
            <form method="POST" action="" name="registerbsform" class="align-items-center justify-content-center lighter-grey p-2">
                <p>Volunteer as a Bible Study Pastor.</p>
                <label>
                    <input class="checked" type="radio" name="radio" value="1" required>Yes
                </label>
                <label>
                    <input type="radio" name="radio" value="0" required>No
                </label>
                <!-- Submit button -->
                <div class="text-center p-5">
                <button type="submit" name="registerbs" class="btn btn-dark text-light btn-block mb-4">Register for Bible Study</button>
                </div>
                <!-- Register buttons -->
                <!-- 2 column grid layout for inline styling -->
            </form>
            
        </section>
        <section class="p-3  form_container d-flex aligns-items-center justify-content-center" >
            <a href="../index.php"><button class = "btn btn-primary mb-2">Back</button></a>
        </section>

        <section class="p-3 d-flex aligns-items-center justify-content-center" >
            <a href="../index.php?userlogout"><button class = "btn btn-primary mb-2">Logout</button></a>
        </section>
        
    </div>

<?php

    }

include_once "footer.php";
?>