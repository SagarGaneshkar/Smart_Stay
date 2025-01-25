<?php

require("config.php");
$output='';

$sql="select * from city where District_Name='".$_POST['district_name']."'";

$result=mysqli_query($con,$sql);


$output.="<option value=''selected>--Select City--</option>";
while($row=mysqli_fetch_array($result)){
	$output.='<option value="'.$row["City_Eng"].'">'.$row["City_Eng"].'</option>';

}
echo $output;




 
?>