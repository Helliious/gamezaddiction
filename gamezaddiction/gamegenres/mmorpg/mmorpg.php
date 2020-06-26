<?php
session_start();
$user = @$_SESSION['username'];
$pass = md5(@$_SESSION['password']);
?>

<!DOCTYPE HTML>
<html>
	<head>
		<link type="text/css" rel="stylesheet" href="mmorpg.css">
		<title>MMORPG</title>
	</head>
	<body>
		<div class="back">
			<a href="../../mainpaige.php">Go Back</a>
		</div>
		<div class="centraltext">
			<h1>Top 10</h1>
		</div>
		
		<?php if(isset($user) && isset($pass)) { ?>
			<div class="poll">
				<script type="text/javascript" src="http://www.easypolls.net/ext/scripts/emPoll.js?p=59a6fbf0e4b0f0b62d08adc5"></script>
				<a class="OPP-powered-by" href="http://www.objectplanet.com/opinio/" style="text-decoration:none;">
				<div style="font: 9px arial; color: gray;">online surveys</div></a>
			</div>
		<?php 
			}
		?>
		<div class="picture1">
			<p>10. The Elder Scrolls online</p>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/XH9fCA3dmGc" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="textbox1">
		</div>
		
		<div class="picture2">
			<p>9. Lost Ark</p>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/lV0wWzDAwJU" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="textbox2">
		</div>
		
		<div class="picture3">
			<p>8. Revelation online</p>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/AENtvSM6UV8" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="textbox3">
		</div>
		
		<div class="picture4">
			<p>7. Moonlight Blade</p>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/yxOQiZ636_c" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="textbox4">
		</div>
		
		<div class="picture5">
			<p>6. Final Fantasy XIV</p>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/4phUCJlomPo" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="textbox5">
		</div>
		
		<div class="picture6">
			<p>5. Bless online</p>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/nyIae9Y4FT4" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="textbox6">
		</div>
		
		<div class="picture7">
			<p>4. Blade and Soul</p>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/BBBQnzWWPfE" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="textbox7">
		</div>
		
		<div class="picture8">
			<p>3. Black Desert online</p>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/DD4zMOvRrzM" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="textbox8">
		</div>
		
		<div class="picture9">
			<p>2. Guild Wars 2</p>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/Em0Sd60iI2w" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="textbox9">
		</div>
		
		<div class="picture10">
			<p>1. World of Warcraft</p>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/eYNCCu0y-Is" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="textbox10">
		</div>
	</body>
</html>