<?php
require("config.php");
//session_start();
$pid = $_GET['pid'];
$deletequery="DELETE FROM `myflat` WHERE pid=$pid";

$query=mysqli_query($con,$deletequery);
  if($query){
	  ?>
	  <script>
	   alert("deleted successfully");
	   <?php
		header('location:addflat.php');
	   ?>
	   </script>
	   <?php
  }
  else
  {
	  ?>
	  <script>
	   alert("error")
	   script>
	   
	   <?php
  }


?>