<?php
include("./includes/header.php");

if(isset($_REQUEST['register'])){
    $user_name = $_REQUEST['user_name'];
    $user_pass = $_REQUEST['user_pass'];

    echo $user_name;
    echo $user_pass;
}

?>

<div class="container">
    <div class="card my-card">
    <div class="card-header bg-primary text-white text-center">
        Register User
    </div>
    <div class="card-body">
       <div class="row">
            <div class="col-12">
               <form method="POST">
                <div class="mb-3">
                        <label for="" class="form-label">Username:</label>
                        <input type="text" class="form-control" name="user_name" value="">
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Password:</label>
                        <input type="password" class="form-control" name="user_pass" value="" autocomplete="off">
                    </div>

                    <div class="mb-3">
                        <button type="submit" name="register" class="btn btn-primary w-100">Submit</button>
                    </div>
               </form>
            </div>
       </div>
    </div>
    </div>
</div>












<?php
include("./includes/footer.php")
?>