<?php
include("../Assets/Connection/Connection.php");
session_start();
$email="";
$pass="";
if(isset($_POST["btn"]))
{
	$email=$_POST["login_email"];
	$pass=$_POST["login_pass"];
	
	$selQryAdmin="select * from tbl_admin where admin_email='$email' and admin_password='$pass'";
	$dataAdmin=mysql_query($selQryAdmin);
	
	$selQryUser="select * from tbl_user where user_email='$email' and user_password='$pass'";
	$dataUser=mysql_query($selQryUser);
	
	$selQryShop="select * from tbl_shop where shop_email='$email' and shop_password='$pass'";
	$dataShop=mysql_query($selQryShop);
	
	if($rowAdmin=mysql_fetch_array($dataAdmin))
	{
		$_SESSION['aname']=$rowAdmin["admin_name"];
		$_SESSION['adminid']=$rowAdmin["admin_id"];
		header('location:../Admin/AdminHomepage.php');
	}
	else if($rowUser=mysql_fetch_array($dataUser))
	{
		$_SESSION['uname']=$rowUser["user_name"];
		$_SESSION['userid']=$rowUser["user_id"];
		header('location:../User/Homepage.php');
	}
	else if($rowShop=mysql_fetch_array($dataShop))
	{
		$_SESSION['sname']=$rowShop["shop_name"];
		$_SESSION['shopid']=$rowShop["shop_id"];
		header('location:../Shop/ShopHomePage.php');
	}
	else
	{
		echo"<script> alert('Invalid Username Or Password')</script>";
	}
}
?>
<!doctype html>
<html lang="en">
  <head>
  	<title>Login 10</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="../Assets/Templates/Login/css/style.css">

	</head>
	<body class="img js-fullheight" style="background-image:url(../Assets/Templates/Login/images/bg3.jpg);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<!-- <h2 class="heading-section">Login</h2> -->
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center"><b>Have an account?</b></h3>
		      	<form action="#" class="signin-form" method="post">
		      		<div class="form-group">
		      			<input type="text" class="form-control" placeholder="Username" required name="login_email">
		      		</div>
	            <div class="form-group">
	              <input id="password-field" type="password" class="form-control" placeholder="Password" required name="login_pass">
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div>
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary submit px-3" name="btn">Sign In</button>
	            </div>
	            <div class="form-group d-md-flex">
	            	<div class="w-50">
		            	<label class="checkbox-wrap checkbox-primary">Remember Me
									  <input type="checkbox" checked>
									  <span class="checkmark"></span>
									</label>
								</div>
								<div class="w-50 text-md-right">
									<a href="#" style="color: #fff">Forgot Password</a>
								</div>
	            </div>
	          </form>
	          <p class="w-100 text-center">&mdash; Or Sign In With &mdash;</p>
	          <div class="social d-flex text-center">
	          	<a href="#" class="px-2 py-2 mr-md-1 rounded"><span class="ion-logo-facebook mr-2"></span> Facebook</a>
	          	<a href="#" class="px-2 py-2 ml-md-1 rounded"><span class="ion-logo-twitter mr-2"></span> Twitter</a>
	          </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="../Assets/Templates/Login/js/jquery.min.js"></script>
  <script src="../Assets/Templates/Login/js/popper.js"></script>
  <script src="../Assets/Templates/Login/js/bootstrap.min.js"></script>
  <script src="../Assets/Templates/Login/js/main.js"></script>

	</body>
</html>

