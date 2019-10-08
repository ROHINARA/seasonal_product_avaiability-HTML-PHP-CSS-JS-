<?php
 session_start();

 require_once("dbconnect.php");
 
 
?>

<?php
   if(isset($_POST['update'])){
	   
	   
	   
	   
	   $userUpdate="UPDATE login_table SET
	   login_name='$_POST[name]',
	   login_email='$_POST[email]',
	   login_password='$_POST[password]',
	   login_phone='$_POST[mobile]'
	      WHERE id='$_SESSION[id]'";
	   
	   
	   mysqli_query($conn,$userUpdate);
	   
	   
	   
	   $sqlSelect="SELECT * FROM login_table WHERE id='$_SESSION[id]'";
	   $records=mysqli_query($conn,$sqlSelect);
	   $count= mysqli_num_rows($records);
	   
	   if($count==1){
		   $field=mysqli_fetch_array($records);
		   $_SESSION['id']=$field['id'];
		   $_SESSION['username']=$field['login_name'];
		   $_SESSION['email']=$field['login_email'];
		   $_SESSION['password']=$field['login_password'];
		   $_SESSION['mobile']=$field['login_phone'];
		   
		   echo"<script language=Javascript>document.location.href='profile.php'</script>";
		   
	   }
	   else{
		   
		   echo"sorry";
	   }
	   
	   
   }
?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
   
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
		<li><a href="text.php"><span class="glyphicon glyphicon-home">Home</a></li>
		<!-- <li><a href="About.php">About</a></li> -->
		<li><a href="cart.php">View Products</a></li>
		<li><a href="profile.php" style="text-decoration:none; color:blue;">Profile</a></li>
           
		<!-- <li><a href="contact.php">Contact us</a></li> -->
		<!-- <li><a href="logout1.php"><span class="glyphicon glyphicon-user">Sign out</a></li> -->
		<ul class="nav navbar-nav navbar-right">
        
        <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span><?php echo "Hi,".$_SESSION['username']; ?></a>
          <ul class="dropdown-menu">
            <li><a href="cartshow.php" style="text-decoration:none; color:blue;"><span class="glyphicon glyphicon-shopping-cart">Cart</a></li>
            <li class="divider"></li>
            <li><a href="profile.php" style="text-decoration:none; color:blue;">Profile</a></li>
           <li class="divider"></li>
            <li><a href="logout1.php" style="text-decoration:none; color:blue;">Logout</a></li>
          </ul>
        </li>
        
      </ul>
  </ul>
	

<form action="" method="post" enctype="multipart/form-data">
	<div class="login-box">
		<center><div style="position:absolute;transform: translate(-20%,-45%);background:rgba(250,250,250,.2);width:220%;height:530px;">
		<h1 style="font-family: algerian">Update your profile</h1>
		
<table>
<tr>
<td>Name</td><td>:</td><td><input type="text" name="name" value="<?php echo $_SESSION['username']; ?>" ><b style="color:red;">*</b></td>
</tr>

<tr>
<td>Email</td><td>:</td><td><input type="text" name="email" value="<?php echo $_SESSION['email']; ?>" ><b style="color:red;">*</b></td>
</tr>
<tr>
<td>Password</td><td>:</td><td><input type="password" name="password" value="<?php echo $_SESSION['password']; ?>" ><b style="color:red;">*</b></td>
</tr>
<tr>
<td>Confirm-Password</td><td>:</td><td><input type="password" name="cpass" ><b style="color:red;">*</b></td>
</tr>
<tr>

<td>Mobile</td><td>:</td><td><input type="text" name="mobile" value="<?php echo $_SESSION['phone']; ?>" ></td>
</tr>
<tr>
  <td></td><td></td><td>
<input type="submit"id="login-btn" name="update" value="update"></td>
</tr>
</table>
</form>
</body>
