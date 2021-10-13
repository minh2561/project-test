<?php
  include"../header.php";
  include'../config.php';
?>

<form action="action_add.php" method="post">
  <div class="mb-3 row">
    <label for="addID" class="col-sm-2 col-form-label">ID_MSV</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="addID" name="addID">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="addName" class="col-sm-2 col-form-label">NAME</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="addName" name="addName">
    </div>
  </div> 
  <div class="mb-3 row">
    <label for="addPass" class="col-sm-2 col-form-label">PASS</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="addPass" name="addPass">
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>