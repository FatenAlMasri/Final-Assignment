<?php

include('includes/connection.php');

if (isset($_POST['submit'])) {
    $N_id         =$_POST['N_id'];
    $first_name    =$_POST['first_name'];
    $seconed_name  =$_POST['seconed_name'];
    $middle_name   =$_POST['middle_name'];
    $last_name     =$_POST['last_name'];
    $gender        =$_POST['gender'];
    $city          =$_POST['city'];
    $address       =$_POST['address'];
    $mobile        =$_POST['mobile'];
    
    $query="update citizen set N_id        ='$N_id',
                               first_name  ='$first_name',
                               seconed_name='$seconed_name',
                               middle_name ='$middle_name',
                               last_name   ='$last_name',
                               gender      ='$gender',
                               city        ='$city',
                               address     ='$address',
                               mobile      ='$mobile'

    where c_id= {$_GET['id']}";


        //echo $query;die;           

    mysqli_query($conn,$query);
    header("location:manage_citizen.php");

}
$query="select * from citizen where c_id ={$_GET['id']}";
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
                        <div class="card-header">
                            <strong>Edit Citizen</strong> 
                        </div>
                        <div class="card-body card-block">

                            <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label  class=" form-control-label">Nationality</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <select name="nationality" id="select" class="form-control" "<?php echo $row['nationality'] ?>">
                                            <option >Please select</option>
<option value="Jordanian" <?php if($row['nationality'] == 'Jordanian'){echo "selected";} ?>>Jordanian</option>
 <option value="Not Jordanian" <?php if($row['nationality'] == 'Not Jordanian'){echo "selected";} ?>>Not Jordanian</option>
                                         
                                        </select>
                                    </div>
                                    
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label  class=" form-control-label">National Number</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text"  name="N_id" class="form-control" value="<?php echo $row['N_id'] ?>">
                                        
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label  class=" form-control-label">First Name</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                       <input type="text"  name="first_name"  class="form-control" value="<?php echo $row['first_name'] ?>">
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label  class=" form-control-label">Seconed Name</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                     <input type="text"  name="seconed_name" class="form-control" value="<?php echo $row['seconed_name'] ?>">
                                        
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label  class=" form-control-label">Middle Name</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                      <input type="text"  name="middle_name" class="form-control" value="<?php echo $row['middle_name'] ?>">
                                        
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label  class=" form-control-label">last Name</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                      <input type="text"  name="last_name" class="form-control" value="<?php echo $row['last_name'] ?>">
                                        
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
                           <input type="radio"  name="gender"  class="form-check-input" value="male" 
                           <?php if($row['gender'] == 'male'){echo "checked";} ?> >Male
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label for="radio2" class="form-check-label ">
                       <input type="radio"  name="gender"  class="form-check-input" value="female" 
                       <?php if($row['gender'] == 'female'){echo "checked";} ?> >Female
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
                                       <select name="city" id="select" class="form-control" value="<?php echo $row['city'] ?>">
                                            <option >Please select</option>
                                            <option value="Amman" <?php if($row['city'] == 'Amman'){echo "selected";} ?>>Amman</option>
                                            <option value="zarqa" <?php if($row['city'] == 'zarqa'){echo "selected";} ?>>zarqa</option>
                                            <option value="Irbid" <?php if($row['city'] == 'Irbid'){echo "selected";} ?>>Irbid</option>
                                            <option value="Ramtha" <?php if($row['city'] == 'Ramtha'){echo "selected";} ?>>Ramtha</option>
                                            <option value="Ajloun" <?php if($row['city'] == 'Ajloun'){echo "selected";} ?>>Ajloun</option>
                                            <option value="Jerash" <?php if($row['city'] == 'Jerash'){echo "selected";} ?>>Jerash</option>
                                            <option value="Salt" <?php if($row['city'] == 'Salt'){echo "selected";} ?>>Salt</option>
                                            <option value="Mafraq" <?php if($row['city'] == 'Mafraq'){echo "selected";} ?>>Mafraq</option>
                                            <option value="Madaba" <?php if($row['city'] == 'Madaba'){echo "selected";} ?>>Madaba</option>
                                            <option value="Karek" <?php if($row['city'] == 'Karek'){echo "selected";} ?>>Karek</option>
                                            <option value="Tafeelah" <?php if($row['city'] == 'Tafeelah'){echo "selected";} ?>>Tafeelah</option>
                                            <option value="Maan" <?php if($row['city'] == 'Maan'){echo "selected";} ?> >Maan</option>
                                            <option value="Aqaba" <?php if($row['city'] == 'Aqaba'){echo "selected";} ?>>Aqaba</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label  class=" form-control-label">Address</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text"  name="address" class="form-control" value="<?php echo $row['address'] ?>">
                                        
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label  class=" form-control-label">Mobile</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text"  name="mobile" class="form-control" value="<?php echo $row['mobile'] ?>">
                                        
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

