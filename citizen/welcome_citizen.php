

<?php include('includes/admin_header.php');?>
<div class="main-content" >
    <div class="section__content section__content--p30" >
        <div class="container-fluid" >
            <div class="row" >

                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                           <center> <h2><strong>Welcome to Our Website</strong> </h2></center>
                        </div>
                        <div class="card-body card-block" >
                            <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                <div class="row form-group" >
                                    <div class="col col-md-3">
                                        <label  class=" form-control-label">National Number</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text"  name="N_id" class="form-control">
                                        
                                    </div>
                                </div>

                                

                               
                             
                        <div class="card-footer" >
                           <center> <button name="submit"    type="submit" class="btn btn-primary  btn-lg" onclick="window.location='logincitizen.php';return false;">
                                 login
                            </button>
                            
                            <button type="reset" class="btn btn-danger btn-lg" onclick="window.location='register_citizen.php';return false;">
                               register
                            </button></center>
                        </div>

                            </form>
                        </div>
                        
                    </div>
                </div>
         
            </div>
        </div>
    </div>
</div>
<?php include('includes/admin_footer.php');?>

