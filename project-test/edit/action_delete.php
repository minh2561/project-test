<?php
    $id_msv = $_GET['id'];

    include "../config.php";


    // echo $sql;
    $sql = "DELETE FROM thanhvien WHERE thanhvien.id_msv = $id_msv";
    $result = mysqli_query($conn, $sql);

    if($result >0){
        echo 'ok';
    }else{
        echo 'not ok';
    }

    mysqli_close($conn);
    ?>
<button type="submit" class="btn btn-primary" ><a href="../form.php" >quay lai</a> </button>