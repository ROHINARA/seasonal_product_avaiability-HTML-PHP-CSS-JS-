<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>

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
		h1{
			text-align: center;
		}
</style>
<body>
	<ul>
		<center><div style="background:rgba(255,255,255,.5);width:100%;height:80px;">
		<li><a href="text.php>">Home</a></li>
		<li><a href="About.php">About</a></li>
		<li><a>Products</a></li>
		
		<li><a href="contact.php">Contact us</a></li>
		<li><a href="login.php">Sign in</a></li>
	</ul>
	
	
		</div>
		</center>
	</div>
</form>

<?php
require "conn.php";
<table>
<tr>
<th>f1</th>
<th>ProdctName</th>
<th>UnitPrice</th>
<th>Quantity</th>
<th>Description</th>
</tr>


$sql="select *from add_product";
  $result=$conn->query($sql);
  if($result->num_rows>0){
  	while($row=$result->fetch_assoc()){
  		echo"<tr><td>".$row["Image"]."</td><td>".$row["Product Name"]."</td><td>".$row["Unit Price"]."</td><td>".$row["Quantity"]."</td><td>".$row["Description"]."<tr><td>";

  	}
  	echo"</table";
  }
  if($result->num_rows>0){
  	header( "location:productadd.php");
  }
  else{
  echo "not found";
  }

  	
  
 $conn->close();



?>
</table>

</body>
</html>