<?php
 // session_start();
 
 require_once("dbconnect.php");
 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Seasonal Product</title>
	 <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      -->

</head>
<style type="text/css">
	body{
	margin:0;
	padding:0;
	font-family: sans-serif;
	background:url(admin.jpg) no-repeat;
	background-size: cover;
}
.login-box{
	width: 300px;
	position: absolute;
	top:50%;
	left:50%;
	transform: translate(-80%,-40%);
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
			width: 260px;
			height: 80px;
			background-color: none;
			opacity: .8;
			line-height: 40px;
			text-align: center;
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
			background: rgba(255,255,255,.5);
			height: 50px;
			width: 100%;
		}
		ul li a:hover{
			background-color: darkgray;
		}
		.login-box input{
   display: block;
   width: 320px;
   height: 40px;
   padding: 10px;
   font-size: 14px;
   font-family: sans-serif;
   color: white;
   background: rgba(0,0,0,0.3);
   outline: none;
   border:1px solid rgba(0,0,0,0.3);
   border-radius: 5px;
   box-shadow: inset 0px -5px 45px rgba(100,100,100,0.2), 0px 1px 1px rgba(255,255,255,0.2);
   margin-bottom: 10px;
}

.login-box #login-btn{
   background: #55acee;
   font-size: 18px;
   text-align: center;
   vertical-align: middle;
   line-height: 20px;
}

#login-btn:hover{
   background-color: #fff;	
   color: #000;	
}	

</style>
<body>
	<ul>
		<center><div style="background:rgba(255,255,255,.2);width:100%;height:80px;">
		<li><a href="text.php"><span class="glyphicon glyphicon-home">Home</a></li>
		<li><a href="About.php">About</a></li>
		<li><a href="shop.php">View Products</a></li>
		<li><a href="contact.php">Contact us</a></li>
		<li><a href="signin.php"><span class="glyphicon glyphicon-user">SIGN IN</a>
		<ul>
	<li><a href="login.php"><span class="glyphicon glyphicon-user">Admin</li>
	<li><a href="signin.php"><span class="glyphicon glyphicon-user">User</li>
		<li><a href="supsignin.php"><span class="glyphicon glyphicon-user">Supplier</li>
</ul>

	</ul>
	 	
<form action="" method="post">
	<div class="login-box">
		<center><div style="background:rgba(250,250,250,.3);width:160%;height:480px;">
		<h1 style="font-family: algerian">Sign in here</h1>
		<p>
                    <a href="signup.php">Register</a>
                </p>
<table>
<tr>
<td>Name</td><td>:</td><td><input type="text" name="name"></td>
</tr>


<tr>
<td>Password</td><td>:</td><td><input type="password" name="pass"></td>
</tr>


<tr>
  <td></td><td></td><td>
<input type="submit" id="login-btn"name="login" value="Signin"></td>
</tr>
</table>
</form>
</body>
<?php
  if(isset($_POST['login'])){
  $sqlSelect="SELECT * FROM admin WHERE Name='$_POST[name]'and Password='$_POST[pass]'";
  $records=mysqli_query($conn,$sqlSelect);
  $count= mysqli_num_rows($records);
  if($count==1){
	  $field=mysqli_fetch_array($records);
		   // $_SESSION['id']=$field['id'];
		   // $_SESSION['username']=$field['Name'];
		   //  $_SESSION['email']=$field['login_email'];
		   // $_SESSION['password']=$field['Password'];
		   //  $_SESSION['phone']=$field['login_phone'];
		   
		    echo"<script language=Javascript>document.location.href='productget.php'</script>";
		   
  }
  else{
	  echo"failed";
  }
  
  
  
  }
?>