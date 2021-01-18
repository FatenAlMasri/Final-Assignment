
<?php

include('includes/connection.php');
$current_date = date("Y-m-d");

if (isset($_POST['submit'])) {
        $case_date    =$_POST['case_date'];
        $case_time    =$_POST['case_time'];
        $case_entry   =$_POST['case_entry'];
        $case_type    =$_POST['case_type'];
        $case_desc    =$_POST['case_desc'];
        $direct_name  =$_POST['direct_name'];
        $case_emp_note=$_POST['case_emp_note'];
        $case_status  =$_POST['case_status'];
        $case_priority=$_POST['case_priority'];

    
    $query="update Cases set case_date    ='$case_date',
                            case_time    ='$case_time',
                            case_entry   ='$case_entry',
                            case_type    ='$case_type',
                            case_desc    ='$case_desc',
                            direct_name  ='$direct_name',
                            case_emp_note='$case_emp_note',
                            case_status  ='$case_status',
                            case_priority='$case_priority',
                            updatedate   = $current_date
      
                  
    where case_id= {$_GET['id']}";

      
       //echo $query;die;           

    mysqli_query($conn,$query);
    header("location:manage_case.php");

}
$query="select * from Cases where case_id ={$_GET['id']}";
$result=mysqli_query($conn,$query);
//if($result){
$row= mysqli_fetch_assoc($result);
//}

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
                            <strong>Edit Cases</strong> 
                        </div>
                        <div class="card-body card-block">
                            <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label  class=" form-control-label">Case Date</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                         <input type="date"  name="case_date" class="form-control" value="<?php echo $row['case_date'] ?>">
                                        
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label  class=" form-control-label">Case Time</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                         <input type="Time"  name="case_time"  class="form-control" value="<?php echo $row['case_time'] ?>">
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="select" class=" form-control-label">Case Enrty</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                        <select name="case_entry" id="select" class="form-control" value="<?php echo $row['case_entry'] ?>">
                                            <option >Please select</option>
                                            <option value="Telephone" <?php if($row['case_entry'] == 'Telephone'){echo "selected";} ?>>Telephone</option>
                                            <option value="Website" <?php if($row['case_entry'] == 'Website'){echo "selected";} ?>>Website</option>
                                            <option value="COMبخدمتـ" <?php if($row['case_entry'] == 'COMبخدمتـ'){echo "selected";} ?>>COMبخدمتـ</option>
                                            <option value="Whatsup" <?php if($row['case_entry'] == 'Whatsup'){echo "selected";} ?>>Whatsup</option>
                                            <option value="Facebook" <?php if($row['case_entry'] == 'Facebook'){echo "selected";} ?>>Facebook</option>
                                            <option value="Twitter" <?php if($row['case_entry'] == 'Twitter'){echo "selected";} ?>>Twitter</option>

                                        </select>
                                    </div>
                                </div>


                                  <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="select" class=" form-control-label">Case Type</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                        <select name="case_type" id="select" class="form-control" value="<?php echo $row['case_type'] ?>">
                                            <option >Please select</option>
                                            <option value="Complaint" <?php if($row['case_type'] == 'Complaint'){echo "selected";} ?>>Complaint</option>
                                            <option value="Notify" <?php if($row['case_type'] == 'Notify'){echo "selected";} ?>>Notify</option>
                                            <option value="Inquiry" <?php if($row['case_type'] == 'Inquiry'){echo "selected";} ?>>Inquiry</option>
                                            <option value="Suggetion" <?php if($row['case_type'] == 'Suggetion'){echo "selected";} ?>>Suggetion</option>
                                            <option value="Thanks" <?php if($row['case_type'] == 'Thanks'){echo "selected";} ?>>Thanks</option>

                                        </select>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label  class=" form-control-label">Case Description</label>
                                    </div>
                                    <div class="col-12 col-md-9">
      <textarea name="case_desc"  rows="9" class="form-control" value="<?php echo $row['case_desc'] ?>"></textarea>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="select" class=" form-control-label">Case Related To</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                 <select name="direct_name" id="select" class="form-control" value="<?php echo $row['direct_name'] ?>">
       <option >Please select</option>
                                          
 <option value="Expatriate Labor Directorate" <?php if($row['direct_name'] == 'Expatriate Labor Directorate'){echo "selected";} ?>>Expatriate Labor Directorate</option>
 <option value="Central Inspection Directorate" <?php if($row['direct_name'] == 'Central Inspection Directorate'){echo "selected";} ?>>Central Inspection Directorate</option>
 <option value="Central Employment Directorate" <?php if($row['direct_name'] == 'Central Employment Directorate'){echo "selected";} ?>>Central Employment Directorate</option>
 <option value="Directorate of Domestic Workers" <?php if($row['direct_name'] == 'Directorate of Domestic Workers'){echo "selected";} ?>>Directorate of Domestic Workers</option>
