<!DOCTYPE html>

<html lang="en">
<head>
  <title>User management</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
 
  
  
  </head>
  <body>
  <div class="sb1">
    <nav>
      <div class="sb1">
      
          <div>
          
              <p>Latest For You</p>
  
          </div>  
          <ul>
            <li>
              <a href="secondnav.php"><b>home</b></a>
            </li>
            <li>
              <a href="#"><b>about us</b></a>
            </li>
         
         
            <li>
              <a href="about.php"><b>Advertisement</b></a>
            </li>

              <li>
              <select class="oy" onchange="location=this.value;" name="type">
  
                  <option value=""><a><b>MY ACCOUNT</b> </a></option>
                  <option value="profile2.php"><a><b>MY PROFILE</b> </a></option>
                  <option value="feature.php"><a><b>VIEW FLAT</b> </a></option>
                  <option value="flatfrom.php"><a><b>ADD FLAT</b> </a></option>
                  <option value="logout.php"><a><b>LOGOUT</b> </a></option>
                                                                                        
               </select>
              </li>&nbsp
            <li>
            <a class="bg-success text-white button ml-5 " href="serchflat.php" >SERCH FLATS</a> </
            </li>                      
  
          </ul> 

         
    </nav>
  

</div>
  
  
  
 
  



<br>



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
position:fixed;
background-image:"images/house.jpg";
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
padding-left:5px;

}

.tht{
	text-decoration: none;
	cursor:pointer;
	font-size:20px;
	font-weight:bold;
	text-transform:uppercase
}

.button {
  background-color: #04AA6D;
  border-radius:30px;
  color: white;
  padding: 20px;
  text-align: center;
  text-decoration: none;

  font-size: 20px;
  margin: 4px 2px;
}

.oy {
  font-family: var(--theme-ordinary-font);
  font-size: 25px;
  font-weight:bold;
   text-decoration: bold;
  height: 50px;
  border-color: transparent;
  line-height: 25px;
   padding-left: 40px;
   padding-right: 10px;
   padding-top:10px;
   background-color: transparent;
   color: blue;
  border-radius: 3px 0px 0px 3px;
  
  
}
</style>

