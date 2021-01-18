<?php

    include('includes/connection.php');
    $current_date = date("Y-m-d");
    $current_time = date("H:i:s");



    if (isset($_POST['submit'])) {
       
        $case_type    =$_POST['case_type'];
        $case_desc    =$_POST['case_desc'];
        

$query="insert into cases(case_date,case_time,case_entry,case_type,case_desc,direct_name,case_emp_note,case_status,case_priority)
                 values('$current_date','$current_time','Website','$case_type','$case_desc',' ',' ','Pending',' ')";
        
   //echo $query;die;
     mysqli_query($conn,$query);
     

}
    ?>






<?php include('includes/admin_header.php');?>
<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong>Enter Cases Please</strong> 
                        </div>
                        <div class="card-body card-block">
                            <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label  class=" form-control-label">Case Date</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                            <input  name="case_date" class="form-control" value="<?php echo date("M j, Y"); ?>" disabled>
                                        
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label  class=" form-control-label">Case Time</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                             <input  name="case_time"  class="form-control" value="<?php echo date("g:i");?>" disabled>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="select" class=" form-control-label">Case Enrty</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <select name="case_entry" id="select" class="form-control"  disabled="">
                                            <option value="Website">Website</option>
                                            <option value="Telephone">Telephone</option>
                                            
                                            <option value="COMبخدمتـ">COMبخدمتـ</option>
                                            <option value="Whatsup">Whatsup</option>
                                            <option value="Facebook">Facebook</option>
                                            <option value="Twitter">Twitter</option>

                                        </select>
                                    </div>
                                </div>


                                  <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="select" class=" form-control-label">Case Type</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <select name="case_type" id="select" class="form-control">
                                            <option >Please select</option>
                                            <option value="Complaint">Complaint</option>
                                            <option value="Notify">Notify</option>
                                            <option value="Inquiry">Inquiry</option>
                                            <option value="Suggetion">Suggetion</option>
                                            <option value="Thanks">Thanks</option>

                                        </select>
                                    </div>
                                </div>
                                

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label  class=" form-control-label">Case Description</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <textarea name="case_desc"  rows="9" class="form-control"></textarea>
                                    </div>
                                </div>

                             
                                

 

                       
                        <center> <div class="card-footer">
                            <button name="submit"    type="submit" class="btn btn-primary  btn-lg">
                                Save
                            </button>
                            
                            <button type="reset" class="btn btn-danger btn-lg" onclick="window.location='thank_citizen.php';return false;">
                                 Next
                            </button>
                        </div></center>
                        </form>
                         </div>
                    </div>
                </div>
            </div>
        </div>

        
    </div>
</div>
<?php include('includes/admin_footer.php');?>

