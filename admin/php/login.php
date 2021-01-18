<?Php
session_start();

include("../includes/connection.php");

    $email    = $_POST['email'];
    $password = $_POST['password'];

    $query  = "SELECT * FROM `admin` WHERE `admin_email` = '$email' AND `admin_password` = '$password'";
        $result = mysqli_query($conn,$query);
        if(mysqli_num_rows($result) == 1){
            $array = $result->fetch_array();
            if($array["status"] == 1){
                $_SESSION["admin_id"] = $array["admin_id"];
                $_SESSION["admin_type"] = 'super';

                header("Location: ../manage_admin.php");
            }else{
                echo"<script>
            alert('Access denied! \\nSorry, you are not allowed to access your account at this moment.\\nCheck again later.');
            location.href = '../Login_Admin.php';
            </script>";
            }
        }
        else{

    $query  = "SELECT * FROM `admin` WHERE `admin_email` = '$email' AND `admin_password` = '$password'";
        $result = mysqli_query($conn,$query);
        if(mysqli_num_rows($result) == 1){
            $array = $result->fetch_array();
            if($array["status"] == 1){
               $_SESSION["admin_id"] = $array["admin_id"];
                $_SESSION["admin_type"] = 'user';

                header("Location: ../index.php");
            }else{
                echo"<script>
            alert('Access denied! \\nSorry, you are not allowed to access your account at this moment.\\nCheck again later.');
            location.href = '../Login_Admin.php';
            </script>";
            }
        }
        else{


    $query  = "SELECT * FROM `admin` WHERE `admin_email` = '$email' AND `admin_password` = '$password'";
        $result = mysqli_query($conn,$query);
        if(mysqli_num_rows($result) == 1){
            $array = $result->fetch_array();
            if($array["status"] == 1){
              $_SESSION["admin_id"] = $array["admin_id"];
                $_SESSION["admin_type"] = 'adminuser';

                header("Location: ../manage_case.php");
            }else{
                echo"<script>
            alert('Access denied! \\nSorry, you are not allowed to access your account at this moment.\\nCheck again later.');
            location.href = '../Login_Admin.php';
            </script>";
            }
        }
 

        else{
            echo"<script>
            alert('Wrong Email or Password.');
            location.href = '../Login_Admin.php';
            </script>";
       
        }
        
        }
        }
        
    

?>