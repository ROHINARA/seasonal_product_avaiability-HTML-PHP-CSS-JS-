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
    /*background: #72D4B2;*/
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
                 <h1></h1>
            </div>
                    <table>
                         
                        <thead>
                            <tr class="head">
                                <th class="column1">Id</th>
                                <th class="column3">Mails</th>
                                <th class="column7"></th>
                                <th class="column5"></th>
                                <th class="column2">Date</th>
                                <th class="column2"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                if ($connect->connect_error) {
                                   die("Connection failed: " . $connect->connect_error);
                                } 
                                $sql = "SELECT * FROM mails where `status` = 'unread' order by `maildate` DESC";
                                $display = mysqli_query($connect,$sql);
                                while($row= mysqli_fetch_array($display))
                                {
                                    
                                    ?>
                                        <tr><td><b> <?php echo $row["mailid"];?></b></td> 
                                            <td><b> Email: <?php echo $row["holderemail"]; ?></b></td> 
                                            <td><b><br><br> Subject: <?php echo $row["subject"]; ?><br>
                                                <?php echo $row["holdername"];?> <?php echo " mailed ." ?></b></td> 
                                            <td></td> 
                                            <td><b> <?php echo $row["maildate"]; ?></b> </td>
                                            <td><a href="Emailshow.php?show_id=<?php echo $row["mailid"]; ?>" ><span class="glyphicon glyphicon-folder-open"></span> </a>/
                                                        <a href="Email.php?delete_id=<?php echo $row["mailid"]; ?>" ><span class="glyphicon glyphicon-trash"></span> </a></td>
                                                    <?php 
                                                        if (isset($_GET["delete_id"])) 
                                                        {
                                                            $id=$_GET["delete_id"];
                                                            $sql4 = "DELETE FROM mails WHERE mailid ='$id'";
                                                            if(mysqli_query($connect,$sql4))
                                                            {
                                                                echo "<script>alert('Message is deleted!');
                                                                     window.location.href='http://localhost:8080/bbms/Email.php';
                                                                       </script>";
                                                                exit();
                                                            }
                                                        } 
                                                    ?>       
                                        </tr>
                                <?php   
                                }
                                $sql2 = "SELECT * FROM mails where `status` = 'read' order by `maildate` DESC";
                                $display2 = mysqli_query($connect,$sql2);
                                while($row2= mysqli_fetch_array($display2))
                                {
                                    
                                    ?>
                                        <tr><td> <?php echo $row2["mailid"];
                                        $id=$row2["mailid"];?></td> 
                                            <td> Email: <?php echo $row2["holderemail"]; ?></td> 
                                            <td><br><br> Subject: <?php echo $row2["subject"]; ?><br>
                                                <?php echo $row2["holdername"];?> <?php echo " mailed ." ?></td> 
                                            <td></td> 
                                            <td><?php echo $row2["maildate"]; ?> </td> 
                                            <td><a href="Emailshow.php?show_id=<?php echo $row2["mailid"]; ?>" ><span class="
glyphicon glyphicon-folder-open"></a>/
                                                        <a href="Email.php?delete_id=<?php echo $row2["mailid"]; ?>" ><span class="glyphicon glyphicon-trash "></span> </a></td>
                                                    <?php 
                                                    
                                                        if (isset($_GET["delete_id"])) 
                                                        {
                                                            $id=$_GET["delete_id"];
                                                            $sql3 = "DELETE FROM mails WHERE mailid ='$id'";
                                                            if(mysqli_query($connect,$sql3))
                                                            {
                                                                echo "<script>alert('mail is deleted!');
                                                                     window.location.href='http://localhost:8080/bbms/Email.php';
                                                                       </script>";
                                                                exit();
                                                            }
                                                        } 
                                                    ?>      
                                        </tr>
                                <?php   
                                }
                             ?>

                        </tbody>
                    </table>            
            </div>
    </section>
</body>
</html>