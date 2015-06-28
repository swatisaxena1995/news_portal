<?php
    require_once('controller/list.php');
    require_once('view/common/navigation.php'); 
?>

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">About Us</h1>
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
                    Basic Form Elements
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                         <?php if(count($edit) > 0 ) { ?>
                            <form name="newsform" onsubmit="return validateForm()" method="POST" enctype="multipart/form-data" role="form">
                              <div class="form-group">
                                    <label>      </label>
                                    <select name="  " class="form-control">
                                    <option value="select"> select    </option>
                                        <option value="About Us">About Us</option>
                                        <option value="Services">Services</option>
                                     </select>
                                </div>  
                               <div class="form-group">
                                    <label>Content</label>

                                   
                                    <textarea name="content" value="<?php echo $edit[0]['content']; ?>" class="form-control" rows="3"></textarea>
                               <span class ="errorcontent"></span>
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

