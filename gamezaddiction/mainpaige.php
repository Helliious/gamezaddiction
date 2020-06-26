<?php
session_start();
$user = @$_SESSION['username'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="en" xml:lang="en" xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<link type="text/css" rel="stylesheet" href="mainpaige.css" />
		<meta http-equiv = "Content-Type" content = "text/html; charset = utf-8" />
		<title>gamezaddiction</title>
	</head>
	<body>
		<div id="valid1">
			<p>
				<a href="http://validator.w3.org/check?uri=referer"><img
				src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Strict" height="31" width="88" /></a>
			</p>
		</div>
		<div id="valid2">
			<p>
				<a href="http://jigsaw.w3.org/css-validator/check/referer">
					<img style="border:0;width:88px;height:31px"
					src="http://jigsaw.w3.org/css-validator/images/vcss-blue"
					alt="Valid CSS!" />
				</a>
			</p>
		</div>
			
		<div class = "login">
			<?php if(isset($user))
				{
					?>
			<div class="in">
			Hello <?php print $user; ?>
			<a href="logout.php">Logout</a>
			</div>
			<?php
				}
				else
				{
			?>
			<?php
				if(isset($_SESSION['error'])) print $_SESSION['error'];
			?>
				<form method = "post" action = "login.php">
					Username: <input type = "text" name = "username" /></br>
					Password: <input type = "password" name = "password" /></br>
					<input type = "submit" name = "submit" value = "Login" />
				</form>
			<?php
				}
			?>
		</div>
		<a href="mainpaige.php">
			<div id="header">
				<p id="first">Game</p>
				<p id="second">Z</p>
				<p id="third">addiction</p>
			</div>
		</a>
		
		<div class="menu1">
			<a href="gamegenres/top10/top15.php">Top 15</a>
			<a href="gamegenres/mmorpg/mmorpg.php">MMORPG</a>
			<a href="gamegenres/action/action.php">Action</a>
			<a href="gamegenres/logical/logical.php">Logical</a>
			<a href="gamegenres/survival/survival.php">Survival</a>
			<a href="gamegenres/strategy/strategy.php">Strategy</a>
			<a href="gamegenres/sport/sport.php">Sport</a>
			<a href="gamegenres/adventure/adventure.php">Adventure</a>
			<a href="gamegenres/rpg/rpg.php">RPG</a>
			<a href="gamegenres/simulator/simulator.php">Simulator</a>
			<a href="gamegenres/fight/fight.php">Fight</a>
			<a href="gamegenres/tactical/tactical.php">Tactical</a>
			<a href="gamegenres/horror/horror.php">Horror</a>
			<a href="gamegenres/manager/manager.php">Manager</a>
			<a href="gamegenres/fps/fps.php">FPS</a>
			<a href="gamegenres/hiddenobjects/hiddenobjects.php">Hidden Objects</a>
		</div>
		
		<div class="menu2">
			<a href="mainpaige.php">Home</a>
			<a href="horizontalmenu/register/register.php">Register</a>
			<a href="top10.html">News</a>
			<a href="top10.html">Forum</a>
			<a href="top10.html">Fan Art</a>
			<a href="top10.html">Wallpapers</a>
			<a href="top10.html">Contacts</a>
		</div>
		<div class="centraltext">
			
		</div>
	</body>
</html>
