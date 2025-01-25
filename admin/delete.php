<?php
include("config.php");
$msg="";
$uid = $_GET['uid'];
$sql = "DELETE FROM user WHERE uid = {$uid}";
$result = mysqli_query($con,$sql);
if($result == true)
{
	$msg="<p class='alert alert-success'>User Deleted</p>";
	header("Location:usermanage.php?msg=$msg");
}
else{
	$msg="<p class='alert alert-warning'>User not Deleted</p>";
	header("Location:usermanage.php?msg=$msg");
}
mysqli_close($con);
?>