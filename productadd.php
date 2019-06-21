<?php

include "connection.php";
?>
<!--page content area main-->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Products</title>
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
</style>
<body>
	<ul>
		<center><div style="background:rgba(255,255,255,.5);width:100%;height:80px;">
		<li><a >Home</a></li>
		<li><a href="About.php">About</a></li>
		<li><a>Products</a></li>
		<li><a href="contact.php">Contact us</a></li>
		<li><a href="login.php">Sign in</a></li>
	</ul>

					<center><form name="form1" action=""method="post"class="col-lg-6"enctype="multipart/form-data">
						<div style="background:rgba(250,250,250,.5);width:100%;height:520px;">
                         <center><h1 style="font-family: algerian">ADD PRODUCTS</h1></center>
                    
							<table class="table table-bordered"style="border-style:groove;background-color: #E6E6FA">
								<tr style="border-style:groove;">
									<td><br>Products Image</td>
										<td><br><input type="file"name="f1"required="">
									</td>
								</tr>
								

								<tr style="border-style:groove;">
								<td><br>Product Name:</td>
									<td><br><input type="text"class="form-control"placeholder="Product Name" name="ProductName"required="">
								</td>
								</tr>
								

								<tr>
								<td><br>Unit Price:</td>
									<td><br><input type="text"class="form-control"placeholder="Unit Price" name="UnitPrice"required="">
								</td>
								</tr>
								


								<tr>
							    <td><br>Product Quantity:</td>
							    <td><br><input type="text"class="form-control"placeholder="Product Quantity" name="Quantity"required="">
								</td>
								</tr>


								<tr>
								<td><br>Product Description:</td>
									<td><br>
										<textarea cols="19" rows="10"class="form-control"placeholder="Product Description" name="Description"required=""style="border-radius: 15px 50px;
  background: #D8BFD8;
  padding: 20px; 
  width: 200px;
  height: 150px;"></textarea>

								</td>
								</tr>
								<center><tr>
								<td><br><input type="submit"name="submit1"class="btn btn-default submit"value="insert products details"style="background-color: #D8BFD8;color: black;align-items: center;">
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