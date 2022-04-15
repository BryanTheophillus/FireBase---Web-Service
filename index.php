<?php 
session_start();
include('includes/navbar.php') 
?> 
<center>
  <h1>Data Center</h1>
</center>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <?php
        if(isset($_SESSION['status'])) {
          echo"<h5 class='alert alert-success'>".$_SESSION['status']."</h5>";
          unset($_SESSION['status']);
        }
      ?>
      <div class=card>
        <div class="card-header">
          <h4>
            Data Center Mahasiswa
<!--             <a href="adddata.php" class="btn btn-primary float-end">Add Data</a> -->
          </h4>
        </div>
          <div class="card-body">
            <table class="table table-hover">
              <thead >
                <tr>
                  <th>No</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Nama University</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  include('dbcon.php');
                  $ref_table="Data";
$fetchdata = $database->getReference($ref_table)->getValue();

if($fetchdata > 0) {
  $i=1;
  foreach($fetchdata as $key => $row) {
    ?>
    <tr>
      <td><?=$i++;?></td>
      <td><?=$row['fname'];?></td>
      <td><?=$row['lname'];?></td>
      <td><?=$row['uname'];?></td>
    </tr>
    <?php
  }
}else {
  ?>
    <tr>
      <td colspan="7">No Record Found 
      </td>
    </tr>
                <?php
}
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>