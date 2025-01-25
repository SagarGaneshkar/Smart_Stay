<html>
    <head>
        <meta charset="utf-8">
        <title>Contact page</title>
        <style type="text/css">
       
		body{
			background-image:url("images/ghar.jpg");
			background-repeat:no-repeat;
			background-size:cover;
		}
        .form-control{
            width:100%;
            height:60%;
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
	text-decoration:none;
	background-color:rgba(42,42,42,1.00);
}

.footer .flex{
   display: flex;
   flex-wrap: wrap;
   gap: 2rem;
   color:white;
   justify-content: space-between;
}

.footer .flex .box{
   flex: 1 1 30rem;
   color:white;
}

.footer .flex .box a{
   display: block;
   padding: 1rem 0;
   font-size: 1.8rem;
   color:white;
}

.footer .flex .box a span{
   color: var(--white);
}

.footer .flex .box a:hover span{
   text-decoration: underline;
   color:white;
}

.footer .flex .box a i{
   color: var(--main-color);
   color:white;
}

.footer .flex .box:last-child{
   text-align: right;
}

.footer .flex .box:last-child a i{
   margin-left: 1.5rem;
   color:white;
}

.footer .flex .box:first-child a i{
   margin-right: 1.5rem;
   color:white;
}

.footer .flex .box:nth-child(2){
   text-align: center;
   color:white;
}
a{
   text-decoration:none;
}
.footer .credit{
   padding: 1rem 2rem;
   text-align: center;
   border-top: var(--border);
   font-size: 2rem;
   color: white;
   margin-top: 2rem;
   /* padding-bottom: 10rem; */
}

.footer .credit span{
   color: var(--main-color);
}

        </style>
        </head>
<body>
    <div class="container">
    <form action="" method="POST">
    <div align="center" id="banner"><b>contact us</b>
</div>
    <table border="0" cellpadding="5" cellspacing="5" >
    <tr><td>
    <label>Name:-</label> </td>
    </tr>
    <tr>
   <td> <input type="text" name="name" class="form-control"  required> </td> </tr>
    <tr> <td>
    <label>Email:-</label> </td></tr>
    <tr>  <td>
    <input type="email" name="email" class="form-control" required> </td> </tr>
    <tr> <td>
    <label>Phone no:-</label> </td> </tr>
    <tr> <td>
    <input type="number" name="phone" class="form-control" required>  </td>
    </tr>
    <tr> <td>
    <label>Message:-</label>  </td>
    </tr>
    <tr> <td>
    <textarea name="msg" cols="10" rows="5" class="form-control" required>
    </textarea> </td></tr>
    <tr> <td>
    <input type="submit" name="submit_form" value="send" class="btn-primary" > 
    </td>
    </tr>
    


</table>


    </form>
	
    </div>
	
		<br>
<br><br><br>
<br>
<br>
	<!-- footer section starts  -->

<footer class="footer">

   <section class="flex">

      <div class="box">
         <a href="tel:1234567890"><i class="fa fa-phone"></i><span>7887932884</span></a>
         <a href="tel:1112223333"><i class="fa fa-phone"></i><span>8624903817</span></a>
         <a href="mailto:kokatepriti288@gmail.com"><i class="fa fa-envelope"></i><span>pratikgadekar@gmail.com</span></a>
         <a href="#"><i class="fa fa-map-marker-alt"></i><span>Pune ,India 414201</span></a>
      </div>

      <div class="box">
         <a href="index.php"><span>home</span></a>
         <a href="about.html"><span>about</span></a>
         <a href="contact.html"><span>contact</span></a>
         <a href="listings.html"><span>all listings</span></a>
         <a href="#"><span>saved properties</span></a>
      </div>

      <div class="box">
         <a href="#"><span>facebook</span><i class="fa fa-facebook-f"></i></a>
         <a href="#"><span>twitter</span><i class="fa fa-twitter"></i></a>
         <a href="#"><span>linkedin</span><i class="fa fa-linkedin"></i></a>
         <a href="#"><span>instagram</span><i class="fa fa-instagram"></i></a>

      </div>

   </section>

   <div class="credit">Developed and created by  <span>TYITA Batch 4</span> | 2024-25!</div>

</footer>

<!-- footer section ends -->



</body>

</html>