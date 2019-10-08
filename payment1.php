<!DOCTYPE html>
<html>
<head>
	<title>Payment</title>
	<link rel="stylesheet" type="text/css" href="style.css">
  <style type="text/css">
    *{
  padding:0;
  margin:0;
}
body
{
  font-family: sans-serif;
}
.app-container
{
  height: 700px;
  width: 350px;
  background-image: linear-gradient(#580e8f,#92008f);
  top: 10%;
  left: 40%;
  transform: translate(-50%,- 50%);
  position: absolute;

}
.top-box
{
  height: 150px;
    background-color: #9100fb;
    border-bottom-left-radius: 80px; 
    border-bottom-right-radius: 80px;
}
.top-box p
{
  text-align: center;
  padding-top: 20px;
  color: #fff;
}
.middle-box
{
  height: 150px;
  background-image: linear-gradient(#580e8f,#92008f);
    margin: -70px 30px 20px;
    color:#fff;
    text-align:center; 
    font-size:12px;
    border-radius:10px; 
}
.middle-box h1
{
  padding-top:30px; 
  padding-bottom:30px;
  font-size:50px; 
  font-weight:normal;
}
.middle-box h1 span
{
  font-size:20px;
  margin-left:5px; 
  bottom:18px;
  position: relative; 
}
.payment-option-btn
{
  color:#fff;
  margin:5px 30px;
  height:30px; 
  width: 290px ;
  background-color: #9100fd; 
  border:none;
  cursor: pointer;
}
.card-details
{
  background:#fff; 
  color:#555;
  margin: 10px 30px;
  padding:10px;
}
.card-details p
{
  font-size: 14px;
}
..card-details label
{
  font-size:10px; 
  line-height:20px;
}
.card-num-field-group
{
  margin-top: 10px;
}
.date-field-group
{
  margin-top: 10px;
  display: inline-block; 
}
.cvc-field-group
{
  margin-top: 10px;
  display: inline-block;
 
}

.name-field-group
{
  margin-top: 10px;   
}
.card-num-field, .name-field
{
  width: 260px; 
}
.date-field
{
   width: 120px;
}
.cvc-field
{
  width: 260px;
}
.card-details input
{
  border:1px solid #ccc;
  height :22px;
  padding:5px;
  font-size:10px ;
}
.card-details input::placeholder
{
  color:#ccc; 
}
.pay-btn
{
  color:#fff;
    margin-top:20px; 
  height:30px; 
  width: 270px ;
  background-color: #9100fd; 
  border:none;
  cursor: pointer;
}
  </style>
</head>
<body>
 <div class="app-container">
 	<div class="top-box">
 		<p>CHECKOUT</p>
 	</div>
 	
  <div class="middle-box">
  	<h1>1599<span>$</span></h1>
  	<p>Pay to the Supplier</p>
  </div>

  <div class="bottom-box">
  	<button type="button" class="payment-option-btn">Pay With paypal</button>
  	<button type="button" class="payment-option-btn">Pay using netbanking </button>
  	<div class="card-details">
  		<p>Pay using credit or debit crad</p>
  		<div class="card-num-field-group">
  			<label>card number</label><br>
  			<input type="text" class="card-num-field" placeholder="xxxx-xxxx-xxxx-xxx">
  		</div>
  		<div class="date-field-group">
  			<label>Expiary date</label><br>
  			<input type="text" class="date-field" placeholder="mm">
  			<input type="text" class="date-field" placeholder="yy">
  		</div>
  		<div class="cvc-field-group">
  			<label>cvc</label><br>
  			<input type="password" class="cvc-field" placeholder="xxx">
  		</div>

  		<div class="name-field-group">
  			<label>card holder</label><br>
  			<input type="text" class="name-field" placeholder="Full name">
  		</div>
  		<button type="button" class="pay-btn">Pay Now</button>

  	</div>
  </div>
 </div>
</body>
</html>