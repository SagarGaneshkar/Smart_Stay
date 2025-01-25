<?php
include("config.php");

$pid = $_GET['pid'];
$statusP=$_GET['statusP'];
echo"$pid";
echo"$statusP";
$statusP=$_GET['statusP'];
$updatequery="UPDATE myflat SET statusP='{$statusP}' WHERE pid={$pid}";
mysqli_query($con,$updatequery);

header('location:addflat.php');






?>