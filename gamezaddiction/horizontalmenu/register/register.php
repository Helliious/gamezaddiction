<?php

require 'dbConfig.php';

if(isset($_POST['reg']))
{
	$errors = array();
	$name = addslashes($_POST['username']);
	$pass1 = addslashes($_POST['pass1']);
	$pass2 = addslashes($_POST['pass2']);
	$email = addslashes($_POST['email']);
	
	if(strlen($name) > 4)
	{
		$q = mysql_query("SELECT username FROM users WHERE username='$name'LIMIT 1") or die (mysql_error());
		if(mysql_num_rows($q) > 0)
		{
			$errors[] = "This username is already taken";
		}
	}
	else
	{
		$errors[] = "Short name";
	}
	if(strlen($pass1) < 6)
	{
		$errors[] = "Short password";
	}
	if($pass1 != $pass2)
	{
		$errors[] = "Password doesn't match";
	}
	if(!@eregi("^[a-z0-9]+([_\\.-][a-z0-9]+)*@([a-z0-9]+([\.-][a-z0-9]+))*$",$email ))
	{
		$errors[] = "Invalid email";
	}
	if(count($errors) < 1)
	{
		$newPass = md5($pass1);
		$query = "INSERT INTO users SET username='$name',password='$newPass',email='$email'";
		@mysql_query($query) or die(mysql_error());
	}
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="en" xml:lang="en" xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv = "Content-Type" content = "text/html; charset = utf-8" />
		<link type="text/css" rel="stylesheet" href="register.css" />
		<title>Register</title>
	</head>
	<body>
	
	<div class="back">
		<a href="../../mainpaige.php">Go Back</a>
	</div>
	<div class="centraltext">
	</div>
	<h1>Register</h1>
	<div class="register">
		<?php
			if(isset($_POST['reg']) && isset($errors))
			{
				foreach($errors as $error)
				{
					print $error."<br/>";
				}
			}
		?>
			<form method = "post" action = "">
				Name:     <input type = "text" name = "username" /></br>
				Password: <input type = "password" name = "pass1" /></br>
				Password: <input type = "password" name = "pass2" /></br>
				E-mail:   <input type = "text" name = "email" /></br>
				<input type = "submit" name = "reg" value = "Register" />
			</form>
	</div>
	</body>

</html>