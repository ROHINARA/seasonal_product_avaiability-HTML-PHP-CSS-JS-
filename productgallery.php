<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login Form</title>
</head>
<style type="text/css">
	body{
	margin:0;
	padding:0;
	font-family: sans-serif;
	background:#262626;
	font-family: sans-serif;
	background-size: cover;
}
.container{
	width: 1210px;
	min-height: 50px;
	background:#fff;
	margin:70px auto 0;
	display: flex;
	flex-direction: row;
	flex-wrap: wrap;
}
.container .box
{
	position:relative;
	width: 280px;
	height: 280px;
	background:white;
	margin: 10px;
	box-sizing:border-box;
	display:inline-block;
}
.container .box .imgBox
{
	position: relative;

}
.container .box .imgBox img
{
	max-width: 100%;
	transition: transform 2s;
}
.container .box:hover .imgBox img{
	transform: scale(1.1);
}
.container .box .details
{
	position: absolute;
	top:10px;
	left:10px;
	bottom:10px;
	right:10px;
	background:rgba(0,0,0,.5);
	transform: scaleY(0);
	transition: transform .5s;
}
.container .box:hover .details
{
transform: scaleY(1);
}

.container .box .details .content
{
	position: absolute;
	top:50%;
	transform: translateY(-50%);
	text-align: center;
	padding: 15px;
	color:#fff;
}
.container .box .details .content h2
{
	margin: 0;
	padding: 0;
	font-size: 20px;
	color:#ff0;
}
.container .box .details .content p
{
	margin: 10px 0 0;
	padding: 0;
	
}

