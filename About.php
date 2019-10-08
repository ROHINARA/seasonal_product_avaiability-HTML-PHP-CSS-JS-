<!DOCTYPE html>
<html>
<head>
	<title>Seasonal Product</title>
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
     

	<style type="text/css">
		body{
			/*background-image: url(image/h.jpg);*/
			background-size: cover;
			background-attachment: fixed;
			font-family: Arial;
		    color: white;
		 

			
			
		}
		
ul{
	        
			margin: 0px;
			padding: 0px;
			list-style: none;

		}
		ul li{
			float:left;
			width: 291px;
			height: 100px;
			background-color: none;
			opacity: .8;
			line-height: 50px;
			text-align: center;
			background: black;
			font-size: 20px;
			font-family: algerian;
		}
		ul li ul li{
			
			display: none;
			float:none;
			list-style: none;

		}
		ul li:hover ul li{
			display: block;
			background: rgba(255,255,255,.8);
			height: 60px;
			width: 100%;
		}
		ul li a:hover{
			background-color: darkgray;
		}
		#myVideo {
  position:absolute;

  right: 0;
  bottom: 0;
  height: 850px;
  width: 950px;

  min-width: 100%; 
  min-height: 100%;
}
		.content {
  position: fixed;
  bottom: 0;
  background: rgba(0, 0, 0, 0.5);
  color: #f1f1f1;
  width: 100%;
  padding: 10px;
  font-size: 17px;
  font-family: all;
}
		
</style>
</head>

<body>

	<video autoplay muted loop id="myVideo">
  <source src="movie1.mov" type="video/mp4">
  </video>

	<ul>
		<center><div style="background:rgba(255,255,255,.2);width:100%;height:100px;">
		<li><a href="text.php">Home</a></li>
		<li><a href="About.php">About</a></li>
		<li><a href="shop.php">View Products</a></li>
		<li><a href="contact.php">Contact us</a></li>
		<li><a><span class="glyphicon glyphicon-user">SIGN IN</a>
		<ul>
	<li><a href="login.php"><span class="glyphicon glyphicon-user">Admin</li>
	<li><a href="signin.php"><span class="glyphicon glyphicon-user">User</li>
		<li><a href="supsignin.php"><span class="glyphicon glyphicon-user">Supplier</li>
</ul>
</div>
	</ul>

	<div class="content">
<!-- <center><div style="background:rgba(255,255,255,.6);width:100%;height:450px;">
	<h1 align="center" style="color: black;padding: 10px;font-family: algerian"><i>About Seasonal Product Avaiability</i></h1>
	<p align="left"style="color: black"> -->
		<h1 align="left"style="color: white;font-family: algerian">About Us</h1>
		<p  align="left"style="color: white">Seasonal product availability is one of the latest concept of technology. In this era of modern technology lifestyle became easier with the help of internet. This has mainly three actors.Those are Admin, Customer, Supplier. This website give service of customer and supplier.Here supplier and customer can login providing their password and username which are stored in the database.Before login they need to register (without admin) himself/herself as a customer or a supplier for accessing the necessary information. Each person requires an unique username or email Id and password to register in the website. After valid login Customer can check his/her information, can check product history and buy product.Admin can login to the system. Admin can view, delete, publish and update members’ information and product info too. Admin can also enter new category in the list an dinsert product. Supplier can login to the system. They can  enter new product in the list and insert new info.After selecting the products customer can pay the bills in Bikash/Cash on Delivery.

</p>
<h2 align="left"style="color: white;font-family: algerian"><i>Our service</i></h2>
<p align="left"style="color: white">&#9830;Produt Buy</p>
<p align="left"style="color: white">&#9830;Product Sell</p>
<p align="left"style="color: white">&#9830;Payment System</p>
<p align="left"style="color: white">&#9830;Privacy Policy</p>

	

</div>

</center>
</div>
</div>
</body>
</html>