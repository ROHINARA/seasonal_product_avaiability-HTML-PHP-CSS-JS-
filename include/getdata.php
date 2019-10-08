<?php
require "conn.php";

$username=$_POST["username"];
$password=$_POST["password"];

$sql="select *from admin where Name='$username' && Password='$password'";

  $result=$conn->query($sql);
      echo $sql;
 
  if($result->num_rows>0){
  	echo "logged in successfully";
  	  echo header("refresh:2;url=productget.php");
  }
  else{
  echo "not found";
  }



?>