ul  {
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
		h1{
			text-align: center;
		}
</style>
<body>
	<ul>
		<center><div style="background:rgba(255,255,255,.5);width:100%;height:80px;">
		<li><a href="text.php>">Home</a></li>
		<li><a href="About.php">About</a></li>
		<li><a href="productgallery.php">Products</a></li>
		
		<li><a href="contact.php">Contact us</a></li>
		<li><a href="login.php">Sign in</a></li>
	</ul>
	<div class="container">
		
		<div class="box">
			<div class="imgBox">
				<img src="Guava.jpg">
			</div>
			<div class="details">
				<div class="content">
				    <h2>Guava</h2>
				    <p>Guava  is a common tropical fruit cultivated in many tropical and subtropical regions. Psidium guajava (common guava, lemon guava) is a small tree in the myrtle family (), native to Mexico, Central America, the Caribbean and northern South America.</p>
				    <p>Unit Price:60tk</p>
				</div>
			    </div>
		    </div>
		<div class="box">
			<div class="imgBox">
				<img src="water.jpg">
			</div>
			<div class="details">
				<div class="content">
				    <h2>watermelon</h2>
				    <p>Summer is the season for watermelons! The sweet red flesh on the inside of the watermelon makes for a delicious juicy treat. Most of us eat the red parts and discard the outer rind of the water melon, but did you know that the rind can be made into a chewy yummy dessert?
                    </p>
				    <p>Unit Price:80tk</p>
				</div>
			    </div>
		</div>
		<div class="box">
			<div class="imgBox">
				<img src="pina.jpg">
			</div>
			<div class="details">
				<div class="content">
				    <h2>pineapple</h2>
				    <p>Pineapple is one of the most important commercial fruit crops in the world. It is the third most important tropical fruit in the world and in Bangladesh, pineapple ranks 4th in terms of total ...
</p>
				    <p>Unit Price:40tk</p>
				</div>
			    </div>
		</div>
		<div class="box">
			<div class="imgBox">
				<img src="mango1.jpg">
			</div>
			<div class="details">
				<div class="content">
				    <h2>Mango</h2>
				    <p>The mango of Bangladesh from these areas is famous for the taste and flavor. Moreover, it is possible to produce more mango all over Bangladesh. But mangoes from Rajshahi, Chapainawabganj and Satkhira are very much famous and the best mango of Bangladesh. 
                    </p>
				    <p>Unit Price:60tk</p>
				</div>
			    </div>
		</div>
		<div class="box">
			<div class="imgBox">
				<img src="black.jpg">
			</div>
			<div class="details">
				<div class="content">
				    <h2>Black Berry</h2>
				    <p>You can also use these versatile fruits in baked goods, add them to fruit or vegetable salads or turn them into jellies or sauces. Mix blackberries with apples, kiwi and strawberries to make a delicious fruit salsa you can eat with chips, use to top ice cream or other desserts or use as a condiment with meat or seafood.
                    </p>
				    <p>Unit Price:70tk</p>
				</div>
			    </div>
		</div>
		<div class="box">
			
		<div class="imgBox">
				<img src="jack.jpg">
			</div>
			<div class="details">
				<div class="content">
				    <h2>Jackfruit</h2>
				    <p>Acreage and production in Bangladesh The jackfruit ranks third in area under cultivation and second in production among the fruits of Bangladesh.
                    </p>
				    <p>Unit Price:60tk</p>
				</div>
			    </div>	
		</div>
		<div class="box">
<div class="imgBox">
				<img src="lyche.jpg">
			</div>
			<div class="details">
				<div class="content">
				    <h2>Lychee</h2>
				    <p>The lychee has a history of cultivation going back as far as 2000 BC according to records in China. The lychee is cultivated in China, Thailand, Vietnam, Malaysia, Japan, Bangladesh, Pakistan and northern India. South Africa and the United States also cultivate lychee.
</p>
				    <p>Unit Price:100tk</p>
				</div>
			    </div>
     </div>	  
<div class="box">
<div class="imgBox">
				<img src="orange1.jpg">
			</div>
			<div class="details">
				<div class="content">
				    <h2>Orange</h2>
				    <p>Each kg of orange contains about 490 calorie of energy. Oranges are used in making jam, jelly, juice, squash, etc. Perfume is produced from the flowers, leaves and skin of orange
</p>
				    <p>Unit Price:150tk</p>
				</div>
			    </div>
     </div>	
     <div class="box">
			<div class="imgBox">
				<img src="Guava.jpg">
			</div>
			<div class="details">
				<div class="content">
				    <h2>Guava</h2>
				    <p>Guava  is a common tropical fruit cultivated in many tropical and subtropical regions. Psidium guajava (common guava, lemon guava) is a small tree in the myrtle family (), native to Mexico, Central America, the Caribbean and northern South America.</p>
				    <p>Unit Price:60tk</p>
				</div>
			    </div>
		    </div>
		<div class="box">
			<div class="imgBox">
				<img src="water.jpg">
			</div>
			<div class="details">
				<div class="content">
				    <h2>watermelon</h2>
				    <p>Summer is the season for watermelons! The sweet red flesh on the inside of the watermelon makes for a delicious juicy treat. Most of us eat the red parts and discard the outer rind of the water melon, but did you know that the rind can be made into a chewy yummy dessert?
                    </p>
				    <p>Unit Price:80tk</p>
				</div>
			    </div>
		</div>
		<div class="box">
			<div class="imgBox">
				<img src="pina.jpg">
			</div>
			<div class="details">
				<div class="content">
				    <h2>pineapple</h2>
				    <p>Pineapple is one of the most important commercial fruit crops in the world. It is the third most important tropical fruit in the world and in Bangladesh, pineapple ranks 4th in terms of total ...
</p>
				    <p>Unit Price:40tk</p>
				</div>
			    </div>
		</div>
		<div class="box">
			<div class="imgBox">
				<img src="mango1.jpg">
			</div>
			<div class="details">
				<div class="content">
				    <h2>Mango</h2>
				    <p>The mango of Bangladesh from these areas is famous for the taste and flavor. Moreover, it is possible to produce more mango all over Bangladesh. But mangoes from Rajshahi, Chapainawabganj and Satkhira are very much famous and the best mango of Bangladesh. 
                    </p>
				    <p>Unit Price:60tk</p>
				</div>
			    </div>
		</div>
		<div class="box">
			<div class="imgBox">
				<img src="black.jpg">
			</div>
			<div class="details">
				<div class="content">
				    <h2>Black Berry</h2>
				    <p>You can also use these versatile fruits in baked goods, add them to fruit or vegetable salads or turn them into jellies or sauces. Mix blackberries with apples, kiwi and strawberries to make a delicious fruit salsa you can eat with chips, use to top ice cream or other desserts or use as a condiment with meat or seafood.
                    </p>
				    <p>Unit Price:70tk</p>
				</div>
			    </div>
		</div>
		<div class="box">
			
		<div class="imgBox">
				<img src="jack.jpg">
			</div>
			<div class="details">
				<div class="content">
				    <h2>Jackfruit</h2>
				    <p>Acreage and production in Bangladesh The jackfruit ranks third in area under cultivation and second in production among the fruits of Bangladesh.
                    </p>
				    <p>Unit Price:60tk</p>
				</div>
			    </div>	
		</div>
		<div class="box">
<div class="imgBox">
				<img src="lyche.jpg">
			</div>
			<div class="details">
				<div class="content">
				    <h2>Lychee</h2>
				    <p>The lychee has a history of cultivation going back as far as 2000 BC according to records in China. The lychee is cultivated in China, Thailand, Vietnam, Malaysia, Japan, Bangladesh, Pakistan and northern India. South Africa and the United States also cultivate lychee.
</p>
				    <p>Unit Price:100tk</p>
				</div>
			    </div>
     </div>
     <div class="box">
<div class="imgBox">
				<img src="orange1.jpg">
			</div>
			<div class="details">
				<div class="content">
				    <h2>Orange</h2>
				    <p>Each kg of orange contains about 490 calorie of energy. Oranges are used in making jam, jelly, juice, squash, etc. Perfume is produced from the flowers, leaves and skin of orange
</p>
				    <p>Unit Price:150tk</p>
				</div>
			    </div>
     </div>


</body>
</html>