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
</style>
     
<body >
     <ul>
    <center><div style="background:rgba(187,205,212,.5);width:100%;height:100px;">
    <!-- <li><a href="text.php">Home</a></li>

    --> 
<li><a href="text.php"><span class="glyphicon glyphicon-home"></span>Home</a></li>
                
    <!-- <li><a href="About.php">About</a></li> -->
    <li><a href="cart.php"><span class="glyphicon glyphicon-modal-window"></span>View Products</a></li>
                
   
     
    <li><a href="cartshow.php" style="text-decoration:none; color:blue;font-family: algerian;"><span class="glyphicon glyphicon-shopping-cart">Cart</a></li>
   
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

 <section>
        <div class="main">
            <div>
                 <center><h1>Order Details</h1></center>
            </div>
                    <table align="center" border="0px" style="width:900px; line-height:50px;font-family:serif;background: #26875D">
   
                        <thead>
                            <tr class="head">
                                <th class="column1">order</th>
                                <th class="column2">Image</th>
                                <th class="column3">Title</th>
                                <th class="column4">Price</th>
                                <th class="column5">Quantity</th>
                                <th class="column6">Total</th>
                                <th class="column">Remark</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $uid=$_SESSION['id'];
                            $totaltotal=0;
                                if ($connect->connect_error) {
                                   die("Connection failed: " . $connect->connect_error);
                                } 
                                $sql = "SELECT * FROM add_product AS p , order_details AS o WHERE p.p_id=o.pro_id and o.user_id=$uid";
                                $display = mysqli_query($connect,$sql);
                                while($row= mysqli_fetch_array($display))
                                {
                                    
                                    ?>
                                        <tr><td></td>
                                            <td> <img src=" <?php echo $row["Image"]; ?>" height="120px" width="150px"></td>
                                                    <td> <?php echo $row["Product Name"]; ?></td>
                                                    <td> <?php echo "TK".$row["Unit Price"]; ?></td>
                                                    <td> <?php echo $row["qnty"]; ?></td> 
                                                    <td> <?php echo "TK".$row["total"]; 
                                                    $totaltotal=$totaltotal+$row["total"];
                                                    $_SESSION["t"]=$totaltotal;?></td>

                                                    <td>
                                                        <a href="cartshow.php?delete_id=<?php echo $row["p_id"]; ?>"> Remove </a></td>
                                                    <?php 
                                                        if (isset($_GET["delete_id"])) 
                                                        {
                                                            $id=$_GET["delete_id"];
                                                            $sql2 = "DELETE FROM order_details WHERE pro_id ='$id'";
                                                            $sql3 = "DELETE FROM orderdetails WHERE pro_id ='$id'";
                                                            $run=mysqli_query($connect,$sql3);
                                                            if(mysqli_query($connect,$sql2))
                                                            {
                                                                echo "<script>alert('product is deleted!');
                                                                     window.location.href='http://localhost:8080/bbms/cartshow.php';
                                                                       </script>";
                                                                exit();
                                                            }
                                                        } 
                                }


                             ?>  
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><b>Total</b></td> 
                                <td> <?php echo "TK".$totaltotal; ?></td>
                            </tr>  
                            <tr>
  <td></td><td></td><td>
    <br><br>
    <input type="submit"id="login-btn" name="sub" value="Order Confirm"onclick=window.location="pay2.php"> 

</td>
</tr>
                        </tbody>
                    </table>  

            </div>
    </section>


</body>
</html>