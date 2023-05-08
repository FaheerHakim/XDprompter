<?php 
include_once("bootstrap.php");

if(!empty($_POST)) {
    $username = $_POST['username'];
    $password = $_POST['password'];
        
        if($user->can_login($username, $password)) {
            session_start();
            $_SESSION["username"] = $username;
            $_SESSION["userID"] = $user->getUserID();
            // TODO: Redirect to gallery.php
            header("location:gallery.php");
        } else {
           $error = "Invalid username or password!";
        }

    //$user = new User();    
}

?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
	
	<title>LogIn</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
     <form action="login.php" method="post">
     	<h2>Welcome back prompter!</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>User Name</label>
     	<input type="text" name="username" placeholder="username"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="password"><br>

     	<button type="submit">Login</button>
     </form>
</body>
</html>