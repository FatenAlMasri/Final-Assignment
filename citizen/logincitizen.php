<?php 
session_start();
include('includes/connection.php');
if(isset($_POST['submit'])){
    $N_id    = $_POST['N_id'];
    $mobile = $_POST['mobile'];
    $query  = "select * from citizen where N_id = '$N_id' AND mobile = '$mobile'";
    $result = mysqli_query($conn,$query); 
    $row    = mysqli_fetch_assoc($result);
    if($row['c_id']){
        $_SESSION['c_id']   = $row['c_id']; 
        
        header("location:entercase_citizen.php");
    }else{
       header("location:register_citizen.php");
        
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Login</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div style="background-image: url('images/icon/mol2.jpg');background-repeat: no-repeat;background-size: 100%; height: 2500px">
        <div>
            <div class="container" >
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="images/icon/mollogo2.png" alt="Ministry Of Labour">
                            </a>
                        </div>
                        <div class="login-form" >
                            <?php if(isset($error)){
                             echo "<div class='alert alert-danger'>$error</div>";
                         } ?>
                            <form action="" method="post">
                                <div class="form-group">
                                    <label>National Number</label>
          

   <input class="au-input au-input--full" type="text" name="N_id" placeholder="National Number" required="" oninvalid="this.setCustomValidity('Enter National Number')" oninput="setCustomValidity('')">
                                </div>
                                <div class="form-group">
                                    <label>Mobile</label>
                                    <input class="au-input au-input--full" type="text" name="mobile" placeholder="Mobile" required="" oninvalid="this.setCustomValidity('Enter Mobile')" oninput="setCustomValidity('')" >
                                </div>
                                
                            <center> <button name="submit" type="submit" class="btn btn-primary btn-lg">
                                 login
                                </button>
                                <br>
                                <b>If You Dont Have Account?</b>
                                <button name="submit1"    type="submit" class="btn btn-link btn-lg"  onclick="window.location='register_citizen.php';return false;">
                                 register
                                </button> </center>
                                
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
                                    
<?php include('includes/admin_footer.php');?>

