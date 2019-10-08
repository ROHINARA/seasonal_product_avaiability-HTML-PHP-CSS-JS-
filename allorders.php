<?php
    session_start();
     $connect = mysqli_connect("localhost", "root", "", "seasonal_product"); 
?>
<!DOCTYPE html>
<html>
  
     <head>
	 <link rel="stylesheet" type="text/css" href="css/index.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      
	 </head>
	 <style type="text/css">
	body{
margin:0;
	padding:0;
	font-family: sans-serif;
    /*background: #72D4B2;*/
	background:url(b3.jpg) no-repeat;
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
#login-btn{
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
.rightsidemenu {
    float: right;
    text-align: center;
    width: 100%;
    margin: 0px;
    background-color: #169e8f;
 
    font-size: 15px;
    color: #fff;
    font-weight: bold;
    height: 5px;
    overflow: auto;
}
.rightsidemenu th
  margin-top: 5px;
  border: 2px solid;
  padding: 10px 2px;
  width: 5px;
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
 			</table>
		</div>
		<div>
			<table class="rightsidemenu">
				<tr style="font-weight: bold;" colspan="10" bgcolor="#4DB849">
					<th>Id</th>
					<th>User Id</th>
					<th>Product Id</th>
					<th>Total</th>
					<th>User Name</th>
					<th>User Mobile</th>
					<th>User Email</th>
					<th>User Address</th>
					<th>Image</th>
				</tr>
				<tr>
				<?php
				// $uid=$_SESSION['id'];
				  $totaltotal=0;
					$query = "SELECT * FROM orderdetails AS o , login_table AS u, add_product AS a WHERE o.user_id=u.id AND o.pro_id=a.p_id ORDER BY order_id ASC";
					$run = mysqli_query($connect,$query);
					while ($row=mysqli_fetch_assoc($run)) {
						
					
						
					
					 ?>

					 
                                            
                                                    <th> <?php echo $row["order_id"]; ?></th>
                                                     <th> <?php echo $row["user_id"]; ?></th>
                                                      <th> <?php echo $row["pro_id"]; ?></th>
                                                     <th> <?php echo "TK".$row["total"]; 
                                                    $totaltotal=$totaltotal+$row["total"];?></th>
                                                     <th> <?php echo $row["login_name"];?></th>
                                                        <th> <?php echo $row["login_phone"]; ?></th>
                                                          <th><?php echo $row['login_email']; ?></th>
                                                        <th><?php echo $row['login_address']; ?></th>
                                                          <th> <img src=" <?php echo $row["Image"]; ?>" height="75px" width="75px"></th>
                                                          </tr>
                                                    <?php
                                                }
?>
			</table>
		</div>
	</body>
</html>