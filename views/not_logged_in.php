<?php
$page_title = "Log In";
$page_heading = "Login To Your Account";
include "header_login.php";
// show potential errors / feedback (from login object)
if (isset($login)) {
    if ($login->errors) {
        foreach ($login->errors as $error) {
            echo $error;
        }
    }
    if ($login->messages) {
        foreach ($login->messages as $message) {
            echo $message;
        }
    }
}
?>

<!-- login form box -->

<section class="p-5 bg-light" >
    <div class="container login_div">
    <form method="post" action="index.php" name="loginform">
        
        <!-- Email input -->
        <div class="form-outline mb-4">
          <input type="text" name="username" id="email_login" class="form-control" />
          <label class="form-label" for="email_login">Registration Number</label>
        </div>
      
        <!-- Password input -->
        <div class="form-outline mb-4">
          <input type="password" name="password" id="pwd_" class="form-control" />
          <label class="form-label" for="pwd_">Password</label>
        </div>
      
    
       
      
        <!-- Submit button -->
        <div class="text-center">
        <button type="submit" name="login" class="btn btn-primary btn-block mb-4">Log in</button>
        </div>
        <!-- Register buttons -->
            <!-- 2 column grid layout for inline styling -->
        <div class="row mb-4">
            <div class="col d-flex justify-content-center">
              <div class="text-center">
                  <p>Not a member? <a href="register.php">Register</a></p>
                 
                </div>
              <!-- Checkbox -->
              <!-- <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                <label class="form-check-label" for="form2Example31"> Remember me </label>
              </div> -->
            </div>
        
            <div class="col">
              <!-- Simple link -->
              <a href="">Forgot password?</a>
            </div>
          </div>
        
      </form>
    </div>
</section>

<?php
include "footer.php";
?>
