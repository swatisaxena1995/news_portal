<?php
    require_once('controller/news.php');
    require_once('view/common/navigation.php');
?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">News</h1>
            <?php if(isset($error)) { ?>
                <span class="error"><?php echo $error; ?></span>
            <?php } ?>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    List of All News <?php if(isset($_GET['tag'])) { echo "for ".$_GET["tag"]; } ?>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Content</th>
                                    <th>Location</th>
                                    <th>Thumbnail</th>
                                    <th>Tags</th>
                                    <th>Create Date</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($rows as $key => $value) { ?>
                                    <tr class="odd gradeX">
                                        <td><?php echo  $value["title"]; ?></td>
                                        <td><?php echo  $value["content"]; ?></td>
                                        <td><?php echo  $value["location"]; ?></td>
                                        <td><img src="<?php echo  $value["thumbnails"]; ?>" height="100" width="100" /></td>
                                        <td><?php echo  $value["tags"]; ?></td>
                                        <td><?php echo  $value["create_date"]; ?></td>
                                        <td><a href='index.php?page=edit_news&id=<?php echo $value["id"]; ?>'>edit</a></td>
                                        <td><a onclick="return confirm('Are you sure you want to delete it ?');" href='index.php?page=delete_news&id=<?php echo $value["id"]; ?>'>delete</a></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
</div>