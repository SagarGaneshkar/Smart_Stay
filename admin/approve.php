<?php 

?>
<?php 
session_start();

include("config.php");

if(isset($_POST['btnchange']))
{echo"success";
	$aid = $_GET['pid'];
	
	$sql = "UPDATE myflat SET Request = 'Approved' WHERE pid = {$aid}";
	$result=mysqli_query($con,$sql);
	if($result == true)
	{
		echo"success";
	}
	else{
		
		echo"failure";
	}
}
?>