<?php
require "conn.php";

$username=$_POST["username"];
$password=$_POST["password"];
$email=$_POST["email"];

$phone=$_POST["phone"];

$type=$_POST["type"];


$sql="Insert into login_table (login_name,login_password,login_phone,login_type,login_email) values('$username','$password','$phone','$type','$email')";

  $result=$conn->query($sql);
 
 if($result){
 	echo "Registered!";
   
 }
 else{
 	echo "Not Registered!";
 }



?>