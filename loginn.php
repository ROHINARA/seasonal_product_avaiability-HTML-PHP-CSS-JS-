<?php
include "db.php";
session_start();
if(isset($_POST  ["userLogin"])){

		

		$email=mysqli_real_escape_string($con,$_POST["userEmail"]);
		$password=($_POST["userPassword"]);
		$sql="SELECT * FROM login_table WHERE login_email='$email' 
		AND login_password='$password'";
		$run_query = mysqli_query($con,$sql);
	$count = mysqli_num_rows($run_query);
	
		if($count==1){
			$row=mysqli_fetch_array($run_query);  
			$_SESSION["uid"]=$row["id"];
			$_SESSION["name"]=$row["login_name"];
			echo "truefghjkyuhi";

		}
	}
?>