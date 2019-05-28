<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Register Form</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js">
	</script>

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
		<li><a>Products</a></li>
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
			<select name="type" id="typeid">
			<option value="-1">select user type</option>
				<option value="Admin">Admin</option>
				<option value="User">User</option>'
				<option value="Suplier">Suplier</option>
			</select>
		
		<div class="textbox">
			<input type="text"placeholder="Username"id="username" name=""value="">
		</div>
        <div class="textbox">
			<input type="password"placeholder="password" id="password_1"name=""value="">
		</div>
		<div class="textbox">
			<input type="password"placeholder="Confirm password" id="password_2"name="Confirm password"value="">
		</div>
		<div class="textbox">
			<input type="Email"placeholder="Email"id="email" name="Email"value="">
		</div>
		<div class="textbox">
			<input type="Phone Number"placeholder="Phone Number" id="phone" name="Phone Number"value="">
		</div>
		<input class="btn"type="button"id="Submit" name="Register"value="Register">
		</div>
</div>
</center>
</div>
</form>

     <script type="text/javascript">
     	
     		$("#Submit").click(function(){
     			alert("alert click");

     			var email=document.getElementById("email").value;
     		    var phone=document.getElementById("phone").value;
     		    var username=document.getElementById("username").value;
     		    var type=document.getElementById("typeid").value;
                var pass1=document.getElementById("password_1").value;
                var pass2=document.getElementById("password_2").value;

     			

     	  if(pass1==pass2){

                 $.post( "include/senddata.php", { username: username, password: pass1, phone: phone,email:email,type:type })
                  .done(function( data ) {
                  alert( "Data Loaded: " + data );
                                      });

     	  }


	});
     </script>
	
</body>

</html>