<?php
session_start();
include "db.php";
if(isset($_POST["getProduct"])){
	
	$product_query = "SELECT * FROM add_product ORDER BY id ASC";  
	$run_query = mysqli_query($con,$product_query);
	if(mysqli_num_rows($run_query) > 0){
		while($row = mysqli_fetch_array($run_query)){
			$pro_id    = $row['id'];
			
			$pro_title = $row['Product Name'];
			$pro_price = $row['Unit Price'];
			$pro_image = $row['Image'];
			
			echo "
				<div class='col-md-4'>
							<div class='panel panel-info'>
								<div class='panel-heading'>$pro_title</div>
								<div class='panel-body'>
									<img src='$pro_image' style='width:230px; height:250px;'/>
								</div>
								<div class='panel-heading'>Tk.$pro_price.00
									<button pid='$pro_id' style='float:right;'    class='btn btn-danger btn-xs'>AddToCart</button>
								</div>
							</div>
						</div>	
			";
		}
	}
}
	if(isset($_POST["addToCart"])){
		

		$p_id = $_POST["proId"];
		$user_id=$_SESSION["uid"];
		$sql = "SELECT * FROM add_product WHERE  id = '$p_id' AND user_id = '$user_id'";
		$run_query=mysqli_query($con,$sql);
		$count=mysqli_num_rows($run_query);
		if($count>0){
			echo "product is already added into the cart Continue Shopping";
		}
		else
		{
			$sql="SELECT *FROM add_product WHERE id='$p_id'";
			$run_query=mysql_query($con,$sql);
			$row=mysqli_fetch_array($run_query);
			$id=$row["id"];
			$pro_name=$row["Product Name"];
			$pro_image=$row["Image"];
			$pro_price=$row["Unit Price"];
			$sql = INSERT INTO `cart` (`id`, `p_id`, `ip_add`, `user_id`, `product_title`, `product_image`, `qty`, `price`, `total_amt`) VALUES (NULL, '$p_id', '0', '$user_id', '$pro_name', '$pro_image', '1', '$pro_price ', '$pro_price');
			if(mysqli_query($con,$sql)){
				echo"added";
			}
			
		}
		}
	


?> 