<?php
 session_start();
 
 require_once("dbconnect.php");
 
?>

<?php
   if(isset($_POST['sub'])){
	   $error=0;
	   if($_POST['password']!=$_POST['cpass']){
		   $mispass='password and confirm password mismatch.<br>';
		   $error=1;
	   }
	   if(strlen($_POST['password'])<6){
		   $passLength='password must be more than 5 characters.';
		   $error=1;
		   
	   }
	   $sqlCheck="SELECT * FROM slogin_table WHERE login_email='$_POST[email]'";
	   $rscheck=mysqli_query($conn,$sqlCheck);
	   $count=mysqli_num_rows($rscheck);
	   if($count>0)
	   {
		   $exist="Already have account for this email.please try another one or <a href='signin.php'>Login</a>";
		   echo "<b style='color:red;'>".$exist."</br>";
		   $error=1;
	   }
	   if($error==0){
	   
	   $userInsert="INSERT slogin_table SET
	   login_name='$_POST[name]',
	   login_email='$_POST[email]',
	   login_password='$_POST[password]',
	   login_phone='$_POST[mobile]'";
	   
	   
	   mysqli_query($conn,$userInsert);
	   $lastId= mysqli_insert_id($conn);
	   echo $lastId;
	   
	   
	   $sqlSelect="SELECT * FROM slogin_table WHERE id='$lastId'";
	   $records=mysqli_query($conn,$sqlSelect);
	   $count= mysqli_num_rows($records);
	   
	   if($count==1){
		   $field=mysqli_fetch_array($records);
		   $_SESSION['id']=$field['id'];
		   $_SESSION['username']=$field['login_name'];
		   $_SESSION['email']=$field['login_email'];
		   $_SESSION['password']=$field['login_password'];
		   $_SESSION['mobile']=$field['login_phone'];
		   
		   echo"<script language=Javascript>document.location.href='supsignin.php'</script>";
		   
	   }
	   else{
		   
		   echo"sorry";
	   }
	   }
	   
   }
?>


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
	background:url(supreg.jpg) no-repeat;
	background-size: cover;
}
.login-box{
	width: 300px;
	position: absolute;
	top:50%;
	left:50%;
	transform: translate(-80%,-35%);
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
		ul li ul li{
			
			display: none;
			float:none;
			list-style: none;

		}
		ul li:hover ul li{
			display: block;
			background: rgba(255,255,255,.5);
			
			width: 100%;
		}
		ul li a:hover{
			background-color: darkgray;
		}
		.login-box input{
   display: block;
   width: 320px;
   height: 40px;
   padding: 0px;
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
		<center><div style="background:rgba(255,255,255,.5);width:100%;height:80px;">
		<li><a >Home</a></li>
		<li><a href="About.php">About</a></li>
		<li><a href="shop.php">View Products</a></li>
		<li><a href="contact.php">Contact us</a></li>
		<li><a href="signin.php">Sign in</a>
		<ul>
	<li><a href="login.php">Admin</li>
	<li><a href="signin.php">User</li>
		<li><a href="supsignin.php">Supplier</li>
</ul>

	</ul>
	 	
	 			
				
  


<form action="" method="post" enctype="multipart/form-data">
	<div class="login-box">
		<center><div style="background:rgba(250,250,250,.3);width:220%;height:550px;">
		<center><h1 style="font-family: algerian">Register Page</h1></center>
		<p>Already registered?
                    <a href="supsignin.php">Login</a>
                </p>
<table>
<tr>
<td>Name</td><td>:</td><td><input type="text" name="name" required><b style="color:red;">*</b></td>
</tr>

<tr>
<td>Email</td><td>:</td><td><input type="text" name="email" required><b style="color:red;">*</b></td>
</tr>
<tr>
<td>Password</td><td>:</td><td><input type="password" name="password" required><?php if(isset($mispass)){ echo $mispass;}   ?><b style="color:red;">*</b></td>
</tr>
<tr>
<td>Confirm-Password</td><td>:</td><td><input type="password" name="cpass" required><b style="color:red;">*</b></td>
</tr>
<tr>
<td>Mobile</td><td>:</td><td><input type="text" name="mobile"></td>
</tr>
<tr>
  <td></td><td></td><td>
<input type="submit"id="login-btn" name="sub" value="Signup"></td>
</tr>
</table>
</form>


