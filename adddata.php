<?php include('includes/navbar.php') ?> 
<center>
  <h1>Add Data</h1>
</center>

<div class="container">
  <div class="row">
    <div class="col-md-12">
    <div class="card-header">
      <h4>
        Add Data
        <a href="index.php" class="btn btn-danger float-end">Back</a>
      </h4>
    </div>
      <div class="card-body">
      <form action="code.php" method = "POST">
        <div class="form-group mb-3">
          <label for="">First Name</label>
          <input type="text" name="fname" class="form-control">
        </div>

        <div class="form-group mb-3">
          <label for="">Last Name</label>
          <input type="text" name="lname" class="form-control">
        </div>

        <div class="form-group mb-3">
          <label for="">Name of University</label>
          <input type="text" name="uname" class="form-control">
        </div>
        <div class="form-group mb-3">
            <button type="submit" class="btn btn-primary float-end" name="storing-allnamadata">Add Data</button>
        </div>
      </form> 
      </div>
    </div>
  </div>
</div>