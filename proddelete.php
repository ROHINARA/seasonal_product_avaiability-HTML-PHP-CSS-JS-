<?php

include "dbconnect.php";
	session_start();
	$s="delete from add_product where id={$_GET['idd']}";
	
	$conn->query($s);
	echo"<script>window.open('productget.php','_self');</script>";


?>