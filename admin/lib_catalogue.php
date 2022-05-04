<?php

include('header.php');


?>
                              
                           
 <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">LIBRARY CATALOGUE</h6>

  </div>
<div class='card shadow mb-4'>
 
  <div class="card-body">
  <p class="m-0 font-weight-bold text-primary">Total Number of  Books: </p>

  <p>
      <?php
            //run query to display number of registrants in the table
      ?>
  </p>

    <div class="table-responsive">

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <?php
        // Replace this with sql code (we can consider doing CRUD for this later)
          $connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
          $query = 'SELECT * FROM lib_catalogue';
          $query_run = mysqli_query($connection,$query);

        ?>
      
        <thead>
          <tr>
            
            
            <th>Book Title</th>
            <th>Author</th>
            <th>Price </th>
            <th>Cover</th>
            
            
          </tr>
        </thead> 
        <tbody>
          <?php
          //edit this as per the table
            if (mysqli_num_rows($query_run) > 0) {
              while($row=mysqli_fetch_assoc($query_run))
              {
                 ?>
                <tr>
               
                <td><?php  echo $row['id'];  ?></td>
                <td><?php  echo $row['name'];?></td>
                <td><?php  echo $row['design'];   ?></td>                
                <td><?php  echo '<img src="upload/'.$row['images'].'" alt="image" width="100px" height="100px" > ' ?>  </td>
               
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