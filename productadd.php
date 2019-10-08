<?php
session_start();
include "connection.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Products</title>

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
	/*background:#BAEDE5;*/
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
.form_control{
width: 280px;
height: 300px;

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
</style>
<body>
	<ul>
		<center><div style="background:rgba(187,205,212,.5);width:100%;height:80px;">
			<li><img style=" float:left;height: 65px; width: 150px;" src="image/logo.png"></li>
		<li><a href="text.php"><span class="glyphicon glyphicon-home"></span>Home</a></li>
		<!-- <li><a href="About.php">About</a></li> -->
		<li><a href="productadd.php">Add Products</a></li>
		
		<!-- <li><a href="contact.php">Contact us</a></li> -->
		<!-- <li><a href="login.php">Sign out</a></li> -->
		<li><a href="mailtable.php"><span class="glyphicon glyphicon-envelope"></span></a></li>
		<ul class="nav navbar-nav navbar-right">
        
        <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span><?php echo "Hi,".$_SESSION['username']; ?></a>
          <ul class="dropdown-menu">
            
            <li class="divider"></li>
            
            <li><a href="logout1.php" style="text-decoration:none; color:blue;">Logout</a></li>
          </ul>
        </li>
        
      </ul>
	</ul>

					<center><form name="form1" action=""method="post"class="col-lg-12"enctype="multipart/form-data">
						<!-- <div style="background:rgba(250,250,250,.5);width:100%;height:520px;">
                         --> <center><h1 style="font-family: algerian"><b>ADD PRODUCTS</b></h1></center>
                    
							<table class="table table-bordered"style="background-color: #AED6F1;width: 400px">
								<!-- <tr style="border-style:groove;"> -->
									<td><br><b>Products Image</b></td>
										<td><br><input type="file"name="f1"required="">
									</td>
								</tr>
								

								<!-- <tr style="border-style:groove;"> -->
								<td><br><b>Product Name:</b></td>
									<td><br><input type="text"class="form-control"placeholder="Product Name" name="ProductName"required="">
								</td>
								</tr>
								

								<tr>
								<td><br><b>Unit Price:</b></td>
									<td><br><input type="text"class="form-control"placeholder="Unit Price" name="UnitPrice"required="">
								</td>
								</tr>
								


								<tr>
							    <td><br><b>Product Quantity:</b></td>
							    <td><br><input type="text"class="form-control"placeholder="Product Quantity" name="Quantity"required="">
								</td>
								</tr>


								<tr>
								<td><br><b>Product Description:</b></td>
									<td><br>
										<textarea cols="19" rows="10"class="form-control"placeholder="Product Description" name="Description"required=""style="border-radius: 15px 50px;
  background: #E6E6FA;
  padding: 20px; 
  width: 200px;
  height: 150px;"></textarea>

								</td>
								</tr>
								<center><tr>
								<td><br><input type="submit"name="submit1"class="btn btn-default submit"value="insert products details"style="background: gray"onclick=window.location="cart.php">
								</td>
								</tr></center>
							</table>
							
						</form>
						</center>
					</div>
				</div>
			</div>
		</div>
		</div>
	</div>
	<!--/page content-->
	<?php
if(isset($_POST["submit1"]))
{
	$tm=md5(time());
	$fnm=$_FILES["f1"]["name"];
	$dst="./products_image/".$tm.$fnm;
	$dst1="products_image/".$tm.$fnm;
	move_uploaded_file($_FILES["f1"]["tmp_name"], $dst);
	echo "<img src=".$dst1." height=20 width=30 />";



	$sql="insert into add_product values('','$dst1','$_POST[ProductName]','$_POST[UnitPrice]',
					'$_POST[Quantity]','$_POST[Description]')";

	mysqli_query($link,$sql);
	
		?>
		<script type="text/javascript">
		alert("Products added successfully");
		</script>
		<?php
		
}
?>
</body>
</html>