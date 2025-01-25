<?php
require('config.php');
$sql="select * from district";
$result1=mysqli_query($con,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Search Flat Here</title>
	<link rel="stylesheet" href="style.css">



<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script type="text/javascript">
   

  

function getCities(district){
	 $.ajax({
                type:'POST',
                url:'action.php',
                data:{'district_name':district.value},
				success:function(cities){
                    $('#select2').html(cities);
					
				}
	 });
   
}
</script>

</head>

<body>
    <header>
	<nav>
    
	<div>
	
		<p> tyit project</p>

	</div>  
  <ul>
          <li>
            <a href="index.php"><b>home</b></a>
          </li>
          <li>
            <a href="#"><b>about us</b></a>
          </li>
          <li>
            <a href="#"><b>Services</b></a>
          </li>
          <li>
            <a href="#"><b>contact us</b></a>
          </li>
          <li>
            <a href="about.php"><b>Advertisement</b></a>
          </li>
          <li>
          <a class="bg-success text-white button " href="serchflat.php" >SERCH FLATS</a> 
          </li>                      

        </ul> 
   


</nav>

    </header>
    <main>
        <form id="login_form" class="form_class" action="view.php" method="post">
            <div class="form_div">
              <lable class="lb mb-5">SERCH YOUR DREAM FLAT HERE</lable>
                  <select class="form-control form-control-lg mb-5 mt-5" name="select1" id="select1" onchange="getCities(this)">
                      <option value="" p-4>--Select District--</option>
                      <?php 
                       while($row1=mysqli_fetch_array($result1)):
                       ?>
                      <option value="<?php echo $row1[1];  ?>"><?php echo $row1[1];  ?></option>
                      <?php   endwhile; ?>
                  </select>
                 <select class="form-control form-control-lg mb-5" name="select2" id="select2">
                        <option value="" p-4>--Select City--</option>

												
                  </select>
                <input  type="submit" class="submit_class  btn-btn primary "  form="login_form" id="search" name="search">
            </div>
          
        </form>
    </main>
    
</body>


<style>
* {
    padding: 0px;
    margin: 0px;
}


h1 {
    letter-spacing: 1.5vw;
    font-family: 'system-ui';
    text-transform: uppercase;
    text-align: center;
}
main {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
    width: 100%;
    background: url(images/home.jpg) no-repeat center center;
    background-size: cover;
}
.form_class {
    width: 500px;
    padding: 40px;
    border-radius:8px ;
    background-color: transperant;
    font-family: 'Times new romen';
    box-shadow: 5px 5px 10px rgb(0,0,0,0.3);
}
.form_div {
    text-transform: uppercase;
}
.form_div > label {
    letter-spacing: 3px;
    font-size: 1rem;
}
.info_div {
    text-align: center;
    margin-top: 20px;
}

.field_class {
    width: 100%;
    border-radius: 6px;
    border-style: solid;
    border-width: 1px;
    padding: 5px 0px;
    text-indent: 6px;
    margin-top: 10px;
    margin-bottom: 20px;
    font-family: 'system-ui';
    font-size: 0.9rem;
    letter-spacing: 2px;
}
.submit_class {
    border-style: none;
    border-radius: 5px;
    background-color: #FFE6D4;
    padding: 8px 20px;
    font-family: 'system-ui';
    text-transform: uppercase;
    letter-spacing: .8px;
    display: block;
    margin: auto;
    margin-top: 10px;
    box-shadow: 2px 2px 5px rgb(0,0,0,0.2);
    cursor: pointer;
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
.lb{
  
  font-size: 25px;
  text-align: center;
  color:light blue;
  margin: px 20px;
  font-family: 'Times new romen';
}

</style>