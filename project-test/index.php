<?php
    include"header.php";
?>
<main>   
    <a href="./edit/add.php"><i class="fas fa-user-plus"></i></a>
    <table class="table">
    <thead>
        <tr>
            <th scope="col">ID_MSV</th>
            <th scope="col">Name</th>
            <th scope="col">Pass</th>
            <th scope="col">Update</th>
            <th scope="col">Delete</th>
            </tr>
    </thead>
    <tbody>
        <!-- <form method="post"> -->
        <?php
            include './config.php';
            $sql = "SELECT * FROM thanhvien";
            $result = mysqli_query($conn, $sql); 
            if(mysqli_num_rows($result)>0) {
                while($row = mysqli_fetch_assoc($result)) {
                    echo '<tr>';
                    echo '<th scope="row">'.$row['id_msv'].'</th>';
                    echo '<td>'.$row['name_db'].'</td>';
                    echo '<td>'.$row['pass_db'].'</td>';
                    echo '<td><a href="./edit/update.php?id='.$row['id_msv'].'"><i class="fas fa-user-edit"></i></a></td>';
                    echo '<td><a href="./edit/action_delete.php?id='.$row['id_msv'].'"><i class="fas fa-user-minus"></i></a></td>';
                    echo '</tr>';
                }                    
            }
        ?>
        <!-- </form> -->
    </tbody>
    </table>
</main>