<?php
    include './header.php';
?>

<form action="" method="POST">
    <table class="tbl-30">
        <tr>
            <td>user: </td>
            <td>
                <input type="text" name="db_user">
            </td>
        </tr>
        <tr>
            <td>pass: </td>
            <td>
                <input type="text" name="db_pass">
            </td>
        </tr>

        <tr>
            <td colspan="2">
                <input type="submit" name="guidi" value="login" class="btn-secondary">
            </td>
        </tr>
    </table>
</form>

<?php
    include './config.php';
    session_start();
   

    if(isset($_POST['guidi'])){
        $user = $_POST['db_user'];
        $pass = $_POST['db_pass'];
    

        $sql = "SELECT * FROM user WHERE user.db_user='$user' AND user.db_pass='$pass'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result)>0){
            $_SESSION['sucess'] = $user;
            header("Location: ./form.php");
        }
    }
?>








