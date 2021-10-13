<?php
    include '../config.php';
    session_start();
   

    if(isset($_POST['guidi'])){
        $user = $_POST['db_user'];
        $pass = $_POST['db_pass'];
    

        $sql = "SELECT * FROM user WHERE user.db_user='$user' AND user.db_pass='$pass'";
        echo $sql;
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result)>0){
            $_SESSION['sucess'] = $user;
            header("Location: ../index.php");
        }
    }
?>