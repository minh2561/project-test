<?php
    session_start();
    if(isset($_SESSION['sucess'])){
        unset($_SESSION['sucess']);
        header("Location:../index.php");
    }
    include"header.php";
?>