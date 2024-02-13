<?php
include("./includes/header.php");
include("./includes/functions.php");
include("./includes/db_conn.php");

?>

<div class="container">
    <table class="table table-bordered table-striped table-hover">
    <thead class="table-dark">
        <tr>
        <th scope="col">ID</th>
        <th scope="col">User Name</th>
        </tr>
    </thead>
        <tbody>
            <?php
            $fetch_data = "SELECT reg_id,user_name FROM reg_users";
            $run_fetch_data = mysqli_query($conn, $fetch_data);

            if(mysqli_num_rows($run_fetch_data) > 0) {
                while($row = mysqli_fetch_assoc($run_fetch_data)){
                    ?>
                    <tr>
                        <th scope="row"><?php echo $row['reg_id']; ?></th>
                            <td><?php echo $row['user_name']; ?></td>
                        </tr>
                <?php
                }
            } else {
                echo "No Record Found !!";
            }
            
            ?>
        </tbody>
    </table>
</div>

<?php
include("./includes/footer.php");
?>