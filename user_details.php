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
	  <title>Seasonal Product</title>
	 
	 </head>
	 <style type="text/css">
	body{
margin:0;
	padding:0;
	/*background: #31AD77;*/
	background:url(b3.jpg) no-repeat;
	font-family: sans-serif;
	background-size: cover;
}
.btnr{
	border-radius:5px;
	padding:5px;
	background:#ff0000;
	color:white;
	
}

.btnr:hover{
	border-radius:5px;
	padding:5px;
	background:#ff5e5e;
	color:white;
	
}


.btnb{
	border-radius:5px;
	padding:5px;
	background:#43a7bc;
	color:white;

}

.btnb:hover{
	border-radius:5px;
	padding:5px;
	background:#68b9ca;
	color:white;


}


ul{
			margin: 0px;
			padding: 0px;
			list-style: none;

		}
		ul li{
			float:left;
			width: 225px;
			height: 60px;
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
		<center><div style="background:rgba(187,205,212,.5);width:220%;height:100px;">
		<li><a href="text.php"><span class="glyphicon glyphicon-home"></span>Home</a></li>
	    <li><a href="productget.php">Products Info</a></li>
		<li><a href="user_details.php">	User Info</a></li>
		<li><a href="suppliers_details.php">Supplier Info</a></li>
		<li><a href="allorders.php">Orders</a></li>
		<li><a href="Email.php"><span class="glyphicon glyphicon-envelope"></span></a></li>
	    <li><a href="logout1.php"><span class="glyphicon glyphicon-user"></span>SIGN OUT</a></li>
	
	</ul>
		</div>
      
	 
	    
		</div>
   <table align="center" border="1px" style="width:1200px; line-height:40px;font-family: algerian;background:#B9E3FF">
        <tr>
		  <th colspan="10"><center><h2>Customer's Information</h2></center></th>
		  </tr>
		  <t>
		   <th> ID </th>
		   <th>  Name </th>
		   <th> Password </th>
		   <th> Email </th>
		   <th> Address</th>
		   <th>Phone</th>
		  

		   
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
				   <td><?php echo $rows['login_address']; ?></td>
				   <td><?php echo $rows['login_phone']; ?></td>
			       
			       
				  </tr>
	   <?php
		 }
		?>
   </table>


</body>
</html>