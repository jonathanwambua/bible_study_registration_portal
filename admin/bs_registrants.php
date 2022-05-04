<?php

include('header.php');
require_once('../config/db.php');

?>
                              
                           
 <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">BIBLE STUDY REGISTRANTS</h6>

  </div>
<div class='card shadow mb-4'>
 
  <div class="card-body">
  <p class="m-0 font-weight-bold text-primary">Total Number of Bible Study Registrants:

      <?php
        // Replace this code with sql query for bible study registrants
          $connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
          $query = 'SELECT * FROM bsregistration';
          $query_run = mysqli_query($connection,$query);
          $count = mysqli_num_rows($query_run);
          echo $count;
      ?>
      <br/><br/>
  </p>

    <div class="table-responsive">

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
      
        <thead>
          <tr>
            
            
            <th>Name</th>
            <th>Year</th>
            <th>Phone </th>
            <th>Pastor </th>
            
            
          </tr>
        </thead> 
        <tbody>
          <?php
          //edit this as per the table
            if ($count > 0) {
              while($row=mysqli_fetch_assoc($query_run))
              {
                 ?>
                <tr>
                
                <td><?php  echo $row['uname'];   ?></td>
                <td><?php  echo $row['yos'];   ?></td>
                <td><?php  echo $row['phone'];   ?></td>    
                <td><?php  echo $row['pastor'];   ?></td>    
               
              </tr>
                <?php    
                 
              }
            }
            else {
              echo "No record found";
            }

          ?>
         
        </tbody>

      </table>
    </div>


  </div>

</div>

<?php

include('footer.php');


?>