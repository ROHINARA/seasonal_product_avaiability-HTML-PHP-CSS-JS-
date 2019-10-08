<?php
    session_start();
     $connect = mysqli_connect("localhost", "root", "", "seasonal_product"); 
?>
<!DOCTYPE html>
<html>
  
     <head>
     <link rel="stylesheet" type="text/css" href="css/index.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      
     </head>
     <style type="text/css">
    body{
margin:0;
    padding:0;
    font-family: sans-serif;
  background:url(b3.jpg) no-repeat;
    background-size: cover;
}
.btnr{
    border-radius:5px;
    padding:5px;
    background:#ff0000;
    color:white;
    
}

.btnr:hover{
    border-radius:5px;
    padding:5px;
    background:#ff5e5e;
    color:white;
    
}


.btnb{
    border-radius:5px;
    padding:5px;
    background:#43a7bc;
    color:white;

}

.btnb:hover{
    border-radius:5px;
    padding:5px;
    background:#68b9ca;
    color:white;


}
#login-btn{
   background: #55acee;
   font-size: 18px;
   text-align: center;
   vertical-align: middle;
   line-height: 20px;
}

#login-btn:hover{
   background-color: #fff;  
   color: #000; 
}
#main{
    float: right;
    height: 10px;
    width: 5px;
    background-color: yellow;
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
.rightsidemenu {
    float: right;
    text-align: center;
    width: 100%;
    margin: 0px;
    background-color: #169e8f;
    font-size: 15px;
    color: #fff;
    font-weight: bold;
    height: 5px;
    overflow: auto;
}
.rightsidemenu th
  margin-top: 5px;
  border: 2px solid;
  padding: 10px 2px;
  width: 5px;
}
</style>
     


<body>
     <ul>
    <div style="background:rgba(187,205,212,.5);width:100%;height:80px;">
    <!-- <li><a href="text.php">Home</a></li>

    --> 
<li><a href="text.php"><span class="glyphicon glyphicon-home"></span>Home</a></li>
                
    <!-- <li><a href="About.php">About</a></li> -->
    <li><a href="cart.php"><span class="glyphicon glyphicon-modal-window"></span>View Products</a></li>
                
    <!-- <li><a href="cart.php">View Products</a></li>
     -->
      <li><a href="cartshow.php" style="text-decoration:none; color:blue;"><span class="glyphicon glyphicon-shopping-cart"></span>Cart</a></li>
      <li><a href="confmailshow.php"><span class="glyphicon glyphicon-envelope"></span></a></li>
     <!-- <li><a href="logout1.php">Sign out</a></li> -->
    <ul class="nav navbar-nav navbar-right">
        
        <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span><?php echo "Hi,".$_SESSION['username']; ?></a>
          <ul class="dropdown-menu">
            <li><a href="cartshow.php" style="text-decoration:none; color:blue;"><span class="glyphicon glyphicon-shopping-cart">Cart</a></li>
            <li class="divider"></li>
            <li><a href="profile.php" style="text-decoration:none; color:blue;">Profile</a></li>
           <li class="divider"></li>
            <li><a href="logout1.php" style="text-decoration:none; color:blue;">Logout</a></li>
          </ul>
        </li>
        
      </ul>
  </ul>
    <section>
        <div class="main">
            <div>
            	
              <h1>Your Payment Completed Successfully!<h1>
                <h4>FROM:Nusrat@gmail.com<h4>
            	<?php
                $id = $_SESSION["id"];
                $name=$_SESSION['username'];
                $phone=$_SESSION['phone'];
                               $email = $_SESSION['email'];
                                $address=$_SESSION['address'];
                                $total=$_SESSION['t'];
                    if ($connect->connect_error) {
                        die("Connection failed: " . $connect->connect_error);
                    }
                      $sql2 = "SELECT * from order_details AS s, add_product AS p where s.pro_id=p.p_id AND user_id =$id ";
                      $display2 = mysqli_query($connect,$sql2);
                      while($row2= mysqli_fetch_array($display2))
                      {
                    
                ?>
            	
                <h4><?php echo $row2["Product Name"];  echo "("; echo $row2["qnty"]; echo ")"; ?>
                <?php
                      }?>
                </h4>

                <label>Name:</label><h4><?php echo $name; ?></h4>
                <label>Phone:</label><h4><?php echo $phone; ?></h4>
                <label>Email:</label><h4><?php echo $email; ?></h4>
                <label>Address:</label><h4><?php echo $address; ?></h4>
                <label>Total Amount:</label><h4><?php echo $total; ?></h4>
            <?php 
         ?> 
            </div>
         </div>
    </section>

</body>
</html>