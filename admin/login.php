<?php
    session_start();
    require_once('config/config.php'); 
    require_once('view/common/header.php'); 
    require_once('controller/user.php'); 

?>
<div class="container">
    <div class="row">
        <div class="col-lg-4">&nbsp;</div>
        <div class="col-lg-8">
            <h1 class="page-header">Admin Login</h1>
        </div>
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-3">
            &nbsp;
        </div>
        <div class="col-lg-6">
            <?php 

                if(isset($_GET["error"]) && $_GET["error"] == "true"){

                    echo "<h3>Username or password is incorrect !.</h3>";
                }

            ?>
            <form role="form" method="POST">
                <div class="form-group input-group">
                    <span class="input-group-addon">username</span>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="form-group input-group">
                    <span class="input-group-addon">password</span>
                    <input type="password" name="password" class="form-control">
                    
                </div>
                <div class="form-group input-group">
                
                    <input value="Login" type="submit" class="form-control btn btn-primary">
                    
                </div>

                <div class="form-group input-group">
                
                <a href="forgot.php">reset</a>
    
                    
                </div>
                </form>

            </form>
        </div>
        <div class="col-lg-3">
            &nbsp;
        </div>
    </div>
</div>