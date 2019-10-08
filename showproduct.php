<?php
    session_start();
     $connect = mysqli_connect("localhost", "root", "", "seasonal_product"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <title>seasonal Product</title>    
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      
</head>
<style type="text/css">
    body{
margin:0;
  padding:0;
  font-family: sans-serif;
  background:url(b3.jpg) no-repeat;
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
    
    .box{  
  max-width: 1400px;
  border: none;
  border-bottom: 1px solid #d6d6d6;
  background: #f4f4f4;
  outline: none;
  height: 380px;
}
label{
  text-align: center;
  color: #000;
  font-size:24px; 
  font-weight: bold;
  margin: 0 0 40px;
}
.button {
  border: 0;
  outline: none;
  border-radius: 0;
  padding: 15px 0;
  font-size: 2rem;
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: .1em;
  background: #000;
  color: #ffffff;
  transition: all 0.5s ease;
  -webkit-appearance: none;
}
.button-block {
  display: block;
  width: 50%;
}
.form-group input[type="text"], input[type="password"],input[type="email"]
{
  border: none;
  background: transparent;
  outline: none;
  height: 50px;
  font-size: 22px;
  color:#000;
  width: 100%;
}

</style>
<body>
    <ul>
    <center><div style="background:rgba(187,205,212,.5);width:100%;height:80px;">
    <li><a href="text.php"><span class="glyphicon glyphicon-home"></span>Home</a></li>
    <!-- <li><a href="About.php">About</a></li> -->
    <li><a href="cart.php">View Products</a></li>
    <!-- <li><a href="contact.php">Contact us</a></li> -->
    <li><a href="cartshow.php" style="text-decoration:none; color:blue;font-family:algerian"><span class="glyphicon glyphicon-shopping-cart">Cart</a></li>
     <!--  <li><a href="confmailshow.php"><span class="glyphicon glyphicon-envelope"></span></a></li>
    -->
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
            	<h1>Product</h1>
            	<?php
                    $id=$_SESSION["s"];
                    $uid=$_SESSION['id'];
                    if ($connect->connect_error) {
                        die("Connection failed: " . $connect->connect_error);
                    } 
                    $sql = "SELECT * FROM add_product where p_id=$id";
                    $display = mysqli_query($connect,$sql);
                    // print_r($id);
                    // print_r($uid);
                    while($row= mysqli_fetch_array($display))
                    {
                ?>
            	<div class="box col-md-10">
                    <div class="col-md-3">
                        <div class="photo">
                            <img id="Image"src=" <?php echo $row['Image']; ?>"height="300px" width="275px">
                        </div>
                        
                    </div>
                    <div class="col-md-3">
                    	<div class="form-group">
                            <label>Product:</label>
                        </div>
                    	<div class="form-group">
                    	    <label>Product price:</label>
                    	</div>
                    	
                        <div class="form-group">
                            <label>Quantity:</label>
                        </div>
                    	
                    </div>
                    <form action="showproduct.php" method="post" enctype="multipart/form-data">

                    <div class="col-md-3">
                     	<div class="form-group">
                            <label><?php echo $row["Product Name"]; ?></label>
                        </div>
                        
                    	<div class="form-group">
                    	    <label><?php echo $row["Unit Price"]; 
                                    $_SESSION['price']= $row["Unit Price"]; ?></label>
                    	</div>
                    	
                        <div class="form-group">
                            <input type="number" name="order" placeholder="min (100)" required />
                        </div>
                        
                    	<button type="submit" name="submit" class="btn btn-primary btn-block text-uppercase">Add to cart</button>
                    	
                    </div>
                    </form>
            	</div>
            	<?php  
                    }
                        if (isset($_POST['submit']))
                            {
                                $pid=$_SESSION["s"];
                                $uid=$_SESSION['id'];
                                $quantity=$_POST['order'];
                                $total=$_SESSION['price']*$_POST['order'];  
                                
                                $insertion="insert into order_details (pro_id, user_id,qnty,total) values('$pid','$uid','$quantity','$total')";
                                $run=mysqli_query($connect,$insertion);
                                 $insert="insert into orderdetails (pro_id, user_id,qnty,total) values('$pid','$uid','$quantity','$total')";
                                $result=mysqli_query($connect,$insert);

                                    if($run)
                                        {                                           
                                            echo "<script>alert('Order done!');
                                                      window.location.href='http://localhost:8080/bbms/cart.php';</script>";
                  

                                        }
                            }
                ?> 
            </div>
         </div>
    </section>

</body>
</html>