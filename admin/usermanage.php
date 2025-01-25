<html>
    <head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    </head>
    <?php $msg="   "; ?>
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
  
  <h1 align="center" class="pt-4 denger">User Registration<h1>
    <form action="" method="POST">
     <?php  echo"$msg";?>
        <table border = "3"class=" table table-stripped table-bordered me-4">
        <thead>
            <th>id</th>
            <th>username</th>
            <th>email</th>
            <th>phoneNo</th>
            <th>password</th>
            <th class="mt-3">image</th>
            <th>Action</th>
            </thead>
<?php
$con=mysqli_connect("localhost","root","","fms");

$clr="SELECT `uid`, `uname`, `uemail`, `uphone`, `upass`, `uimage` FROM `user`";
$cres= mysqli_query($con,$clr);
while($crow = mysqli_fetch_array($cres)){
?>
<tr>
<td> <?php echo $crow['uid'];?></td>
<td> <?php echo $crow['uname'];?></td>
<td> <?php echo $crow['uemail'];?></td>
<td> <?php echo $crow['uphone'];?></td>
<td> <?php echo $crow['upass'];?></td>
<td> <img src="images/<?php  echo $crow['uimage'];?>"class="m-4" height='250'width='250'></td>

<td><a class="btn btn-danger" href="delete.php?uid=<?php echo $crow['0'];?>">Delete</a></td>
</tr>
<?php 
}
?>
</form>
</table>
	<!-- jQuery -->
  <script src="assets/js/jquery-3.2.1.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
		
		<!-- Slimscroll JS -->
        <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
		
		<!-- Custom JS -->
		<script  src="assets/js/script.js"></script>
		
  </html>
  <style>

*{

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
margin-left:30px;

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

.tht{
	text-decoration: none;
	cursor:pointer;
	font-size:20px;
	font-weight:bold;
}
h1{

  font-size: 30px;
font-weight: bold;
float: center;
color: blue;
text-transform: uppercase;
letter-spacing:1.5px ;
cursor: pointer;

}
input,button,label,table{
	  color:black;
	  font-weight:bold;
	  font-size:20px;
    text-transform: uppercase;
  }

</style>