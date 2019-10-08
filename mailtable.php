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
    font-weight: 100%;
    height: 100%;
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
    <div style="background:rgba(187,205,212,.5);width:100%;height:80px;">
    <!-- <li><a href="text.php">Home</a></li>

    -->
    <li><img style=" float:left;height: 65px; width: 150px;" src="image/logo.png"></li> 
<li><a href="text.php"><span class="glyphicon glyphicon-home"></span>Home</a></li>
                
    <!-- <li><a href="About.php">About</a></li> -->
    <li><a href="productadd.php"><span class="glyphicon glyphicon-modal-window"></span>Add Products</a></li>
    
    <li><a href="mailtable.php"><span class="glyphicon glyphicon-envelope"></span></a></li>
                
  
    <ul class="nav navbar-nav navbar-right">
        
        <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span><?php echo "Hi,".$_SESSION['username']; ?></a>
          <ul class="dropdown-menu">
           
            <li class="divider"></li>
            <li><a href="logout1.php" style="text-decoration:none; color:blue;">Logout</a></li>
          </ul>
        </li>
        
      </ul>
  </ul>



<section class="section-padding" id="contact">
        <div class="container">
            <div class="row">

                <div class="section-title">
                    <!-- <h2 class="head-title"></h2>
                    <hr class="line">
                    <p>We would be delighted to serve you with our services, just use the form below or choose the services you are interested in and we will be in touch with you in few hours..</p> -->
                </div>
                <div class="col-md-12 col-sm-12">
                    <div class="col-md-4 col-sm-6">
                        <h3 class="cont-title">Message Us</h3>
                        <div class="contact-info">
                            <form action="mailtable.php" method="post" role="form" class="contactForm">
                                <div class="form-group">
                            <label>Your Name:<?php echo $_SESSION["username"]; ?></label>
                        </div>
                        <div class="form-group">
                            <label>Your Email:<?php echo $_SESSION["email"]; ?></label>
                        </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="message" rows="7" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                                </div>
                                <button type="submit" name="submit"class="btn btn-send">Send</button>
                            </form>
                            <?php 
                            if(isset($_POST['submit']))
                            {
                                 $msg = $_POST['message'];
                                 $subject = $_POST['subject'];
                                 $email = $_SESSION['email'];
                                 $name = $_SESSION['username'];
                                 $query ="INSERT INTO `mails` (`msg`, `holdername`, `holderemail`, `subject`, `status`,`tyype`, `maildate`) VALUES ('$msg', '$name','$email', '$subject','unread', 'mail', CURRENT_TIMESTAMP)";
                                 $records=mysqli_query($connect,$query);
                                if($records){
                                     echo"<script language=Javascript>document.location.href='productadd.php'</script>";
                                }
                            }
                            ?>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                       <h3 class="cont-title">Visit Us</h3>
                       <div class="location-info">
                            <p class="white"><span aria-hidden="true" class="fa fa-map-marker"></span>Chittagong University of Engineering And Technology</p>
                            <p class="white"><span aria-hidden="true" class="fa fa-phone"></span>Phone: +8801934856735, +880163539578739</p>
                            <p class="white"><span aria-hidden="true" class="fa fa-envelope"></span>Email:<a href="" >seasonalproductavaiability@gmail.com</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>
</html>