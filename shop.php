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
font-family: Arial;
  font-size: 17px;

}
#myVideo {
  position:absolute;

  right: 0;
  bottom: 0;
  height: 850px;
  width: 950px;

  min-width: 100%; 
  min-height: 100%;
}
.content {
  position: fixed;
  bottom: 0;
  background: rgba(0, 0, 0, 0.5);
  color: #f1f1f1;
  width: 100%;
  padding: 40px;
  font-family: sans-serif;

}

ul{
          
      margin: 0px;
      padding: 0px;
      list-style: none;

    }
    ul li{
      float:left;
      width: 250px;
      height: 100px;
      background-color: none;
      opacity: .8;
      line-height: 50px;
      text-align: center;
      background: black;
      font-size: 20px;
      font-family: algerian;
    }
    ul li ul li{
      
      display: none;
      float:none;
      list-style: none;

    }
    ul li:hover ul li{
      display: block;
      background: rgba(255,255,255,.8);
      height: 60px;
      width: 100%;
    }
    ul li a:hover{
      background:rgba(187,205,212,.5);
  /*    background-color: darkgray;*/
    }
    .login-box input{
   display: block;
   width: 320px;
   height: 40px;
   padding: 10px;
   font-size: 14px;
   font-family: sans-serif;
   color: white;
   background: rgba(0,0,0,0.3);
   outline: none;
   border:1px solid rgba(0,0,0,0.3);
   border-radius: 5px;
   box-shadow: inset 0px -5px 45px rgba(100,100,100,0.2), 0px 1px 1px rgba(255,255,255,0.2);
   margin-bottom: 10px;
}

.login-box #login-btn{
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
    .img-responsive{
   height: 270px;
   width: 250px;

    }



</style>
     
<body>
<ul class="nav navbar-nav navbar-left">
    <center><div style="float:left;background:rgba(187,205,212,.5);width:240%;height:100px;">
    <li><img style=" float:left;height: 65px; width: 100px;" src="image/logo.png"></li>
    <li><a href="text.php"><span class="glyphicon glyphicon-home"></span>Home</a></li>
    <li><a href="About.php">About</a></li>
    <li><a href="shop.php">View Products</a></li>
    <li><a href="contact.php">Contact us</a></li>
    <li><a href="signin.php"><span class="glyphicon glyphicon-user"></span>SIGN IN</a>
      <ul>
  <li><a href="login.php"><span class="glyphicon glyphicon-user">Admin</li>
  <li><a href="signin.php"><span class="glyphicon glyphicon-user">User</li>
    <li><a href="supsignin.php"><span class="glyphicon glyphicon-user">Supplier</li>
</ul>
</div>
  </ul>
       
           <br />  
           <div class="container" style="width:1200px;">  
                <h3 align="center">All Products Listed</h3><br />  
                <?php  
                $query = "SELECT * FROM add_product ORDER BY p_id ASC";  
                $result = mysqli_query($connect, $query); 
                     while($row = mysqli_fetch_array($result))  
                     {  
                        
                ?>  
                <div class="col-md-4">  
                     <form method="post" action="shop.php";>
                    
                          <div style="border:0px solid #333; border-radius:5px; padding:16px;margin-bottom: 8px;" align="center">  
                               <img src="<?php echo $row["Image"]; ?>" class="img-responsive" /><br />  
                               <h4 class="text-info"><?php echo $row["Product Name"]; ?></h4>  
                               <h4 class="text-danger">TK.<?php echo $row["Unit Price"];
                               ?></h4>  
                               <a href="shop.php?get=<?php echo $row["p_id"]; ?>" >details </a> 
                          </div>  
                     </form>  
                </div>  
                <?php

                if(isset($_GET["get"]))  
                {
                  $_SESSION["s"]=$_GET["get"];
                   echo "<script>alert('You must have to login in as a user!');
                                                      window.location.href='http://localhost:8080/bbms/signin.php';</script>";
                  } 
                }
                ?>  
                
      </body>  
 </html>