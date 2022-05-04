<?php

include('header.php');
require_once('../config/db.php');

?>
<script src="vendor/jquery/jquery.js"></script>
<script src="js/main.js"></script>

<div class="card-header py-3">
  <h6 class="m-0 font-weight-bold text-primary">BIBLE STUDY GROUPS</h6>
  <button id="export" class="btn btn-primary" onclick="table2csv()">Export</button>
</div>
<div class='card shadow mb-4'>
  <div class="card-body">
    <p class="m-0 font-weight-bold text-primary">Total Number of Bible Study Groups: 
      <?php
          // Connection to database.
            $connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
            $query = 'SELECT * FROM bsregistration';
            $query_run = mysqli_query($connection,$query);
            $reg_bs_members = mysqli_num_rows($query_run);
            $number_of_groups = ceil($reg_bs_members/8);
            echo $number_of_groups."<br/><br/>";
            
          ?>
    </p>

      <?php
          $member_info = array();
          
          while ($row_member =  mysqli_fetch_assoc($query_run)){
            $member_info[] = $row_member;
          }
          
          shuffle($member_info);

          $chunkedarray = array_chunk($member_info, 8);

          for($count = 0; $count < $number_of_groups; $count++){
            $groupmembers = $chunkedarray[$count];
            $group_number = $count+1;
            // print "<pre>";
            // print_r($groupmembers);
            echo 
            "<div class='table-responsive'>".
              "<table class='table table-bordered' id='dataTable' width='100%' cellspacing='0'>".
              
                "<thead>".
                "<tr><th colspan='4'>Group Number :  ". $group_number ."</th></tr>".
                  "<tr>".
                    "<th>Name</th>".
                    "<th>Year</th>".
                    "<th>Phone</th>".
                    "<th>Pastor</th>".
                  "</tr>".
                "</thead>".
                "<tbody>";

                  foreach ($groupmembers as $i => $row)
                    {
                      if($row['pastor']==1){
                        $row['pastor'] = "Yes";
                      }else{
                        $row['pastor'] = "No";
                      }
                      $td = "<tr><td>". $row['uname']. "</td> <td>". $row['yos']. "</td>".
                        "<td>". $row['phone']. "</td><td>".$row['pastor']. "</td></tr>";
                      echo $td;
                    }
                  
                echo "</tbody>".
              "</table>".
            "</div>";
          }
      ?>
  </div>
</div>

<?php

include('footer.php');


?>