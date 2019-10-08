 <!DOCTYPE html>
 <?php
include("includes/db.php");
 ?>
 <html>
 <head>
 	<title>Inserting Product</title>
 	<script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>
 	<script>
 		tinymce.init({selector:'textarea'});
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
		<center><div style="background:rgba(255,255,255,.5);width:100%;height:70px;">
		<li><a>Home</a></li>
		<li><a>About</a></li>
		<li><a>Products</a></li>
		<li><a">Contact us</a></li>
		<li><a">Sign in</a></li>
	</ul>

<br><br>
 	<form action="insert_product.php"method="post"entype="multipart/form-data">
 		
 		<div style="background:rgba(250,250,250,.3);width:100%;height:540px;">	
 		<table align="center"width="700"border="5"bgcolor="#E6E6FA">
 			<tr align="center">
 				<td colspan="7"><h2 style="font-family: algerian;color: blue">Insert New Products Here</h2></td>
 			</tr>
 			<tr>
 				<td align="left"><b>Product Title:</b></td>
 				<td><input type="text"name="product_title"required/></td>
 			</tr>
 			<tr>
 				<td align="leftt"><b>Product Category:</b></td>
 				<td>
 					<select name="product_cat"required>
 						<option style="text-decoration-color: blue">Select a Category</option>
 						<?php
 						$get_cats="select *from categories";
	$run_cats=mysqli_query($con,$get_cats);
	while($row_cats=mysqli_fetch_array($run_cats)){
		$cat_id=$row_cats['cat_id'];
		$cat_title=$row_cats['cat_title'];
		echo"<option value='$cat_id'>$cat_title</option>";
	}
 						?>
 						
 					</select>
 				</td>
 			</tr>
 			<tr>
 				<td align="left"><b>Product Image:</b></td>
 				<td><input type="file"name="product_image"required/></td>
 			</tr>
 			<tr>
 				<td align="left"><b>Product Price:</b></td>
 				<td><input type="text"name="product_price"required/></td>
 			</tr>
 			<tr>
 				<tr>
 				<td align="left"><b>Product Quantity:</b></td>
 				<td><input type="text"name="product_qnt"required/></td>
 			</tr>
 			<tr>
 				<td align="left"><b>Product Description:</b></td>
 				<td><textarea name="product_desc"cols="20" rows="10"></textarea></td>
 			</tr>
 			<tr align="center">
 				<td colspan="8"><input type="submit"name="insert_post"value="Insert Now"/></td>
 			</tr>
 		</table>
</div>
 	</form>
 
 </body>
 </html>

 <?php

if(isset($_POST["insert_post"])){

	$product_title=$_POST['product_title'];
	$product_cat=$_POST['product_cat'];
	$product_price=$_POST['product_price'];
	$product_qnt=$_POST['product_qnt'];
	$product_desc=$_POST['product_desc'];
    $file=$_FILES['product_image'];

                                print_r($file);

                                $fileName=$_FILES['product_image']['name'];
                                $fileTmpName=$_FILES['product_image']['tmp_name'];
                                $fileSize=$_FILES['product_image']['size'];
                                $fileError=$_FILES['product_image']['error'];
                                $fileType=$_FILES['product_image']['type'];

                                $fileExt=explode('.',$fileName );
                                $fileActualExt =strtolower(end($fileExt));
                                $allowed = array('jpg','jpeg','png','PNG');

                                if (in_array($fileActualExt, $allowed)) 
                                {
                                    $fileDestination='product_images/'.$fileName;
                                    move_uploaded_file( $fileTmpName, $fileDestination);
                                }
	


       echo $insert_product="insert into products(product_cat,product_title,product_price,product_qnt,product_desc,product_image)values('$product_cat','$product_title','$product_price','$product_qnt','$product_desc','$fileDestination')";
    

    $insert_pro=mysqli_query($con,$insert_product);
    
	

	if($insert_pro){
		echo"<script>alert('Product Has been inserted!')</script>";
		echo"<script>window.open('insert_product.php','_self'</script>";
	}
	

        }

	
	


	








 ?>