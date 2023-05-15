<?php 
include_once(__DIR__ . "/classes/User.php");

try {
	if (!empty($_POST)) {
		$user = new User();
		$user->setUsername($_POST['username']);
		$user->setEmail($_POST['email']);
		$user->setPassword($_POST['password']);
		//$user->setConfirmPassword($_POST['confirm_password']);
		//$user->register();
	}
} catch (\Throwable $th) {
	$error = $th->getMessage();
}



?><!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login-Signup</title>
	<link rel="stylesheet" href="css/home.css">
</head>

<body>

	<header>
		<h1 class="heading">Hello, XD Prompter!</h1>
		<h3 class="title">Enter your details and start your journey with usss.</h3>
	</header>

	
	<div class="container">

		<!-- upper button section to select
			the login or signup form -->
		<div class="slider"></div>
		<div class="btn-forms">
			<button class="login">Login</button>
			<button class="signup">Signup</button>
		</div>

		<!-- Form section that contains the
			login and the signup form -->
		<div class="form-section">
		<?php if (isset($error)) : ?>
		<div class="error"><?php echo $error; ?></div>
	    <?php endif; ?>

			<!-- login form -->
			<div class="login-form">
			    <input type="text" class="username in" placeholder="Enter your username">
				<input type="password" class="pass in" placeholder="password">
				<button class="clkbtn">Login</button>
			</div>

			<!-- signup form -->
			<div class="signup-form">
				<input type="text" class="username in" placeholder="Enter your username">
				<input type="email" class="email in" placeholder="youremail@email.com">
				<input type="password" class="pass in" placeholder="password">
				<input type="password" class="pass in" placeholder="Confirm password">
				<button class="clkbtn">Signup</button>
			</div>
		</div>
	</div>
	<script src="index.js"></script>
</body>

</html>
