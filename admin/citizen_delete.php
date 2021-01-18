<?php
include('includes/connection.php');
$id=$_GET['id'];

$query="delete from citizen where c_id=$id";

mysqli_query($conn,$query);
//redirect
header("location:manage_citizen.php");
?>