<?php
$page_title = "Admin Login";
include "../admin/header_login.php";
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
<form method="post" action="index.php" name="loginform">
    <br/>
    <input type="text" name="username" class="form-control" placeholder="Reg Number" required/><br/>
    <input type="password" name="password" class="form-control" placeholder="Password" required/><br/>
    
    <button type="submit" name="loginadmin" class="btn btn-primary">Login</button><br/><br/>
    
</form>

<?php
include "footer.php";
?>
