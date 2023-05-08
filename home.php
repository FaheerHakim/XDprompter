<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
	
	<title>Home</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
     <form action="login.php" method="post">
     	<h2>Sign Up</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>User Name</label>
     	<input type="text" name="username" placeholder="username"><br>

		 <label>E-mail</label>
     	<input type="text" name="email" placeholder="pppp@outlook.com"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="password"><br>

     	<button type="submit">Login</button>
     </form>
</body>
</html>