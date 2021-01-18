<?php
session_start();

unset($_SESSION['c_id']);

header("location:logincitizen.php");


?>