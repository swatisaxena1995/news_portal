<?php 
    require_once('controller/user.php');
    require_once('view/common/navigation.php'); 
?>

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Change Password</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <form method="POST">
        <div class="row">
            <div class="col-lg-2"><span>Current Password</span></div>
            <div class="col-lg-10"><input type="password" name="current_pass" /></div>
        </div>
        <div class="row">
            <div class="col-lg-2"><span>New Password</span></div>
            <div class="col-lg-10"><input type="password" name="new_pass" /></div>
        </div>
        <div class="row">
            <div class="col-lg-2"><span>Confirm Password</span></div>
            <div class="col-lg-10"><input type="password" name="confirm_pass" /></div>
        </div>
        <div class="row">
            <div class="col-lg-2">&nbsp;</div>
            <div class="col-lg-10"><input type="submit" value="change password" /></div>
        </div>
    </form>
    <div class="row">
        <div class="col-lg-12">
            <?php if(isset($error)) { echo $error; } ?>
            <?php if(isset($success)) { echo $success; } ?>
        </div>
    </div>
</div>