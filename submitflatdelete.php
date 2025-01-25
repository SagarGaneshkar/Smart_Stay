<?php
include("config.php");
$pid = $_GET['pid'];
$sql = "DELETE FROM myflat WHERE pid = {$pid}";
$result = mysqli_query($con, $sql);
if($result == true)
{
	$msg="<p class='alert alert-success'>Your flat Deleted</p>";
	header("Location:feature.php?msg=$msg");
}
else{
	$msg="<p class='alert alert-warning'>Your flat Not Deleted</p>";
	header("Location:feature.php?msg=$msg");
}
mysqli_close($con);
?>