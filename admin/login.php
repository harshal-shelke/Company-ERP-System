<?php
include "db.php";
?>
<?php include 'auth.php'; ?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.radixtouch.com/templates/admin/atrio/source/lighthr/pages/examples/login-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 19 Dec 2021 09:10:09 GMT -->
<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<title>Admin - HR and Company Management System</title>
	<!-- Favicon-->
	<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
	<!-- Plugins Core Css -->
	<link href="assets/css/app.min.css" rel="stylesheet">
	<!-- Custom Css -->
	<link href="assets/css/style.css" rel="stylesheet" />
	<link href="assets/css/pages/extra_pages.css" rel="stylesheet" />
</head>

<body class="light">
	<div class="loginmain">
		<div class="loginCard">
			<div class="login-btn splits">
				<p>Already an user?</p>
				<button class="active">Login</button>
			</div>
		
			<div class="wrapper">
				
					<form  method="POST" action="<?php $_SERVER['PHP_SELF'] ?>"  id="login" tabindex="500">
					<h3>Login</h3>
					<div class="mail">
						<input type="text" name="username" required>
						<label>Mail or Username</label>
					</div>
					<div class="passwd">
						<input type="password" name="password" required>
						<label>Password</label>
					</div>
					
					<div class="submit">
						<button class="dark" name="submit" type="submit">Login</button>
					</div>
				
				</form>
				<form id="register" tabindex="502">
					<h3>Register</h3>
					<div class="name">
						<input type="text">
						<label>Full Name</label>
					</div>
					<div class="mail">
						<input type="email">
						<label>Mail</label>
					</div>
					<div class="uid">
						<input type="text">
						<label>User Name</label>
					</div>
					<div class="passwd">
						<input type="password">
						<label>Password</label>
					</div>
					<div class="submit">
						<button class="dark">Register</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Plugins Js -->
	<script src="assets/js/app.min.js"></script>
	<!-- Extra page Js -->
	<script src="assets/js/pages/examples/login-register.js"></script>
</body>


<!-- Mirrored from www.radixtouch.com/templates/admin/atrio/source/lighthr/pages/examples/login-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 19 Dec 2021 09:10:09 GMT -->
</html>