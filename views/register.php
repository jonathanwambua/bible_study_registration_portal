<?php
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
          <option value="1">Certificate in computer Applications(Computer Applications)</option>
          <option value="2">Cerificate in Procurement and Logistics Management</option>
          <option value="3">Bachelor of Science  Applied Computer Science</option>
          <option value="4">Bachelor of Science Computer Science</option>
          <option value="5">Bed Arts</option>
          <option value="6">Bachelor of Science Agicultural Extention and Education</option>
      <option value="7">Certificate in Animal Health and Production</option>
      <option value ="8">Bachelor of Laws</option>
      <option value="9">Bachelor of Science Electronics and Electrical Engeneering</option>
      <option value ="10">Bachelor of Tourism and Hotel Management</option>
      <option value="11">Bachelor of Science Environmental Science</option>
      <option value ="12">Bachelor Science in Natural Resource Management</option>
      <option value="13">Bachelor of Science General</option>
   <option value ="14">Bachelor of Agriculture</option>
      <option value="15">Bachelor of Science in Worldlife Enterprice and Management</option>
      <option value ="16">Bachelor of Agriculture (Animal Science)(Agriculture)</option>
      <option value="17">Bachelor of science(biochemistry)(biology)</option>
    <option value ="18">Bachelor of Arts criminology(all arts subjects)</option>
    <option value="19">Bachelor of Science Nursing Sciences</option>
    <option value="20">Bachelor of Science Nursing</option>
    <option value="21">bachelor of Science Food Science and Technology</option>
    <option value="22">Bachelor of Science Psychology</option>
    <option value="23">Bachelor of Science Acturial Science</option>
    <option value="24">Bachelor of Science in Environmental Sciences</option>
    <option value="25">Bachelor of arts linguistics literature and Sociology</option>
    <option value="26">Bachelor of Education in Science</option>
    <option value="27">Diploma in Procurement and Logistics management</option>
    <option value="28">Diploma in Horticulture</option>
    <option value="29">Diploma in Agriculture and Rural Development</option>
    <option value="30">Diploma in Computer Science</option>
    <option value="31">Bachelor of Enterpreneurship</option>
    <option value="32">Bachelor of Commerce</option>
    <option value="33">Bachelor of Agribusiness Management</option>
    <option value="34">Ba Community Development(Humanities Education)</option>
    <option value="35">Bachelor of Science (Mathematics)</option>
    <option value="36">Bachelor of Science Biostatistics</option>
    <option value="37">Bachelor of Science Acturial Science</option>
    <option value="38">Bachelor of Enterpreneurship and Small business management</option>
    <option value="39">Bachelor of Arts Criminology and Security studies</option>
    <option value="40">Bachelor of Arts Economics and Sociology</option>
    <option value="41">Bachelor of Science in Community Development</option>
    <option value="42">Certificate in French</option>
    <option value="43">Certificate in Community Development</option>
    <option value="44">Certificate in Conflict Management and Peace studies</option>
    <option value="45">Certificate in Public Relations</option>
    <option value="46">Certificate in Woodwork Technology</option>
    <option value="47">Advanced certificate in Software Engineering</option>
    <option value="48">Certificate in Hospitality and Tourism</option>
    <option value="49">Certificate in Environmental Impact Assessment</option>
    <option value="50">Certificate in Tree Germplasm Technology and Nursery Technology</option>
    <option value="51">Certificate in Sales and Marketing</option>
    <option value="52">Certificate in Business Management</option>
    <option value="53">Certificate in Ecotourism and Hospitality Management</option>
    <option value="54">Bachelor of Science Agricultural Economics</option>
    <option value="55">Diploma in Journalism and Mass communication</option>
    <option value="56">Diploma in Education, Secondary option</option>
    <option value="57">Diploma in Education, Primay option</option>
    <option value="58">Diploma in Farm Management</option>
    <option value="59">Diploma in Guidance and Counselling</option>
    <option value="60">Diploma in Ecotourism and Hospitality Management</option>
    <option value="61">Diploma in Tourism and Hotel Management</option>
    <option value="62">Diploma in Early Childhood Education</option>
    <option value="63">Diploma in Meat Science and Technology</option>
    <option value="64">Diploma in Animal health and Production</option>
    <option value="65">Diploma in Criminology and Forensic Science</option>
    <option value="66">Diploma in Business Management</option>
    <option value="67">Diploma in Human Resource management</option>
    <option value="68">Diploma in Wildlife Management</option>
    <option value="69">Diploma in Farm Resource Management</option>
    <option value="70">Bachelor of Arts in Communication Studies</option>
     <option value="71">Bachelor of Arts in Journalism and Mass Communication</option>
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
                Creative Ministry
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
