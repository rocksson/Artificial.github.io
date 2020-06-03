<?php
session_start();
if(isset($_SESSION['user']))
{
	header('location:home.php');
}
?>
<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<style type="text/css">
.bg{background:url("images/23.jpg");
    width:100%;
	height:110%;
}
#log{
 padding:60px 40px;
 margin-top:80px;
 -webkit-box-shadow: -10px -13px 7px -1px rgba(0,0,0,0.75);
-moz-box-shadow: -10px -13px 7px -1px rgba(0,0,0,0.75);
box-shadow: -10px -13px 7px -1px rgba(0,0,0,0.75);
}
img{ width:180px;
    margin:auto;
}
h1{
color:white;
text-align:center;
font-weight:bolder;
margin-top:-20px;
}
label{font-size:25px; color:white;)
button{
-webkit-box-shadow: 14px -9px 16px 1px rgba(0,0,0,0.75);
-moz-box-shadow: 14px -9px 16px 1px rgba(0,0,0,0.75);
box-shadow: 14px -9px 16px 1px rgba(0,0,0,0.75);
}
</style>
</head>
<body>
<div class="container-fluid bg">
     <div class="row">
	 <div class="col-md-4 col-sm-4 col-xs-12"></div>
	 <div class="col-md-4 col-sm-4 col-xs-12">
	      <form id="log" method="post">
			  <h1> Panna Ornaments</h1>
			  <img class="img img-responsive " src="images/GANESHA.gif">
		      <div class="form-group">
			       <label>Email</label>
				   <input type="email" class="form-control email" placeholder="Email">
			  </div>
			  <div class="form-group">
			       <label>password</label>
				   <input type="password" class="form-control password" placeholder="password">
			  </div><!-- 
			  <div class="checkbox">
			       <label><input type="checkbox"> Remember me</label>
			  </div> -->
			  <button type="submit" class="btn btn-success btn-block login">Login</button>
		  </form>
	</div>
	<div class="col-md-4 col-sm-4 col-xs-12"></div>
	</div>
</div>
</body>
</html>
</body>
</html>

<script type="text/javascript">
	$('.login').on('click',function(){
		var email = $('.email').val();
		var password = $('.password').val();
		if(email == '' || password == '')
		{
			alert('please enter email id and password');
		}
		else
		{
			$.ajax({
				url : 'logincheck.php',
			    type : 'POST',
			    data : {'email' : email,'password' : password},
			    success : function(data) {              
			        if(data == '1')
			        {
			        	location.href = "home.php";
			        }
			        else
			        {
			        	alert('please check email id and password');
			        	return;
			        }
			    }
			});
		}
	});
</script>