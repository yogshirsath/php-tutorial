<?php
session_start();
$loginerror = '';
function authentication() {
	if ($_POST['username'] == '' || $_POST['password'] == '') {
		return 'Enter username and password';
    }

    if ($_POST['username'] != 'admin' && $_POST['password'] != 'rock123') {
    	return 'Invalid username or password';
    }
	$_SESSION['username'] = $_POST['username'];
	$_SESSION['password'] = $_POST['password'];
	header('Location: index.php');
}


if (isset($_SESSION['username']) || isset($_SESSION['passord'])) {
    header('Location: index.php');
}
if (isset($_POST['login'])) {
	$loginerror = authentication();
}
?>
<!DOCTYPE html>
<html>
    
<head>
	<title>Login Page</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<!--Coded with love by Mutiullah Samim-->
<body>
	<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img src="https://www.php.net/images/logos/php-logo.svg" class="brand_logo" alt="Logo">
					</div>
				</div>
				<div class="d-flex justify-content-center">
					<form method="POST" class="w-75">
						<div class="input-group mb-3">
							<input type="text" name="username" class="form-control input_user" value="" placeholder="username">
						</div>
						<div class="input-group mb-2">
							<input type="password" name="password" class="form-control input_pass" value="" placeholder="password">
						</div>
						<div class="d-flex justify-content-center mt-3 login_container">
							<button type="submit" name="login" class="btn login_btn">Login</button>
						</div>
						<label class="text-danger"><?php echo $loginerror; ?></label>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
