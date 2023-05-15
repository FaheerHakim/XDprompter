<?php
include_once("bootstrap.php");
// controleren of er een post is gedaan en of de velden niet leeg zijn 
if (!empty($_POST)) {
    try {
        //$user = new User();
        $user->setEmail($_POST['email']);
        $user->setUsername($_POST['username']);
        $user->setPassword($_POST['password']);

        $user->register();
        $success = "user saved";
       // $id = User::getIdByEmail($user->getEmail());
        $user->setUserId($id);
        session_start();
        $_SESSION['id'] = $id;
        $_SESSION['email'] = $user->getEmail();
        header("Location:index.php");
    } catch (\Throwable $e) {
        $error = $e->getMessage();
    }
}
?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
	
	<title>SignUp</title>
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
     	<input type="password" name="password" placeholder="password">

         <p class="form__text">
                <a class="form__link" href="./" id="linkLogin">Already have an account? Sign in</a>
            </p><br>

     	<button type="submit">Continue</button>
         
     </form>
</body>
</html>