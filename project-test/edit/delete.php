<?php
  include"../header.php";
  include'../config.php';
  
?>

<?php
    session_start();
    if(!isset($_SESSION['sucess'])){
        header("Location:../index.php");
    }
?>

<form action="./action_del.php" method="post">
  <div class="mb-3 row">
    <label for="delID" class="col-sm-2 col-form-label">ID_MSV</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="delID">
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>



