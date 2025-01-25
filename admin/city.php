<?php
session_start();
require("config.php");


$sql="select * from district";
$result1=mysqli_query($con,$sql);

$error="";
$msg="";
if(isset($_POST['btnsave']))
{
	
	$cityeng=$_POST['txtcityenglish'];
	$citymar=$_POST['txtcitymarathi'];
	$selecteddistrict=$_POST['selectdistrict'];
	
	

	
	$sql="insert into city (District_Name,City_Eng,City_Mar) values('$selecteddistrict','$cityeng','$citymar')";
	$result=mysqli_query($con,$sql);
	if($result)
		{
			$msg="<p class='alert alert-success'>Inserted Successfully</p>";
					
		}
		else
		{
			$error="<p class='alert alert-warning'>* Not Inserted Some Error</p>";
		}
}
if(isset($_REQUEST["deleteid"]))
{
  $districtidid=$_REQUEST["deleteid"];

  $query="delete from city where City_id='$districtidid'";
  $result=mysqli_query($con,$query);

  if($result)
  {
    $msg="<p class='alert alert-success'>Deleted Successfully</p>";
        
  }
  else
  {
    $error="<p class='alert alert-warning'>* Not deleted some error</p>";
  }
}
?>














<!DOCTYPE html>
<html lang="en">
<head>
  <title>City Registration</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
  
  <style>
  input,button,label,table{
	  color:black;
	  font-weight:bold;
	  font-size:20px;
    text-transform: uppercase;
  }
  </style>
  
</head>
<body>

<div class="sb1">
    <nav>
      <div class="sb1">
      
          <div>
          
              <p> Admin Dashboard</p>
  
          </div>  
          <ul>
        <li>
            <a href="admin-dashboard.php">Home</a>
          </li>
          <li>
            <a href="panel.php">DASHBOARD</a>
          </li>
          <li>
          <li>
            <a href="district.php">district</a>
          </li>
          <li>
            <a href="city.php">city</a>
          </li>
          <li>
            <a href="addflat.php">Add Flats</a>
          </li>
        
         
         

          <li>
          <select style="        font-family: var(--theme-ordinary-font);
        font-size: 25px;
        font-weight:;
        text-decoration: bold;
        height: 50px;
        border-color: transparent;
        line-height: 25px;
        padding-left: 40px;
        padding-right: 10px;
        padding-top:10px;
        background-color: transparent;
        
        color: blue;
        border-radius: 3px 0px 0px 3px;" onchange="location=this.value;" name="type">
    
                   
                    
    
                    <option value=""><a>SERVICES</a></option>
                    <option value="addabout.php"><a>ADD ADVERTISEMENT</a></option>
                    <option value="aboutview.php"><a>VIEW ADVERTISEMENT</a></option>
                    <option value="usermanage.php"><a>MANAGE USER</a></option>
                    <option value="logout.php"><a>LOGOUT </a></option>
                                                                                          
              
                   
                                                                                          
                </select>
          </li>
        </ul>  

         
         
    </nav>
</div>
  


<div class="container-fluid" style="padding-top:100px;">
	<div class="row">
<div class="col-4">
<p id=""></p>
<form id="" method="post">

	<div class="form-group">
    <label>Select District:</label>
    <select class="form-control" name="selectdistrict" id="">
      <option>SELECT DISTRICT</option>
      <?php 
        while($row1=mysqli_fetch_array($result1)):
      ?>
      <option value="<?php echo $row1[1];  ?>"><?php echo $row1[1];  ?></option>
      <?php   endwhile; ?>
    </select>
</div>
	
	<div class="form-group">
    <label>Enter City In English:</label>
    <input type="text" class="form-control" name="txtcityenglish" id="txtcityenglish" placeholder="Enter Taluka In English">
	</div>


<div class="form-group">
    <label>Enter City In Marathi:</label>
    <input type="text" class="form-control" name="txtcitymarathi" id="txtcitymarathi" placeholder="Enter Taluka In Marathi">
</div>
<button type="submit" class="btn btn-primary" name="btnsave" id="btnsave">Save</button>
<button type="submit" class="btn btn-warning" name="btnupdate" id="btnupdate">Update</button>
	</form>
</div>

<div class="col-8" id="citydetails">
<?php echo"$error"?>
<?php echo"$msg"?>
<table  class="table table-striped">
				<tr>
					<th> city ID</th>
					<th> city Name English</th>
					<th> city Name Marathi</th>
					<th> action</th>
				</tr>
                <?php
													
                  $query=mysqli_query($con,"select * from city");
                  $cnt=1;
                  while($row=mysqli_fetch_row($query))
                  {
                  ?>
                  <tbody>
                    <tr>
                      <td><?php echo $cnt; ?></td>
                      <td><?php echo $row['2']; ?></td>
                      <td><?php echo $row['3']; ?></td>
                      <td><a href="city.php?editid=<?php echo $row['0']; ?>"><button class="btn btn-info">Edit</button></a>
                      <a href="city.php?deleteid=<?php echo $row['0']; ?>"><button class="btn btn-danger">Delete</button></a></td>
                    </tr>
                  </tbody>
                    <?php
                    $cnt=$cnt+1;
                    } 
                    ?>

</table>



</div>

</body>

</html>

	
<style>


.{

margin: 0px;
padding: 0px;
box-sizing: border-box;
}
nav{

width: 100%;
height: 100px;
line-height: 75px;
padding: px 100px;
position: fixed;
background-image:linear-gradient( background-color rgb(105, 98, 98) , rgb(23, 41, 105));
background-color: transparent;
}
nav p{

font-size: 30px;
font-weight: bold;
float: left;
color: blue;
text-transform: uppercase;
letter-spacing:1.5px ;
cursor: pointer;


}
nav ul{

float: right; 

}
nav li{
display: inline-block;
list-style :none;
}
nav li a{
font-size:25px;
text-transform: uppercase;
padding: 0px 40px;
color:blue;
text-decoration: none;
}
nav li a:hover{

color: #fd060681;
transition: all 0.4s ease 0s;

}
.content-items img{
width: 100%;
height: 150%;



}
.sb1{


width: 100%;
height: 100px;
position:relative;
sticky:top
position: fixed;
background-image:linear-gradient( background-color rgb(105, 98, 98) , rgb(23, 41, 105));
background-color: transparent;
background-color:	cyan;

}



</style>


