<?php

  /*  include('includes/connection.php');


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

$query="insert into cases(case_date,case_time,case_entry,case_type,case_desc,direct_name,case_emp_note,case_status,case_priority)
                 values('$case_date','$case_time','$case_entry','$case_type','$case_desc','$direct_name','$case_emp_note','$case_status','$case_priority')";
        
   // echo $query;die;
     mysqli_query($conn,$query);

}*/
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
                            <strong>List Of Pending Cases</strong> 
                        </div>
                        <div class="card-body card-block">
                            <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">

                                
                       
                        <div class="card-footer">
                            <button name="submit"    type="submit" class="btn btn-primary  btn-lg">
                                <i class="fa fa-dot-circle-o"></i> Save
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

        <div class="col-md-12">
            <!-- DATA TABLE-->
            <div class="table-responsive m-b-40">
                <table class="table table-borderless table-data3">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Entry</th>
                            <th>Type</th>
                            <th>Description</th>
                            <th>Related to</th>
                            <th>Employee Note</th>
                            <th>Status</th>
                            <th>Priority</th>
                            <th>Edit</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                    
                    <?php
                        $query ="select * from cases";
                        $result=mysqli_query($conn,$query);
                        if($result){
                        while($row   =mysqli_fetch_assoc($result))
                        {
                        echo "<tr>";
                        echo "<td>{$row['case_id']}</td>";
                        echo "<td>{$row['case_date']}</td>";
                        echo "<td>{$row['case_time']}</td>";
                        echo "<td>{$row['case_entry']}</td>";
                        echo "<td>{$row['case_type']}</td>";
                       
                        echo "<td>{$row['case_desc']}</td>";
                        echo "<td>{$row['direct_name']}</td>";
                        echo "<td>{$row['case_emp_note']}</td>";
                        echo "<td>{$row['case_status']}</td>";
                        echo "<td>{$row['case_priority']}</td>";
                        echo "<td><a href='edit_case.php?id={$row['case_id']}'>Edit</a></td>";
                      


                        echo "</tr>";
                        }
                            }



                        ?>
                    
                      
                    
                    
                    </tbody>
                </table>
            </div>
            <!-- END DATA TABLE-->
        </div>
    </div>
</div>
<?php include('includes/admin_footer.php');?>

