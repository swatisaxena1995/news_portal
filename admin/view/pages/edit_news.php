<!-- Navigation -->
<?php
    require_once('controller/news.php');
    require_once('view/common/navigation.php'); 
?>

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">EDIT News</h1>
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
                            <?php if(count($editAble) > 0 ) { ?>
                            <form name="editNews" method="POST" enctype="multipart/form-data" role="form">
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" name="title" value="<?php echo $editAble[0]['title']; ?>" class="form-control">
                                    <span class ="errortitle"></span>
                                    <p class="help-block">put news title</p>
                                </div>
                               <div class="form-group">
                                    <label>Content</label>
                                    <textarea name="content" class="form-control" rows="3"><?php echo $editAble[0]['content']; ?></textarea>
                               <span class ="errorcontent"></span>
                                </div> 
                               
                                <div class="form-group">
                                    <label>Location</label>
                                    <input type="text" name="location" value="<?php echo $editAble[0]['location']; ?>" class="form-control">
                                <span class ="errorlocation"></span>
                                </div>
                                 <div class="form-group" >
                                    <label>Date</label>
                                    <input type="date" name="create_date" value="<?php echo $editAble[0]['create_date']; ?>" class="form-control">
                                <span class ="errordate"></span>
                                </div>
                                <div class="form-group">
                                    <label>Thumbnails</label>
                                    <input type="file" name="thumb">
                                    <span class ="errorthumb"></span>
                                </div>
                                
                                <div class="form-group">
                                    <label>Tags</label>
                                    <select name="tags" class="form-control">
                                     <option value="0">select any tag</option>
                                        <option value="sports">sports</option>
                                        <option value="bollywood">bollywood</option>
                                        <option value="latest news">latest news</option>
                                        <option value="technology">technology</option>
                                        <option value="world">world</option>
                                        <option value="business">business</option>
                                        <option value="entertainment">entertainment</option>
                                        <option value="politics" >politics</option>
                                    </select>
                                </div>
                                <input type="hidden" name="id" value="<?php echo $editAble[0]['id']; ?>" class="form-control">
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