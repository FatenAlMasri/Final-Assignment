<?php

	include('includes/connection.php');


	if (isset($_POST['submit'])) {
		$admin_email   =$_POST['admin_email'];
		$admin_password=$_POST['admin_password'];
		$admin_fullname=$_POST['admin_fullname'];
		$admin_dept    =$_POST['admin_dept'];


	$query="update admin set admin_email='$admin_email',
	                         admin_password ='$admin_password',
	                         admin_fullname='$admin_fullname',
	                         admin_dept='$admin_dept'
                			where admin_id= {$_GET['id']}";
                			
        //echo $query;die;           

     mysqli_query($conn,$query);
     header("location:manage_admin.php");

}
$query="select * from admin where admin_id ={$_GET['id']}";
$result=mysqli_query($conn,$query);
$row= mysqli_fetch_assoc($result);

	?>

<?php include('includes/admin_header.php');?>
<!-- MAIN CONTENT-->
<div class="main-content">
	<div class="section__content section__content--p30">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="card">
						<div class="card-header">Manage Admin</div>
						<div class="card-body">
							<div class="card-title">
								<h3 class="text-center title-2">Edit Admin</h3>
							</div>
							<hr>
							<form action="" method="post">
								<div class="form-group">
									<label for="cc-payment" class="control-label mb-1">Admin Email</label>
									<input  name="admin_email" type="text" class="form-control"  value="<?php echo $row['admin_email'] ?>">
								</div>

								<div class="form-group">
									<label for="cc-payment" class="control-label mb-1">Admin Password</label>
									<input  name="admin_password" type="Password" class="form-control"  value="<?php echo $row['admin_password'] ?>">
								</div>

								<div class="form-group">
									<label for="cc-payment" class="control-label mb-1">Admin Full Name</label>
									<input  name="admin_fullname" type="text" class="form-control"  value="<?php echo $row['admin_fullname'] ?>">
								</div>

								<div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="select" class=" form-control-label">Department</label>
                                    </div>
                                </div>

								 <div class="row form-group">
                                    <div class="col-12 col-md-12">
                                        <select name="admin_dept" id="select" class="form-control" value="<?php echo $row['direct_name'] ?>">
                           <option >Please select</option>
                                          
 <option value="Expatriate Labor Directorate" <?php if($row['admin_dept'] == 'Expatriate Labor Directorate'){echo "selected";} ?>>Expatriate Labor Directorate</option>
 <option value="Central Inspection Directorate" <?php if($row['admin_dept'] == 'Central Inspection Directorate'){echo "selected";} ?>>Central Inspection Directorate</option>
 <option value="Central Employment Directorate" <?php if($row['admin_dept'] == 'Central Employment Directorate'){echo "selected";} ?>>Central Employment Directorate</option>
 <option value="Directorate of Domestic Workers" <?php if($row['admin_dept'] == 'Directorate of Domestic Workers'){echo "selected";} ?>>Directorate of Domestic Workers</option>
<option value="Directorate of Human Trafficking" <?php if($row['admin_dept'] == 'Directorate of Human Trafficking'){echo "selected";} ?>>Directorate of Human Trafficking</option>
<option value="Legal Affairs Directorate" <?php if($row['admin_dept'] == 'Legal Affairs Directorate'){echo "selected";} ?>>Legal Affairs Directorate</option>
<option value="Labor Relations Directorate" <?php if($row['admin_dept'] == 'Labor Relations Directorate'){echo "selected";} ?>>Labor Relations Directorate</option>

                                        </select>
                                    </div>
                                </div>



								<div>
									<button name="submit" type="submit" class="btn btn-lg btn-primary btn-block">

										<span id="payment-button-amount">Update</span>

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


?>