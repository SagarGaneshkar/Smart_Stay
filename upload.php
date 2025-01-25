<?php
include("config.php");
$result=mysqli_query($con,"SELECT *  from myflat order by pid DESC");

echo "<pre>";
echo mysqli_fetch_row($result)[0];
?>