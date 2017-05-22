<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>	Art Gallery	</title>
		<link href="css/style.css" rel="stylesheet" type="text/css">
		<link href="css/defaultbootstrap.css" rel="stylesheet">
		<link href="css/animate.css" rel="stylesheet">
		<?php include "config/config.php"; ?>
		
		</meta>
	</head>
	<body>
		<div class="bg ">

			<?php include "include/header.php"; ?>

			<div id="content-hello" > <!-- main page -->

				<div>
					<div class="enter-baner col-md-6 col-md-offset-3 col-xs-6 col-xs-offset-3 col-lg-6 col-lg-offset-3">
						<img class="hello" src="media/hello.jpg">
						<div class="enter-text">
							<p>Привет. Вы зашли на сайт-галлерею, где нам хорошо и уютно. Мы не хотим что бы кто либо портил эту теплую обстановку, поэтому мы принимаем в свой круг только зарегистрированных пользователей. Если вы хотите стать частью нашей общины - пожалуйста, пройдите регистрацию.
							</p>
						</div>
					</div>

					<div class="button to-reg col-md-6 col-md-offset-3 col-xs-6 col-xs-offset-3 col-lg-6 col-lg-offset-3 ">
						<span class="example"> <a style="text-decoration:none;color:white;" href="/pages/registration.php">  LOG IN OR REGISTRATION </a></span>
					</div>
					
					<?php include "include/sidebar.php";?> 

				</div>

			</div> <!-- main page -->
		</div>

		
		
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

		
	</body>
</html>