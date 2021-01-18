<?Php
session_start();

include("connect.php");

$pass = $_POST["PASSWORD"];
$user = $_POST["USERNAME"];


		$query = "SELECT * FROM `special` WHERE `USERNAME` = '$user' AND `PASSWORD` = '$pass' ";
		$result = mysqli_query($link,$query);
		if(mysqli_num_rows($result) == 1){
			$array = $result->fetch_array();
			if($array["STATUS"] == 1){
				$_SESSION["ID"] = $array["ID"];
				$_SESSION["TYPE"] = 'special';

				header("Location: ../user_welcom_page.php");
			}else{
				echo"<script>
			alert('Access denied! \\nSorry, you are not allowed to access your account at this moment.\\nCheck again later.');
			location.href = '../index.php';
			</script>";
			}
		}
		else{

		$query = "SELECT * FROM `behavior` WHERE `USERNAME` = '$user' AND `PASSWORD` = '$pass'";
		$result = mysqli_query($link,$query);
		if(mysqli_num_rows($result) == 1){
			$array = $result->fetch_array();
			if($array["STATUS"] == 1){
				$_SESSION["ID"] = $array["ID"];
				$_SESSION["TYPE"] = 'behavior';

				header("Location: ../user_welcom_page.php");
			}else{
				echo"<script>
			alert('Access denied! \\nSorry, you are not allowed to access your account at this moment.\\nCheck again later.');
			location.href = '../index.php';
			</script>";
			}
		}
		else{

		$query = "SELECT * FROM `psychologist` WHERE `USERNAME` = '$user' AND `PASSWORD` = '$pass'";
		$result = mysqli_query($link,$query);
		if(mysqli_num_rows($result) == 1){
			$array = $result->fetch_array();
			if($array["STATUS"] == 1){
				$_SESSION["ID"] = $array["ID"];
				$_SESSION["TYPE"] = 'psychologist';

				header("Location: ../user_welcom_page.php");
			}else{
				echo"<script>
			alert('Access denied! \\nSorry, you are not allowed to access your account at this moment.\\nCheck again later.');
			location.href = '../index.php';
			</script>";
			}
		}
		else{

		$query = "SELECT * FROM `therapist` WHERE `USERNAME` = '$user' AND `PASSWORD` = '$pass'";
		$result = mysqli_query($link,$query);
		if(mysqli_num_rows($result) == 1){
			$array = $result->fetch_array();
			if($array["STATUS"] == 1){
				$_SESSION["ID"] = $array["ID"];
				$_SESSION["TYPE"] = 'therapist';

				header("Location: ../user_welcom_page.php");
			}else{
				echo"<script>
			alert('Access denied! \\nSorry, you are not allowed to access your account at this moment.\\nCheck again later.');
			location.href = '../index.php';
			</script>";
			}
		}	
		else{

		$query = "SELECT * FROM `teacher` WHERE `USERNAME` = '$user' AND `PASSWORD` = '$pass'";
		$result = mysqli_query($link,$query);
		if(mysqli_num_rows($result) == 1){
			$array = $result->fetch_array();
			if($array["STATUS"] == 1){
				$_SESSION["ID"] = $array["ID"];
				$_SESSION["TYPE"] = 'teacher';

				header("Location: ../user_welcom_page.php");
			}else{
				echo"<script>
			alert('Access denied! \\nSorry, you are not allowed to access your account at this moment.\\nCheck again later.');
			location.href = '../index.php';
			</script>";
			}
		}
		else{

		$query = "SELECT * FROM `parent` WHERE `USERNAME` = '$user' AND `PASSWORD` = '$pass'";
		$result = mysqli_query($link,$query);
		if(mysqli_num_rows($result) == 1){
			$array = $result->fetch_array();
			if($array["STATUS"] == 1){
				$_SESSION["ID"] = $array["ID"];
				$_SESSION["TYPE"] = 'parent';

				header("Location: ../parent_welcom_page.php");
			}else{
				echo"<script>
			alert('Access denied! \\nSorry, you are not allowed to access your account at this moment.\\nCheck again later.');
			location.href = '../index.php';
			</script>";
			}
		}
		else{
			echo"<script>
			alert('Wrong Username or Password.');
			location.href = '../index.php';
			</script>";
		}
		
		}
		}
		}
		}
		}
?>