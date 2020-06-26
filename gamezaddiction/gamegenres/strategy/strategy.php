<?php
session_start();
$user = @$_SESSION['username'];
$pass = md5(@$_SESSION['password']);
?>

<!DOCTYPE HTML>
<html>
	<head>
		<link type="text/css" rel="stylesheet" href="strategy.css">
		<title>Strategy</title>
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
				<script type="text/javascript" src="http://www.easypolls.net/ext/scripts/emPoll.js?p=59a6f756e4b0f0b62d08adb4"></script>
				<a class="OPP-powered-by" href="http://www.objectplanet.com/opinio/" style="text-decoration:none;">
				<div style="font: 9px arial; color: gray;">online surveys</div></a>
			</div>
		<?php 
			}
		?>
		
		<div class="picture1">
			<p>10. Sudden Strike 4</p>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/DnVdYsX4tK8" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="textbox1">
		</div>
		
		<div class="picture2">
			<p>9. Ultimate General: Civil War</p>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/Q6euddMwH6w" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="textbox2">
		</div>
		
		<div class="picture3">
			<p>8. Halo Wars 2</p>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/6RHzU9r0t2c" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="textbox3">
		</div>
		
		<div class="picture4">
			<p>7. Warhammer 40000: Dawn of War III</p>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/N_ZgyNoHtjw" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="textbox4">
		</div>
		
		<div class="picture5">
			<p>6. The Guild 3</p>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/7gkgnz1EtiM" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="textbox5">
		</div>
		
		<div class="picture6">
			<p>5. Life is Feudal: Forest Village</p>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/eiwF9YHd_T8" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="textbox6">
		</div>
		
		<div class="picture7">
			<p>4. Ancient Cities</p>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/oiheFV98xzA" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="textbox7">
		</div>
		
		<div class="picture8">
			<p>3. Anno 1800</p>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/lwz3I3TtAK0" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="textbox8">
		</div>
		
		<div class="picture9">
			<p>2. Endless Space 2</p>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/2XrIq7eb_ic" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="textbox9">
		</div>
		
		<div class="picture10">
			<p>1. Spellforce 3</p>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/CHdP8FUfqzc" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="textbox10">
		</div>
	</body>
</html>