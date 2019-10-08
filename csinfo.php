<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "seasonal_product";

$conn = mysqli_connect($host, $user, $password, $db);
$query="select * from login_table";
$result=mysqli_query($conn,$query);


?>
<!DOCTYPE html>
<html>
  
     <head>
	 <link rel="stylesheet" type="text/css" href="css/index.css">
	 </head>
	 <style type="text/css">
	body{
margin:0;
	padding:0;
	font-family: sans-serif;
	background:url(login.jpg) no-repeat;
	background-size: cover;
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
     
<body background="login.jpg">
     
		<ul>
		<center><div style="background:rgba(255,255,255,.5);width:100%;height:80px;">
		<li><a >Home</a></li>
		<li><a href="About.php">About</a></li>
		<li><a>Products</a></li>
		<li><a href="contact.php">Contact us</a></li>
		<li><a href="login.php">Sign in</a></li>
	</ul>
		</div>
		</div>
   <table align="center" border="1px" style="width:600px; line-height:40px;">
        <tr>
		  <th colspan="6"><h2>Product Details</h2></th>
		  </tr>
		  <t>
		   <th> ID </th>
		   <th> Product Nmae </th>
		   <th> Unit Price </th>
		   <th> Quantity </th>
		   <th> Description </th>
		   <th>Image</th>
		   
		</th>
		
		<?php
		 while($rows=mysqli_fetch_assoc($result))
		 {
		?>
                  <tr>
				   <td><?php echo $rows['id']; ?></td>
				   <td><?php echo $rows['login_name']; ?></td>
				   <td><?php echo $rows['login_password']; ?></td>
				   <td><?php echo $rows['login_email']; ?></td>
				   <td><?php echo $rows['login_type']; ?></td>
			        <td>
			        	<img src=" <?php echo $rows["Image"]; ?>" height="200px" width="210px"></td>

				   
				  
				  </tr>
	   <?php
		 }
		?>
   </table>


</body>
</html>