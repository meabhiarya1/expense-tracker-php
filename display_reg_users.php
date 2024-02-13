<?php
include("./includes/header.php");
include("./includes/functions.php");
include("./includes/db_conn.php");

?>

<div class="container">
    <div class="row">
        <div class="col-12 py-5">
            <h1 class="text-center">
                Registered Users
            </h1>
        </div>

        <div class="col-12 mb-3">
            <a href="./register_user.php" class="btn btn-primary">Add User</a>
        </div>
    </div>
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
                ?>
                    <tr>
                        <td colspan="2">
                            <h3 class="text-danger text-center">No Record Found !!</h3>
                        </td>
                    </tr>
                <?php
            }
            
            ?>
        </tbody>
    </table>
</div>

<?php
include("./includes/footer.php");
?>