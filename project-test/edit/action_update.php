<?php
    $id = $_POST['upid'];
    $name_db = $_POST['upname'];
    $password_db = $_POST['uppass'];
    $STT = $_POST['id'];
    include "../config.php";

    $sql = "UPDATE thanhvien SET id_msv = '$id', name_db = '$name_db', pass_db = '$password_db' WHERE id_msv='$STT'";

    $result = mysqli_query($conn, $sql);
    if($result >0){
        echo 'ok';
    }else{
        echo 'not ok';
    }


    mysqli_close($conn);
    ?>
<button type="submit" class="btn btn-primary" ><a href="../index.php" >Back</a> </button>