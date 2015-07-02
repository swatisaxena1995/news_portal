<!-- Navigation -->


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
                           
                            <form name="contact_us" method="POST" enctype="multipart/form-data" role="form">
                               
                               <div class="form-group">
                                    <label>name</label>
                                    <input type="text" name="name" class="form-control">
                               <span class ="errorname"></span>
                                </div> 
                               
                                <div class="form-group">
                                    <label>email</label>
                                    <input type="text" name="email"  class="form-control">
                                <span class ="erroremail"></span>
                                </div>
                                 <div class="form-group" >
                                    <label>contact_number</label>
                                    <input type="number" name="contact.number"  class="form-control">
                                <span class ="errorcontact.number"></span>
                                </div>
                              
                                
                               
                                <input type="hidden"  class="form-control">
                                <button type="submit" class="btn btn-default">submit</button>
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