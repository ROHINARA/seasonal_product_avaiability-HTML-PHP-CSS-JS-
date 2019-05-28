
<!DOCTYPE html>
<?php
include("functions/functions.php");
?>
<html>
<head>
	<title>Seasonal Product Avaiability</title>
	<link rel="styesheet"href="styles/style.css"media="all"/>
	<style type="text/css">
		body{
	background:url(login.jpg) no-repeat;
	background-size: cover;
	
}
.main_wrapper{
	width:1000px;
	height:auto;
	margin:auto;
}
.header_wrapper{
	width:1000px;
	height:150px;
	margin:auto;
}
#logo{
	float: left;}
#banner{
		float: top;
		width:1000px;
		height:150px;
		margin:auto;
		}
		.menubar{
			width:1000px;
			height:50px;
		    background:gray;
		    color:white;	
		}
		#menu{
			padding:0;
			margin:0;
			line-height: 40px;
			float:left;
		}
		#menu li{
			list-style: none;
			display: inline;
		}
		#menu a{
			text-decoration: none;
			color: white;
			padding:8px;
			margin: 5px;
			font-size: 18px;
			font-family: COMIC SANS MS;
		}
		#menu a:hover{color:orange;font-weight:bolder;text-decoration:underline;}
		#form{float:right;padding-right: 8px;line-height: 40px;}
	.content_wrapper{
		width:1000px;
		
		margin:auto;
		background:pink;
	}
	#content_area{
		width:800px;
		
		float:right;
		background:pink;
	}
	#sidebar{
		width:200px;
		
		float:left;
		background:black;
	}
	#sidebar_title{
		background:white;
		color:black;
		font-family:Comic Sans Ms ; 
		font-size:22px;
		padding:10px;
		text-align: center;
	}
	#cats{
		text-align: center;

	}
	#cats li{
		list-style: none;margin: 5px;
	}
	#cats a{color: white;padding:15px;margin: 5px;text-align: center;font-size: 18px;text-decoration:none;font-family: Comic Sans Ms}
	#cats a:hover{color:orange;font-weight:bolder;text-decoration: underline;}
	#products_box{
		width=780px;
		text-align: center;
		margin-left: 30px;
		margin-bottom: 10px;
	}
	#single_product{
		float:left;
		margin-left: 20px;
		padding: 10px;
	}
	#single_product img{
		border:2px solid black;
	}
	#footer{
		width:1000px;
		height:100px;
		background:gray;
		clear:both;
	}
	</style>
</head>
<body>
	<div class="main_wrapper">
<div class="header_wrapper">

<img id="banner"src="images/banner.gif">

</div>
<div class="menubar">
	<ul id="menu">
		
		<li><a href="#">Home</a></li>
		<li><a href="#">About</a></li>
		<li><a href="#">All Products</a></li>
		<li><a href="#">Shopping Cart</a></li>
		<li><a href="#">Contact us</a></li>
		<li><a href="#">Sign in</a></li>
	</ul>

<div id="form">
		<form method="get"action="results.php" enctype="multipart/form-data">
			<input type="text"name="user_query" placeholder="Search a Product" />
			<input type="submit" name="search"value="Search for..."
		</form>
</div>
</div>

<div class="content_wrapper">
	<div id="sidebar">
		<div id="sidebar_title">Categories</div>
		<ul id="cats">
		<?php 
		getCats();
		 ?>
		
	  
			</ul>

</div>


<div id="content_area">
	<div id="products_box">
		<?php getPro();
		?>
	</div>
</div>
</div>
<div id="footer">
	<h2 style="text-align: center;padding-top: 30px;">&copy;www.w3schools.com</h2>
</div>


 
</body>
</html>