<?php

	include('includes/connection.php');
session_start();


$type =  $_SESSION["admin_type"];
if (!isset( $_SESSION["admin_type"]) || $type!="super"){
	header("location:Login_Admin.php");
}

$id = $_SESSION["admin_id"];
$query = "SELECT * FROM  `admin` WHERE `admin_id`=$id ";
$result = mysqli_query($conn,$query);
$array = mysqli_fetch_array($result);


	if (isset($_POST['submit'])) {
		$admin_email   =$_POST['admin_email'];
		$admin_password=$_POST['admin_password'];
		$admin_fullname=$_POST['admin_fullname'];
		$admin_dept    =$_POST['admin_dept'];


	$query="insert into admin(admin_email,admin_password,admin_fullname,admin_dept)
            values('$admin_email','$admin_password','$admin_fullname','$admin_dept')";
            

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
						<div class="card-header">Manage Admin</div>
						<div class="card-body">
							<div class="card-title">
								<h3 class="text-center title-2">Create Admin</h3>
							</div>
							<hr>
							<form action="" method="post">
								<div class="form-group">
									<label for="cc-payment" class="control-label mb-1">Admin Email</label>
									<input  name="admin_email" type="text" class="form-control" data-val-required="Please enter admin email" required="" oninvalid="this.setCustomValidity('Enter Email')" oninput="setCustomValidity('')">
								</div>

								<div class="form-group">
									<label for="cc-payment" class="control-label mb-1">Admin Password</label>
									<input  name="admin_password" type="Password" class="form-control" pattern="(?=.*\d)(?=.*[a-z]).{8,}" title="Must contain at least one number and lowercase letter, and at least 8 up to 32 digit" required>
								</div>

								<div class="form-group">
									<label for="cc-payment" class="control-label mb-1">Admin Full Name</label>
									<input  name="admin_fullname" type="text" class="form-control" oninvalid="this.setCustomValidity('Enter Full Name')" oninput="setCustomValidity('')" required="">
								</div>

								     <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="select" class=" form-control-label">Department</label>
                                    </div>
                                </div>

                                    <div class="row form-group">
                                    <div class="col-12 col-md-12">
                                        <select name="admin_dept" id="select" class="form-control" required="">
                                            <option >Please select</option>
                                            <option value="Expatriate Labor Directorate">Expatriate Labor Directorate</option>
                                            <option value="Central Inspection Directorate">Central Inspection Directorate</option>
                                            <option value="Central Employment Directorate">Central Employment Directorate</option>
                                             <option value="Directorate of Domestic Workers">Directorate of Domestic Workers</option>
                                             <option value="Directorate of Human Trafficking">Directorate of Human Trafficking</option>
                                              <option value="Legal Affairs Directorate">Legal Affairs Directorate</option>
                                               <option value="Labor Relations Directorate">Labor Relations Directorate</option>

                                        </select>
                                    </div>
                                </div> 




								<div>
									<button name="submit" type="submit" class="btn btn-lg btn-primary btn-block">

										<span id="payment-button-amount">Save</span>

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
							<th>Email</th>
							<th>Password</th>
							<th>Full Name</th>
							<th>Dept</th>
							<th>Edit</th>
							<th>Delete</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$query ="select * from admin";
						$result=mysqli_query($conn,$query);
						while($row   =mysqli_fetch_assoc($result))
						{
						echo "<tr>";
						echo "<td>{$row['admin_id']}</td>";
						echo "<td>{$row['admin_email']}</td>";
						echo "<td>{$row['admin_password']}</td>";
						echo "<td>{$row['admin_fullname']}</td>";
						echo "<td>{$row['admin_dept']}</td>";
						echo "<td><a href='edit_admin.php?id={$row['admin_id']}' class='btn btn-primary'>Edit</a></td>";
						echo "<td><a href='delete_admin.php?id={$row['admin_id']}' class='btn btn-danger'>Delete</a></td>";



						echo "</tr>";
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
