<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login Form</title>
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
		h1{
			text-align: center;
		}
</style>
<body>
	<ul>
		<center><div style="background:rgba(255,255,255,.5);width:100%;height:80px;">
		<li><a href="text.php>">Home</a></li>
		<li><a href="About.php">About</a></li>
		<li><a>Products</a></li>
		
		<li><a href="contact.php">Contact us</a></li>
		<li><a href="login.php">Sign in</a></li>
	</ul>
	 <form style="text-align:center" name="form1" action="" method="post">
	<div class="login-box"style="margin-top: 50px;
       align-content: center;

	">
		<center><div style="background:rgba(250,250,250,.5);width:100%;height:430px;">
		<h1 style="font-family: algerian">Login Page</h1>
		
		<div class="textbox">
			<input type="text"placeholder="Username"id="username">
		</div>
        <div class="textbox">
			<input type="password"placeholder="Password" id="password_1">
		</div>
		<input class="btn"type="button" id="Sign" name=""value="Sign in">
		<p>Don't have an account?
			<br>
            <a href="Register.php">Register</a>       
                </p>
	     
	
		</div>
		</center>
	</div>
</form>

		<script type="text/javascript">
     	
     		$("#Sign").click(function(){
     			
     			 var username=document.getElementById("username").value;
                var pass1=document.getElementById("password_1").value;
            
            
                 $.post( "include/getdata.php", { username: username, password: pass1 })
                  .done(function( data ) {
                  alert( "Data Loaded: " + data );
                   });


                                  });
              
                     </script>

     	  

</body>
</html>