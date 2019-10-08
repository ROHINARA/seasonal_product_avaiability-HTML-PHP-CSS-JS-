<?php

session_start();
session_destroy();

unset($_SESSION["username"]);
unset($_SESSION["email"]);
unset($_SESSION["password"]);
unset($_SESSION["phone"]);
unset($_SESSION["t"]);
unset($_SESSION["shopping_cart"]);
unset($_SESSION["address"]);
unset($_SESSION['id']);
unset($_SESSION["s"]);
unset($_SESSION['price']);


header("location:text.php");

?>