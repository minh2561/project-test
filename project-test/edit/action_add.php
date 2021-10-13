<?php
    $id_msv = $_POST['addID'];
    $name_db = $_POST['addName'];
    $password_db = $_POST['addPass'];

    include "../config.php";

    $sql = "INSERT INTO thanhvien VALUES ('$id_msv','$name_db','$password_db')";
    $result = mysqli_query($conn, $sql);

    if($result >0){
        echo 'ok';
    }else{
        echo 'not ok';
    }

    mysqli_close($conn);
    ?>
<button type="submit" class="btn btn-primary" ><a href="../form.php" >quay lai</a> </button>