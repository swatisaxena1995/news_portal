<!-- Navigation -->
<?php
    require_once('view/pages/list.php');
    require_once('view/common/navigation.php'); 
?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">About Us</h1>
            
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
                            <form name="newsform" onsubmit="return validateForm()" method="POST" enctype="multipart/form-data" role="form">
                              <div class="form-group">
                                    <label>      </label>
                                    <select id="pagename" name="pagename" class="form-control">
                                    <option value="">Select Page</option>
                                        <option <?php if(isset($_GET["pagename"]) && $_GET["pagename"]== "AboutUs") { echo "selected='selected'"; } ?> value="AboutUs">About Us</option>
                                        <option <?php if(isset($_GET["pagename"]) && $_GET["pagename"]== "Services") { echo "selected='selected'"; } ?> value="Services">Services</option>
                                     </select>
                                </div>  
                               <div class="form-group">
                                    <label>Content</label>

                                   
                                    <textarea name="content" class="form-control" rows="3">
                                        <?php 
                                            if(isset($existingData)) {
                                                echo $existingData;
                                            }
                                        ?>
                                    </textarea>
                               <span class ="errorcontent"></span>
                                </div> 
                               
                               
                              
                                <button type="submit" class="btn btn-default">Submit Button</button>
                              
                            </form>
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
<script type="text/javascript">
    var select = document.getElementById("pagename");
    select.onchange = function(){
        var selectedString = select.options[select.selectedIndex].value;
        window.location.href = "index.php?page=cms&&pagename="+selectedString;
    }
</script>
















