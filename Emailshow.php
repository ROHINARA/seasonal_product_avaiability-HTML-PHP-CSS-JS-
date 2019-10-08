<?php
    session_start();
     $connect = mysqli_connect("localhost", "root", "", "seasonal_product"); 
?>
<!DOCTYPE html>
<html>
  
     <head>
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
    <center><div style="background:rgba(187,205,212,.5);width:220%;height:100px;">
    <li><a href="text.php"><span class="glyphicon glyphicon-home"></span>Home</a></li>
      <li><a href="productget.php">Products Info</a></li>
    <li><a href="user_details.php"> User Info</a></li>
    <li><a href="suppliers_details.php">Supplier Info</a></li>
    <li><a href="allorders.php">Orders</a></li>
    <li><a href="Email.php"><span class="glyphicon glyphicon-envelope"></span></a></li>
      <li><a href="logout1.php"><span class="glyphicon glyphicon-user"></span>SIGN OUT</a></li>
  
  </ul>
    </div>
      
   
      
    </div>
    <section>
        <div class="main">
            <div>
            	<h1>Message Show</h1>
            	<?php
                $id = $_GET['show_id'];
                    if ($connect->connect_error) {
                        die("Connection failed: " . $connect->connect_error);
                    } 
                    
                    $query ="UPDATE `mails` SET `status` = 'read' WHERE `mailid` = $id";
                    $run = mysqli_query($connect,$query);

                    $sql = "SELECT * from `mails` where `mailid` = '$id'";
                    $display = mysqli_query($connect,$sql);
                    while($row= mysqli_fetch_array($display))
                    {
                    
                ?>
            	
                <label style="border:4px">Date & time:</label><h4><?php echo $row["maildate"]; ?></h4><br>
                <label>From:</label><h4><?php echo $row["holderemail"]; ?></h4><br>
                <label>Subject:</label><h4><?php echo $row["subject"]; ?></h4><br>
                <label>Message:</label><h4><?php echo $row["msg"]; ?></h4>
            <?php 
        } ?>
            </div>
         </div>
    </section>

</body>
</html>