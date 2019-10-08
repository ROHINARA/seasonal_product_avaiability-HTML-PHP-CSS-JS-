<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Register Form</title>

</head>
<style type="text/css">
	body{
	margin:0;
	padding:0;
	font-family: sans-serif;
	background:url(login.jpg) no-repeat;
	background-size: cover;
}
.login-box{
	width: 280px;
	position: absolute;
	top:50%;
	left:50%;
	transform: translate(-50%,-50%);
	color: white;
}
.login-box h1{
	float: left;
	font-size: 40px;
	border-bottom: 6px solid #4caf50;
	margin-bottom: 50px;
	padding: 13px 0
}    
.textbox{
	width:100%;
	overflow: hidden;
	font-size: 20px;
	padding: 8px 0;
	border-bottom: 1px solid #4caf50;
}
ul{
			margin: 0px;
			padding: 0px;
			list-style: none;

		}
		ul li{
			float:left;
			width: 200px;
			height: 40px;
			background-color: none;
			opacity: .8;
			line-height: 40px;
			text-align: center;
			font-size: 20px;
			font-family: algerian;
		}
		ul li a:hover{
			background-color: darkgray;
		}
</style>
<body>
	<ul>
		<center><div style="background:rgba(255,255,255,.5);width:100%;height:80px;">
		<li><a >Home</a></li>
		<li><a href="About.php">About</a></li>
		<li><a href="productgallery.php">Products</a></li>
		<li><a href="contact.php">Contact us</a></li>
		<li><a href="login.php">Sign in</a></li>
	</ul>
	 <form style="text-align:center" name="form1" action="" method="post">
				
				
                
	<div class="login-box">
		<center><div style="background:rgba(250,250,250,.3);width:100%;height:480px;">
		<h1 style="font-family: algerian">Register Page</h1>
		<p>Already registered?
                    <a href="login.php">Login</a>
                </p>
	<div class="textbox">
			
		<div class="textbox">
			<input type="text"placeholder="email"id="email" name=""value="">
		</div>
        <div class="textbox">
			<input type="pass"placeholder="pass" id="pass"name=""value="">
		</div>
		
		<input class="btn"type="button"id="Submit" name="Register"value="Register">
		</div>
</div>
</center>
</div>
</form>
<?php
$link=mysqli_connect("localhost","root","");
					mysqli_select_db($link,"hotel");

?>
<?php
if(isset($_POST["Submit"]))
{
	
	$sql="insert into login values($_POST[email]','$_POST[pass]')";
    echo $sql;
	mysqli_query($link,$sql);
	
		?>
		<script type="text/javascript">
		alert("logged in successfully");
		</script>
		<?php
		
}
?>
</body>
</html>