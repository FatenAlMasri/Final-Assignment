<?php
session_start();

unset($_SESSION['admin_id']);
unset($_SESSION['admin_type']);
header("location:Login_Admin.php");


?>