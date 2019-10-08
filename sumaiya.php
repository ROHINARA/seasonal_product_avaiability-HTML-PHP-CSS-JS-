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
  background-color: gray;
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
    <center><div style="background:rgba(255,255,255,.5);width:100%;height:80px;">
    <li><a href="signin.php">Home</a></li>
    <li><a href="About.php">About</a></li>
    <li><a>Products</a></li>
    <li><a href="contact.php">Contact us</a></li>
    <li><a href="logout1.php">Sign out</a></li>
  </ul>
    </div>
    </div> 
       
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
                     <form method="post" action="sumaiya.php";>
                    
                          <div style="border:1px solid #333; background-color:#D6EAF8; border-radius:5px; padding:16px;margin-bottom: 8px;" align="center">  
                               <img src="<?php echo $row["Image"]; ?>" class="img-responsive" /><br />  
                               <h4 class="text-info"><?php echo $row["Product Name"]; ?></h4>  
                               <h4 class="text-danger"><?php echo $row["Unit Price"];
                               ?></h4>  
                               <a href="sumaiya.php?get=<?php echo $row["p_id"]; ?>" >details </a> 
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