    <?php   
 session_start();  
 $connect = mysqli_connect("localhost", "root", "", "seasonal_product");
  
 ?>
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>All Products Listed</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head> 
       <style type="text/css">
  body{
margin:0;
  padding:0;
  font-family: sans-serif;
  background:white;
  background-size: cover;
}

ul{
      margin: 0px;
      padding: 0px;
      list-style: none;

    }
    ul li{
      float:left;
      width: 260px;
      height: 80px;
      background-color: rgba(187,205,212,.5);
      opacity: .8;
      line-height: 40px;
      
      text-align: center;
      font-size: 20px;
      font-family: algerian;
    }
    ul li a:hover{
      background-color: darkgray;
    }
    .img-responsive{
   height: 270px;
   width: 250px;

    }
</style>
     
<body>
   <ul>
    <div style="background:background:rgba(187,205,212,.5);width:100%;height:80px;">
    <li><a href="text.php"><span class="glyphicon glyphicon-user"></span>Home</a></li>
    <!-- <li><a href="About.php">About</a></li> -->
    <li><a>View Products</a></li>
    <!-- <li><a href="contact.php">Contact us</a></li> -->
    <li><a href="cartshow.php" style="text-decoration:none; color:blue;"><span class="glyphicon glyphicon-shopping-cart">Cart</a></li>
      
                          
                      
      </li>
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


           <br /> <br> 
           <div class="container" style="width:1200px;">  
                <h3 align="center">All Products Listed</h3><br />  
                <?php  
                $query = "SELECT * FROM add_product ORDER BY p_id ASC";  
                $result = mysqli_query($connect, $query); 
                     while($row = mysqli_fetch_array($result))  
                     {  
                        
                ?>  
                <div class="col-md-3">  
                     <form method="post" action="cart.php";>
                    
                          <div style="border:.5px solid white; background-color:white; border-radius:5px; padding:16px;margin-bottom: 8px;" align="center">  
                               <img src="<?php echo $row["Image"]; ?>" class="img-responsive"/><br />  
                               <h4 class="text-info"><?php echo $row["Product Name"]; ?></h4>  
                               <h4 class="text-danger">TK.<?php echo $row["Unit Price"];
                               ?></h4>  
                               <a href="cart.php?get=<?php echo $row["p_id"]; ?>" >details </a> 
                          </div>  
                     </form>  
                </div>  
                <?php

                if(isset($_GET["get"]))  
                {
                  $_SESSION["s"]=$_GET["get"];
                  echo "<script>window.location.href='http://localhost:8080/bbms/showproduct.php';</script>";
                  } 
                }
                ?>  
                
      </body>  
 </html>