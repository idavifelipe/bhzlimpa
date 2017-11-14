<?php
//include config
require_once('../includes/config.php');


//check if already logged in
if( $user->is_logged_in() ){ header('Location: index.php'); } 
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Admin Login</title>
  <link rel="stylesheet" href="../style/normalize.css">
  <link rel="stylesheet" href="../style/main.css">
</head>
<body>

<div id="login">

	<?php

	if(isset($_POST['submit'])){

		$username = trim($_POST['username']);
		$password = trim($_POST['password']);
		
		if($user->login($username,$password)){ 


			header('Location: index.php');
			exit;
		

		} else {
			$message = '<p class="error">Wrong username or password </p>';
                        echo $username;
                        
		}

	}

	if(isset($message)){ echo $message; }
        
	?>

	<form action="" method="post" style="border-radius: 5px;padding: 10px;">
	<p><label>Usuario</label><input type="text" name="username" value=""  /></p>
	<p><label>Senha</label><input style="margin-left: 5px;" type="password" name="password" value=""  /></p>
	<p><label></label><input style="border-radius:5px; width: 100px; margin-left:20px;" type="submit" name="submit" value="Login"  /></p>
	</form>

</div>
</body>
</html>
