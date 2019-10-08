$(document).ready(function(){
	product();
	function product(){
		$.ajax({
			url	:	"action.php",
			method:	"POST",
			data	:	{getProduct:1},
			success	:	function(data){
				$("#get_product").html(data);
			}
		})
	}


$("#signup_button").click(function(event){
	event.preventDefault();
		
		$.ajax({
			url : "Register.php",
			method : "POST",
			data : $("form").serialize(),
		 	success : function(data){
				$("#signup_msg").html(data);
			}
		})
				
})
$("#login").click(function(event){
	event.preventDefault();
	var email=$("#email").val();
	var pass=$("#password").val();
	    $.ajax({
			url	:	"loginn.php",
			method:	"POST",
			data	:{userLogin:1,userEmail:email,userPassword:pass},
			success	:function(data){
				if(data=="truefghjkyuhi"){
				 window.location.href="profileb.php";
				}
			}
		})
			
})
$("body").delegate("#product","click",function(event){
	event.preventDefault();
		var p_id = $(this).attr("pid");
		
		// $(".overlay").show();
		$.ajax({
			url : "action.php",
		    method : "POST",
		    data : {addToProduct :1,proId:p_id},
		    success : function(data){
		// 		count_item();
		// 		getCartItem();
		// 		$('#product_msg').html(data);
		// 		$('.overlay').hide();
		// 	}
		// })
		alert(data);
		
	})
})
