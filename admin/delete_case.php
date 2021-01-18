<?php
include('includes/connection.php');
$id=$_GET['id'];

$query="delete from cases where case_id=$id";

mysqli_query($conn,$query);
//redirect
header("location:manage_case.php");
?>