<?php

include('includes/connection.php');
/*session_start();
 $type =  $_SESSION["admin_type"];
if (!isset( $_SESSION["admin_type"]) || $type!="user"){
    header("location:Login_Admin.php");
}*/


    if (isset($_POST['submit'])) {
        $N_id         =$_POST['N_id'];
        $nationality  =$_POST['nationality'];
        $first_name   =$_POST['first_name'];
        $seconed_name =$_POST['seconed_name'];
        $middle_name  =$_POST['middle_name'];
        $last_name    =$_POST['last_name'];
        $gender       =$_POST['gender'];
        $city         =$_POST['city'];
        $address      =$_POST['address'];
        $mobile       =$_POST['mobile'];

        


$query="insert into citizen(N_id,nationality,first_name,seconed_name,middle_name,last_name,gender,city,address,mobile)
 values('$N_id','$nationality','$first_name','$seconed_name','$middle_name','$last_name','$gender','$city','$address','$mobile')";
        

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
                            <strong>Manage Citizen</strong> 
                        </div>
                        <div class="card-body card-block">
                            <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label  class=" form-control-label">Nationality</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <select name="nationality" id="select" class="form-control" required="">
                                            <option >Please select</option>
                                            <option value="Jordanian">Jordanian</option>
                                            <option value="Not Jordanian">Not Jordanian</option>
                                         
                                        </select>
                                    </div>
                                    
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label  class=" form-control-label">National Number</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text"  name="N_id" class="form-control" required="" pattern="{10}" title="Must at least 10" required>
                                        
                                    </div>
                                    
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label  class=" form-control-label">First Name</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text"  name="first_name"  class="form-control" required="">
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label  class=" form-control-label">Seconed Name</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text"  name="seconed_name" class="form-control" required="">
                                        
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label  class=" form-control-label">Middle Name</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text"  name="middle_name" class="form-control" required="">
                                        
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label  class=" form-control-label">last Name</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text"  name="last_name" class="form-control" required="">
                                        
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label class=" form-control-label">Gender</label>
                                    </div>
                                    <div class="col col-md-9">
                                        <div class="form-check">
                                            <div class="radio">
                                                <label for="radio1" class="form-check-label ">
                                                    <input type="radio"  name="gender"  class="form-check-input" value="Male">Male
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label for="radio2" class="form-check-label ">
                                                    <input type="radio"  name="gender"  class="form-check-input" value="Female">Female
                                                </label>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="select" class=" form-control-label">City</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <select name="city" id="select" class="form-control">
                                            <option >Please select</option>
                                            <option value="Amman">Amman</option>
                                            <option value="zarqa">zarqa</option>
                                            <option value="Irbid">Irbid</option>
                                            <option value="Ramtha">Ramtha</option>
                                            <option value="Ajloun">Ajloun</option>
                                            <option value="Jerash">Jerash</option>
                                            <option value="Salt">Salt</option>
                                            <option value="Mafraq">Mafraq</option>
                                            <option value="Madaba">Madaba</option>
                                            <option value="Karek">Karek</option>
                                            <option value="Tafeelah">Tafeelah</option>
                                            <option value="Maan">Maan</option>
                                            <option value="Aqaba">Aqaba</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label  class=" form-control-label">Address</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text"  name="address" class="form-control">
                                        
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label  class=" form-control-label">Mobile</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text"  name="mobile" class="form-control">
                                        
                                    </div>
                                </div>
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
                            <th>CID</th>
                            <th>Nationality</th>
                            <th>NID</th>
                            <th>First Name</th>
                            <th>Seconed Name</th>
                            <th>Middle Name</th>
                            <th>Last Name</th>
                            <th>Gender</th>
                            <th>City</th>
                            <th>Address</th>
                            <th>Mobile</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                     <?php
                        $query ="select * from citizen";
                        $result=mysqli_query($conn,$query);
                        while($row   =mysqli_fetch_assoc($result))
                        {
                        echo "<tr>";
                        echo "<td>{$row['c_id']}</td>";
                        echo "<td>{$row['nationality']}</td>";
                        echo "<td>{$row['N_id']}</td>";
                        echo "<td>{$row['first_name']}</td>";
                        echo "<td>{$row['seconed_name']}</td>";
                        echo "<td>{$row['middle_name']}</td>";
                        echo "<td>{$row['last_name']}</td>";
                        echo "<td>{$row['gender']}</td>";
                        echo "<td>{$row['city']}</td>";
                        echo "<td>{$row['address']}</td>";
                        echo "<td>{$row['mobile']}</td>";

                        echo "<td><a href='citizen_edit.php?id={$row['c_id']}' class='btn btn-primary'>Edit</a></td>";
                        echo "<td><a href='citizen_delete.php?id={$row['c_id']}' class='btn btn-danger'>Delete</a></td>";



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

