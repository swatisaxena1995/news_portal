<?php
    require_once('view/pages/list.php');
    require_once('view/common/navigation.php');
?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">cms</h1>
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
                  List of All News <?php if(isset($_GET['select'])) { echo "for ".$_GET["select"]; } ?>  
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>select</th>
                                    <th>Content</th>
                                 
                                  
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($row as $key => $value) { ?>
                                    <tr class="odd gradeX">
                                        <td><?php echo  $value["select"]; ?></td>
                                        <td><?php echo  $value["content"]; ?></td>
                                        <td><a href='edit_cms'>edit</a></td>
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