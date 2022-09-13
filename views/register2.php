?php
//Page title
$page_title = "CUCU Register";
$page_heading = "Registration for Membership";

include_once "header.php";

// show potential errors / feedback (from registration object)
if (isset($registration)) {
    if ($registration->errors) {
        foreach ($registration->errors as $error) {
            echo $error;
        }
    }
    if ($registration->messages) {
        foreach ($registration->messages as $message) {
            echo $message;
        }
    }
}
?>

<!-- register form -->
<!-- <form method="post" action="register.php" name="registerform">

    <input type="text" name="regno" class="form-control" placeholder="Reg Number" required/><br/>
        <input type="text" name="fname" class="form-control" placeholder="First Name" required/><br/>
        <input type="text" name="sname" class="form-control" placeholder="Surname" required/><br/>
        <select class='form-control' name='yos'>
            <option value = 0.0>Select Year ...</option>
            <option value = 1.1>1.1</option>
            <option value = 1.2>1.2</option>
            <option value = 2.1>2.1</option>
        </select> <br/>
        <select class='form-control' name='course'>
            <option value = 0>Select Course ...</option>
            <option value = 1>CS</option>
            <option value = 2>Math</option>
            <option value = 3>Applied CS</option>
        </select> <br/>
        <input type="text" name="email" class="form-control" placeholder="Email" required/><br/>
        <input type="text" name="phone" class="form-control" placeholder="Phone" required/><br/>
        <select class='form-control' name='ministry'>
            <option value = 0>Select Ministries ...</option>
            <option value = 1>PW</option>
            <option value = 2>IT</option>
            <option value = 3>Editorial</option>
        </select> <br/>
        <select class='form-control' name='gender'>
            <option value = 0>Select Gender ...</option>
            <option value = 1>Male</option>
            <option value = 2>Female</option>
            <option value = 3>Rather not say</option>
        </select> <br/>
                
        <button type="submit" name="register" class="btn btn-primary">Register</button>

</form> -->

<!-- Form joined -->
<section class="p-5 bg-light" >
<div class="container">
<!-- <div class="h2 text-center pb-4">Registration for Membership</div> -->

<div class="px-2">
<form method="post" action="register.php" name="registerform" class="justify-content-center ">
    <div class="form-group">
        <label for="firstName">First Name</label>
        <input type="" class="form-control" name="fname" placeholder="Enter First Name">
      </div>   
      <div class="form-group">
        <label for="secondName">Second Name</label>
        <input type="" class="form-control" name="sname" placeholder="Enter Surname">
      </div>  
    <div class="form-group">
        <label for="regNoField">Registration Number</label>
        <input type="" class="form-control" name="regno" placeholder="Enter Reg Number">
      </div>
    <div class="form-group">
      <label for="emailfield">Email address</label>
      <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter email">
     
    </div>
    <div class="form-group">
        <label for="passField">Phone Number</label>
        <input type="text" class="form-control" name="phone" placeholder="Enter phone number">
      </div>
      <!-- <div class="form-group">
        <label for="courseField">Course</label>
        <input type="text" class="form-control" name="course" placeholder="Enter Your Course">
      </div> -->

      <div class="form-group dropdown">
        <label for="course">Course</label>
        <p class="text-secondary">Select your course of study</p>

        <select class="form-control form-select" id="course" name="course">
          <option value="1">Math</option>
          <option value="2">Cs</option>
          <option value="3">ACS</option>
          <option value="4">Bio</option>
          <option value="5">Bed Arts</option>
        </select>
      </div>
     
      <!-- <div class="form-group dropdown">
        <label for="joining_yr">Year you joined school:</label>
        <p class="text-secondary">Select the year that you joined school</p>
        <select class="form-control form-select" id="joining_yr" name="year_of_admission">
          <option>2016</option>
          <option>2017</option>
          <option>2018</option>
          <option>2019</option>
          <option>2020</option>
          <option>2021</option>
          <option>2022</option>
        </select>
      </div> -->

      <div class="form-group dropdown">
        <label for="yos">Year of Study</label>
        <p class="text-secondary">Select your year of study</p>

        <select class="form-control form-select" id="yos" name="yos">
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
        </select>
      </div>


      <div class="form-group">
        <label for="min">Ministry </label>
        <p class="text-secondary">Select the ministries you are in. Select none if not in any ministry</p>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="0" name="ministry[]" id="min">
            <label class="form-check-label" for="defaultCheck1">
                None
            </label>
          </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="1" name="ministry[]" id="Intercessory">
            <label class="form-check-label" for="Intercessory">
                Intercessory Ministry
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="2" name="ministry[]"  id="pnw">
            <label class="form-check-label" for="pnw">
                Praise and Worship Ministry
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="3" name="ministry[]"  id="choir">
            <label class="form-check-label" for="choir">
                Choir Ministry
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="4" name="ministry[]"  id="instrumentalists">
            <label class="form-check-label" for="instrumentalists">
                Instrumentalists Ministry
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="5" name="ministry[]"  id="ushering">
            <label class="form-check-label" for="ushering">
                Ushering Ministry
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="6" name="ministry[]"  id="catering">
            <label class="form-check-label" for="catering">
                Catering Ministry
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="7" name="ministry[]"  id="edit">
            <label class="form-check-label" for="edit">
                Editorial Ministry
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="8" name="ministry[]"  id="it">
            <label class="form-check-label" for="it">
                IT Ministry
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="9" name="ministry[]"  id="theatre">
            <label class="form-check-label" for="theatre">
                Theatre Ministry
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="10" name="ministry[]"  id="welfare">
            <label class="form-check-label" for="welfare">
                Welfare Ministry
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="11" name="ministry[]"  id="brothersMin">
            <label class="form-check-label" for="brothersMin">
                Brothers Ministry
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="12" name="ministry[]"  id="sistersMin">
            <label class="form-check-label" for="sistersMin">
                Sisters Ministry
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="13" name="ministry[]"  id="inReach">
            <label class="form-check-label" for="inReach">
                In reach Ministry
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="14" name="ministry[]"  id="outReach">
            <label class="form-check-label" for="outReach">
                Outreach Ministry
            </label>
          </div>
         
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="15" name="ministry[]"  id="treasury">
            <label class="form-check-label" for="treasury">
                Treasury Ministry
            </label>
          </div>
         <div class="form-check">
            <input class="form-check-input" type="checkbox" value="16" name="ministry[]"  id="publicity">
            <label class="form-check-label" for="publicity">
                Publicity Ministry
            </label>
          </div>
      </div>

      <div class="form-group dropdown">
        <label for="gender">Gender</label>
        <p class="text-secondary">Select your gender</p>

        <select class="form-control form-select" id="gender" name="gender">
            <option value = 1>Male</option>
            <option value = 2>Female</option>
            <option value = 3>Rather not say</option>
        </select>
      </div>
    
      <!-- Phone to be used for password -->


    <!-- <div class="form-group">
        <label for="pwd">Password</label>
        <input type="password" class="form-control" id="pwd" placeholder="Password">
      </div>
    <div class="form-group">
      <label for="confirm_pwd">Confirm Password</label>
      <input type="password" class="form-control" id="confirm_pwd" placeholder="Confirm Password">
    </div> -->


    <!-- <div class="form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div> -->
    <div class="text-center py-3">
        <button type="submit" name="register" class="btn btn-primary text-center">Register</button>
    </div>
   
  </form>
</div>
</div>
</section>

<!-- backlink -->
<a href="index.php">Back to Login Page</a>

<?php
include_once "footer.php";
?>
