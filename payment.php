<?php
    session_start();
     $connect = mysqli_connect("localhost", "root", "", "seasonal_product"); 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Register Form</title>
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
.signupform_content h2 {
  margin: 0px 0 0 0;
  padding: 0px 0px 20px 0px;
  font-size: 40px;
  color: #169E8F;
  font-weight: bold;
  text-align: center;
}
.signupform_text {
  font-size: 18px;
  padding: 0;
  font-weight: bold;
  color: #41A62D;
  font-style: normal;
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
	width: 260px;
	height: 80px;
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
	float:center;
  max-width: 800px;
  border: none;
  border-bottom: 1px solid #d6d6d6;
  background: white;
  outline: none;
  height: 380px;
}
.main{
	max-width: 1500px;
	margin:auto;
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
  font-size: 1rem;
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
#login-btn:hover{
   background-color: #fff;	
   color: #000;	
}	


</style>
<body>
 
	 <ul>

          
     
    <center><div style="background:rgba(220,215,25,.3);width:100%;height:80px;">
    <!-- <li><a href="text.php">Home</a></li>

    --> 
<!-- <li><img style=" float:left;height: 65px; width: 100px;" src="image/logo.png"></li> -->
<li><a href="text.php"><span class="glyphicon glyphicon-home"></span>Home</a></li>
                
    <!-- <li><a href="About.php">About</a></li> -->
    <li><a href="cart.php"><span class="glyphicon glyphicon-modal-window"></span>View Products</a></li>
                
    <!-- <li><a href="cart.php">View Products</a></li>
     -->
      <li><a href="cartshow.php" style="text-decoration:none; color:blue;"><span class="glyphicon glyphicon-shopping-cart">Cart</a></li>
        <li><a href="confmailshow.php"><span class="glyphicon glyphicon-envelope"></span></a></li>
     <!-- <li><a href="logout1.php">Sign out</a></li> -->
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
<!--<div style="position:absolute;transform: translate(90%,10%);background:pink;font-size:30px;width:350px;height:350px;padding:100px;border:1px solid black; min-height:200px;border-radius:20px">
	 
                              

	Customer Name:<?php echo $_SESSION["username"]; ?>
	Number:<?php echo $_SESSION["phone"]; ?>
	Address:<?php echo $_SESSION["address"]; ?>

	Total Amount:<?php echo $_SESSION["t"];?>TK


   
   
</div>-->
<section>
        <div class="main">
            <div style="font-family: algerian">
            	<h1>Payment</h1>
           
            	<div class="box col-md-11">
                    <div class="col-md-4">
                    	<div class="form-group">
                            <label>Customer Name:</label>
                        </div>
                        <div class="form-group">
                    	    <label>Phone Number:</label>
                    	</div>
                    	<div class="form-group">
                    	    <label>Address:</label>
                    	</div>
                    	<div class="form-group">
                        	<label>Total Amount:</label>
                        </div>
                    	
                    </div>
                     <form action="payment.php" method="post" enctype="multipart/form-data">

                    <div class="col-md-7">
                    	<div class="form-group">
                            
                            <input type="text" id=""name="" placeholder="<?php echo $_SESSION["username"]; ?>">
                        </div>
                        <div class="form-group">
                    	    <label><?php echo $_SESSION["phone"]; ?></label>
                    	</div>
                    	<div class="form-group">
                    	    <label><?php echo $_SESSION["address"]; ?></label>
                    	</div>
                    	<div class="form-group">
                        	<label><?php echo $_SESSION["t"];?>TK</label>
                        </div><br><br>
                    <button type="submit" name="submit" class="btn btn-primary btn-block text-uppercase">Checkout</button>
                      	</div>
                      </form>
                      </div>
                      <?php  
                    
                        if (isset($_POST["submit"]))
                            {   $uid=$_SESSION['id'];
                                $name=$_SESSION['username'];
                                $phone=$_SESSION['mobile'];
                               $email = $_SESSION['email'];
                                $address=$_SESSION['address'];
                                $total=$_SESSION['t'];  
                                
                                $insertion="insert into payment(u_id,name,phone,holderemail,address,status,total,date) values('$uid','$name','$phone','$email','$address','unread','$total',CURRENT_TIMESTAMP)";
                                $inser="insert into payment(u_id,name,phone,holderemail,address,status,total,date) values('$uid','$name','$phone','$email','$address','unread','$total',CURRENT_TIMESTAMP)";
                                $run3=mysqli_query($connect,$inser);

                                $sql1="delete from order_details where user_id=$uid";
                                $run2=mysqli_query($connect,$sql1);
                                $run=mysqli_query($connect,$insertion);
                                    if($run)
                                        {                                           
                                            echo "<script>alert('Thank you!Your Order completed Successfully');
                                                      window.location.href='http://localhost:8080/bbms/cart.php';</script>";
                                        }
                             }
                ?> 
            	 
            	
            </div>
         </div>
    </section>
</body>
</html>