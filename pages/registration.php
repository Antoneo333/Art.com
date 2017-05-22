<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>	Art Gallery	</title>
		<link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
		<link href="../css/style.css" rel="stylesheet" type="text/css">
		<link href="../css/defaultbootstrap.css" rel="stylesheet">
		<link href="../css/animate.css" rel="stylesheet">
		<?php include "../config/config.php"; ?>
		<?php include "../config/reg.php"; ?>


		
		</meta>
	</head>
	<body>
		<div class="bg ">

			<!-- header -->
			<?php include "../include/header.php"; ?>
			<!-- header -->




			<!-- Autorisation -->
			<form class="form-horizontal col-md-2 col-md-offset-4 reg-form" action='' method="POST">
				<div><input type='text' name='login' placeholder="User name" ></div>
				<div><input type='password' name='password' placeholder="Password"></div>
				<div><br></div>
				<div><br></div>
				<div>
					<input type="submit" value="Log in">
					<input type="hidden" name="action" value="to_log">
				</div>

			</form>
			<!-- Autorisation -->




			<!-- Registration -->			
			<form  class="form-horizontal col-md-2 reg-form" action='' method="POST">
				<div><input type='text' name='login' placeholder="Your user name"></div>
				<div><input type='password' name='password' placeholder="Your password"></div>
				<div><input type='password' name='password_check' placeholder="Your password again"></div>
				<div><input type='email' name="email" placeholder="Your email"></div>
				<div>
					<input type="submit" value="Registratioin">
					<input type="hidden" name="action" value="to_reg">
				</div>
			</form>
			<!-- Registration -->

			<!-- SIDEBAR -->
			<?php include "../include/sidebar.php";?> 
			<!-- SIDEBAR -->

			
			<footer>
				<div class="col-md-2 col-md-offset-2 footer">
					ANY INFORMATION
				</div>
				<div class="col-md-2 footer">
					ANY INFORMATION
				</div>
				<div class="col-md-2 footer">
					ANY INFORMATION
				</div>
				<div class="col-md-2 footer">
					ANY INFORMATION
				</div>
			</footer>
		</div>
	</body>
</html>
