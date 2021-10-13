<?php
    session_start();
    if(!isset($_SESSION['sucess'])){
        header("Location:../index.php");
    }
?>

<?php
  include"../header.php";
  include'../config.php';
  
    $id=$_GET['id'];
    $sql="SELECT * FROM thanhvien WHERE thanhvien.id_msv = $id";
    $result=mysqli_query($conn, $sql);
    if($result==true)
    {
        $count = mysqli_num_rows($result);
        if($count==1)
        {
            $row=mysqli_fetch_assoc($result);
            $id_msv = $row['id_msv'];
            $name_db = $row['name_db'];
            $password_db = $row['pass_db'];
        }
      }
?>


<form action="./action_update.php" method="POST">
    <table class="tbl-30">
        <tr>
            <td>ID_MSV: </td>
            <td>
                <input type="text" name="upid" value="<?php echo $id_msv; ?>">
            </td>
        </tr>
        <tr>
            <td>NAME: </td>
            <td>
                <input type="text" name="upname" value="<?php echo $name_db; ?>">
            </td>
        </tr>
        <tr>
            <td>PASS: </td>
            <td>
                <input type="text" name="uppass" value="<?php echo $password_db; ?>">
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <input type="submit" name="submit" value="Update Admin" class="btn-secondary">
            </td>
        </tr>
    </table>
</form>


