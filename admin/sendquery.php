<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <style type="text/css">
       /* not used */
		body{
			background-image:url("images/ghar.jpg");
			background-repeat:no-repeat;
			background-size:cover;
		}
        .form-control{
            width:100%
            height:60px
            padding: 6px 12px;
            font-size: 14px;
            color: #555;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .btn-primary {
            padding: 6px 12px;
            font-size: 14px;
            font-weight: 400;
            cursor: pointer;
            border: 1px solid transparent;
            border-radius: 4px;  
            background-color: #337ab7;
            color: #fff;

        }
        textarea.form-control {
            height: auto;
			width:100%;
        } 
        .container{
            margin-left: 35%;
            width: 400px;
            margin-top: 6%;
            background-color: #fff;
            padding: 30px;
            padding-right: 60px;
            box-shadow: 10px 5px 5px grey;

            
        }
        label {
            font-size: 25px;
        }
        .success{
           
            border-radius: 5px;
            border: 2px solid #fff;
            background: #33cc00;
            color: #fff;
            font-size: 20px;
            padding: 10px;
            box-shadow: 10px 5px 5px grey; 
			width: 75dp;

        }
		#box
		{
	
			width:60%;
			background-color:rgba(0,0,0,1.00);
			border-radius:5px;
			padding:10px 10px;
			transition:0.5s;
	
		}

		#box:hover
		{
	
			width:60%;
			background-color:rgba(0,0,0,1.00);
			border-radius:5px;
			padding:10px 10px;
			transition:0.5s;
			box-shadow:0px 0px 50px rgba(250,250,250,1.00);
		}
		    input, select, textarea
    {
	font-family:'times new romen';
	font-size:20px;
	font-weight:bold;
	background-color:transparent;
	width:250px;
	border:1 px solid black;
	padding:5px 2px;
	color:rgba(0,0,0,1.00);;
	transition:0.5s;
	border-radius:2px;
}
input[type=submit]
{
	cursor:pointer;
	font-size:20px;
	
}
  
#banner
{
	padding:10 px 0px;
	width:100%;

	font-size:40px;
	color:rgba(0,0,0,1.00);
	
	
}
.footer{
   width:100%;
	margin-top:50px;
	
	background-color:rgba(42,42,42,1.00);
}

.footer .flex{
   display: flex;
   flex-wrap: wrap;
   gap: 2rem;
   text-color:white;
   justify-content: space-between;
}

.footer .flex .box{
   flex: 1 1 30rem;
   text-color:white;
}

.footer .flex .box a{
   display: block;
   padding: 1rem 0;
   font-size: 1.8rem;
   text-color:white;
}

.footer .flex .box a span{
   color: var(--white);
}

.footer .flex .box a:hover span{
   text-decoration: underline;
   text-color:white;
}

.footer .flex .box a i{
   color: var(--main-color);
   text-color:white;
}

.footer .flex .box:last-child{
   text-align: right;
}

.footer .flex .box:last-child a i{
   margin-left: 1.5rem;
   text-color:white;
}

.footer .flex .box:first-child a i{
   margin-right: 1.5rem;
   text-color:white;
}

.footer .flex .box:nth-child(2){
   text-align: center;
   text-color:white;
}

.footer .credit{
   padding: 1rem 2rem;
   text-align: center;
   border-top: var(--border);
   font-size: 2rem;
   color: var(--white);
   margin-top: 2rem;
   /* padding-bottom: 10rem; */
}

.footer .credit span{
   color: var(--main-color);
}

        </style>
        </head>
<body>
<?php
 include("adminheader.php"); 


$main=$_REQUEST['email'];
if(isset($_POST['submit_form']))
			{ 
          $name=$_POST['name']; 
       
        $msg=$_POST['msg']; 
       $phone=$_POST['phone']; 
       $FromName="Flat System";
$FromEmail="pritikokate611@gmail.com";
$ReplyTo=$main;
$toemail=$main;
$subject="Flat System Contact form"; 
$message='Name:-'.$name.'<br>Email :-' .$email.'<br> Phone No:-'.$phone.'<br> Message:-'.$msg;
$headers = "MIME-Version: 1.0\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\n";
$headers .= "From: ".$FromName." <".$FromEmail.">\n";
$headers .= "Reply-To: ".$ReplyTo."\n";
$headers .= "X-Sender: <".$FromEmail.">\n";
$headers .= "X-Mailer: PHP\n";
$headers .= "X-Priority: 1\n";
$headers .= "Return-Path: <".$FromEmail.">\n";
   if(mail($toemail,$subject,$message,$headers,'-f'.$FromEmail) ){
          $hide=1;
        
         echo '<div class="success"><center><span style="font-size:100px;">&#9989;</span></center> <br> Thank you <strong>'.$name.',</strong> Your message has been sent. We will reply soon as possible. </div> '; 
	      
	} else {
		echo "The server failed to send the message. Please try again later or Make sure , you are using live server for email.";
} 
			}
if(!isset($hide)){?>


    <div class="container">
    <form action="" method="POST">
    <div align="center" id="banner"><b>
Send query to user
</b>
</div>
<table border="0" cellpadding="5" cellspacing="5" >
  
 
    <label class="mt-4"><b>Email:-</label> 
 
    <input type="email" name="email" class="form-control mb-4" required value="<?php  echo $main;?>">

    <label><b>Message:-</label> 

    <textarea name="msg" cols="10" rows="5" class="form-control  mt-4" required>
    </textarea><br>

    <input type="submit" name="submit_form" align="center" value="Send Query" class="btn-primary mt-4" > 

    


</table>


    </form>

    <?php } ?>
	
    </div>
	
		<br>
<br><br><br>
<br>
<br>


<footer class="footer">

   <section class="flex">

      <div class="box">
         <a href="tel:1234567890"><i class="fas fa-phone"></i><span>9322771736</span></a>
         <a href="tel:1112223333"><i class="fas fa-phone"></i><span>7887932884</span></a>
         <a href="mailto:kokatepriti288@gmail.com"><i class="fas fa-envelope"></i><span>kokatepriti288@gmail.com</span></a>
         <a href="#"><i class="fas fa-map-marker-alt"></i><span>Ahmednagar ,India 414201</span></a>
      </div>

      <div class="box">
         <a href="admin-dashboard.php"><span>home</span></a>
         <a href="addflat.php"><span>Add Flat</span></a>
         <a href="aboutview.php"><span>Advertesment</span></a>
         <a href="city.php"><span>City</span></a>
         <a href="logout.php"><span>Logout</span></a>
      </div>

      <div class="box">
         <a href="#"><span>facebook</span><i class="fab fa-facebook-f"></i></a>
         <a href="#"><span>twitter</span><i class="fab fa-twitter"></i></a>
         <a href="#"><span>linkedin</span><i class="fab fa-linkedin"></i></a>
         <a href="#"><span>instagram</span><i class="fab fa-instagram"></i></a>

      </div>

   </section>

   <div class="credit">Developed and created by  <span>TYCM</span> | 2022-23!</div>

</footer>





</body>

</html>