<!-- Navigation -->
<?php
    require_once('controller/news.php');
    require_once('view/common/navigation.php'); 
?>

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">contact_us</h1>
            <?php if(isset($error)) { echo $error; } ?>
            <?php if(isset($success)) { echo $success; } ?>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <?php if(count($edit) > 0 ) { ?>
                            <form name="contact_us" method="POST" enctype="multipart/form-data" role="form">
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" name="title" value="<?php echo $edit[0]['title']; ?>" class="form-control">
                                    <span class ="errortitle"></span>
                                    <p class="help-block">put news title</p>
                                </div>
                               <div class="form-group">
                                    <label>name</label>
                                    <textarea name="content" class="form-control" rows="3"><?php echo $edit[0]['name']; ?></textarea>
                               <span class ="errorcontent"></span>
                                </div> 
                               
                                <div class="form-group">
                                    <label>email</label>
                                    <input type="text" name="location" value="<?php echo $edit[0]['email']; ?>" class="form-control">
                                <span class ="errorlocation"></span>
                                </div>
                                 <div class="form-group" >
                                    <label>contact_number</label>
                                    <input type="number" name="create_date" value="<?php echo $edit[0]['contact_number']; ?>" class="form-control">
                                <span class ="errordate"></span>
                                </div>
                              
                                
                               
                                <input type="hidden" name="id" value="<?php echo $edit[0]['id']; ?>" class="form-control">
                                <button type="submit" class="btn btn-default">Edit</button>
                            </form>
                            <?php } else { ?>
                            <span>Record not found !</span>
                            <?php } ?>
                        </div>
                        <!-- /.col-lg-6 (nested) -->
                       
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
</div>