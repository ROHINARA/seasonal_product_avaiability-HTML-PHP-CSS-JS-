<?php
    session_start();
     $connect = mysqli_connect("localhost", "root", "", "seasonal_product"); 
?>
<!DOCTYPE html>
<html>
<head>
<title></title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Payment Form Widget Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>

<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href='//fonts.googleapis.com/css?family=Fugaz+One' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Alegreya+Sans:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery.min.js"></script>
</head>
<style type="text/css">
	body{
	margin:0;
	padding:0;
	font-family: sans-serif;
	background:url(b3.jpg) no-repeat;
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

          
     
    <center><div style="background:rgba(187,205,212,.5);width:100%;height:80px;">
    <!-- <li><a href="text.php">Home</a></li>

    --> 
<!-- <li><img style=" float:left;height: 65px; width: 100px;" src="image/logo.png"></li> -->
<li><a href="text.php"><span class="glyphicon glyphicon-home"></span>Home</a></li>
                
    <!-- <li><a href="About.php">About</a></li> -->
    <li><a href="cart.php"><span class="glyphicon glyphicon-modal-window"></span>View Products</a></li>
      <li><a href="cartshow.php" style="text-decoration:none; color:blue;"><span class="glyphicon glyphicon-shopping-cart">Cart</a></li>
        <li><a href="confmailshow.php"><span class="glyphicon glyphicon-envelope"></span></a></li>
    <ul class="nav navbar-nav navbar-right">
        
        <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span><?php echo "Hi,".$_SESSION['username']; ?></a>
         
        </li>
        
      </ul>
  </ul>
	<div class="main2">
		<div class="content">
			
			<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
					<script type="text/javascript">
						$(document).ready(function () {
							$('#horizontalTab').easyResponsiveTabs({
								type: 'default',            
								width: 'auto', 
								fit: true 
							});
						});
						
					</script>
						<div class="sap_tabs">
							<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
								<div class="pay-tabs">
									<h2>Payment Method</h2>
									  <ul class="resp-tabs-list">
										  <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span><label class="pic1"></label>Bkash</span></li>
										  <!-- <li class="resp-tab-item" aria-controls="tab_item-3" role="tab"><span><label class="pic2"></label>Debit Card</span></li> -->
										  <div class="clear"></div>
									  </ul>	
								</div>
								<div class="resp-tabs-container">
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
										<div class="payment-info">
											<h3>Personal Information</h3>
											<form  action="pay2.php" method="post" enctype="multipart/form-data">
												<div class="tab-for">				
													<h5>NAME: <?php echo $_SESSION["username"]; ?></h5>	
							                        <h5>EMAIL:<?php echo $_SESSION["email"]; ?></h5>
														<h5>ADDRESS:<?php echo $_SESSION["address"]; ?></h5>
														<h5>PHONE:<?php echo $_SESSION["phone"]; ?></h5>					
														<h5>TOTAL:<?php echo $_SESSION["t"]; ?></h5>
												</div>				
												<div class="transaction">
													<div class="tab-form-left user-form">
														<h5>DATE</h5>
														<input type="date" name="date" required>
															
													</div>
													<div class="tab-form-right user-form-rt">
														<h5>TRANSACTION NUMBER</h5>													
														<input type="text" value="" name="TID"required>
													</div>
													<div class="clear"></div>
												</div>
												<input type="submit" name="submit" value="SUBMIT">
											</form>
             <?php  
                    
                        if (isset($_POST["submit"]))
                            {   $uid=$_SESSION['id'];
                                $name=$_SESSION['username'];
                                $phone=$_SESSION['phone'];
                                $email = $_SESSION['email'];
                                $address=$_SESSION['address'];
                                $total=$_SESSION['t'];
                                $date=$_POST["date"];  
                                $TID=$_POST["TID"]; 
                                
                                $insertion="insert into payment(u_id,name,phone,holderemail,address,status,total,date) values('$uid','$name','$phone','$email','$address','$TID','$total','$date')";

                                $sql1="delete from order_details where user_id=$uid";
                                $run2=mysqli_query($connect,$sql1);
                                $run=mysqli_query($connect,$insertion);
                                    if($run)
                                        {                                           
                                            echo "<script>alert('Thank you!Your Payment completed Successfully');
                                                      window.location.href='http://localhost:8080/bbms/confmailshow.php';</script>";
                                        }
                             }
                ?> 
										</div>
									</div>
										</div>
									</div>
								</div>	
							</div>
						</div>	
		</div>
	</div>
</body>
</html>