<option value="Directorate of Human Trafficking" <?php if($row['direct_name'] == 'Directorate of Human Trafficking'){echo "selected";} ?>>Directorate of Human Trafficking</option>
<option value="Legal Affairs Directorate" <?php if($row['direct_name'] == 'Legal Affairs Directorate'){echo "selected";} ?>>Legal Affairs Directorate</option>
<option value="Labor Relations Directorate" <?php if($row['direct_name'] == 'Labor Relations Directorate'){echo "selected";} ?>>Labor Relations Directorate</option>

                                        </select>
                                            
                                    </div>
                                </div> 
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label  class=" form-control-label">Case Employee Note</label>
                                    </div>
                                    <div class="col-12 col-md-9"> 
<textarea name="case_emp_note"  rows="9" class="form-control" value="<?php echo $row['case_emp_note'] ?>"></textarea>
                                    </div>
                                </div>

                                 <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="select" class=" form-control-label">Case Status</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                       <select name="case_status" id="select" class="form-control" value="<?php echo $row['case_status'] ?>">
                                            
                                            <option value="Pending" <?php if($row['case_status'] == 'Pending'){echo "selected";} ?>>Pending</option>
                                            <option value="Underprocessing" <?php if($row['case_status'] == 'Underprocessing'){echo "selected";} ?>>Underprocessing</option>
                                            <option value="Closed" <?php if($row['case_status'] == 'Closed'){echo "selected";} ?>>Closed</option>
                                            <option value="Complete" <?php if($row['case_status'] == 'Complete'){echo "selected";} ?>>Complete</option>
                                            <option value="Cancelled" <?php if($row['case_status'] == 'Cancelled'){echo "selected";} ?>>Cancelled</option>
                                      
                                        </select>
                                    </div>
                                </div>


                                <div class="row form-group">
                                  <div class="col col-md-3">
                                    <label for="select" class=" form-control-label">Case Priority</label>
                                  </div>
                                  <div class="col-12 col-md-9">
                <select name="case_priority" id="select" class="form-control" value="<?php echo $row['case_priority'] ?>">
                                      <option >Please select</option>
                                      <option value="High Risk" <?php if($row['case_priority'] == 'High Risk'){echo "selected";} ?> >High Risk</option>
                                      <option value="Medium Risk" <?php if($row['case_priority'] == 'Medium Risk'){echo "selected";} ?>>Medium Risk</option>
                                      <option value="Low risk" <?php if($row['case_priority'] == 'Low risk'){echo "selected";} ?>>Low risk</option>

                                    </select>
                                  </div>
                                </div> 

                       
                                <div class="card-footer">
                                  <button name="submit"    type="submit" class="btn btn-primary  btn-lg">
                                    <i class="fa fa-dot-circle-o"></i> Update
                                  </button>
                                  <button type="reset" class="btn btn-danger btn-lg">
                                    <i class="fa fa-ban"></i> Cancel
                                  </button>
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