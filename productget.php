<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "seasonal_product";

$conn = mysqli_connect($host, $user, $password, $db);
$query="select * from add_product";
$result=mysqli_query($conn,$query);


?>
<!DOCTYPE html>
<html>
  
     <head>
	 <link rel="stylesheet" type="text/css" href="css/index.css">
	 <title>Seasonal Product</title>
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
     
	 </head>
	 <style type="text/css">
	body{
margin:0;
	padding:0;
	font-family: sans-serif;
	background:url(b.jpg) no-repeat;
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
			line-height: 30px;
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
		<center><div style="background:rgba(255,255,255,.5);width:220%;height:100px;">
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
   <table align="center" border="1px" style="width:900px; line-height:40px;background:#B9E3FF">
   

        <tr>
		  <th colspan="7"><center><h2>Product Details</h2></center></th>
		  </tr>
		  <t>
		   <th> ID </th>
		   <th> Product_Name </th>
		   <th> Unit_Price </th>
		   <th> Quantity </th>
		   <th> Description </th>
		   <th>Image</th>
		   <!-- <th>Update</th> -->
		   <th>Delete</th>

		   
		</th>
		
		<?php
		 while($rows=mysqli_fetch_assoc($result))
		 {
		?>
                  <tr>
				   <td><?php echo $rows['p_id']; ?></td>
				   <td><?php echo $rows['Product Name']; ?></td>
				   <td><?php echo $rows['Unit Price']; ?>Tk</td>
				   <td><?php echo $rows['Quantity']; ?>Kg</td>
				   <td><?php echo $rows['Description']; ?></td>
			        <td>
			        	<img src=" <?php echo $rows["Image"]; ?>" height="200px" width="210px"></td>
			        	<!-- <td><a href="produpdate.php?idd=<?php echo $rows['id'];?>"class='btnb'>Update</a></td> -->
			        	<td><a href="proddelete.php?idd=<?php echo $rows['p_id'];?>" class='btnb'>Delete</a></td> 

				   
				  
				  </tr>
	   <?php
		 }
		?>
   </table>


</body>
</html>