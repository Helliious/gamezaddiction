<?php
session_start();
$user = @$_SESSION['username'];
$pass = md5(@$_SESSION['password']);
?>

<!DOCTYPE HTML>
<html>
	<head>
		<link type="text/css" rel="stylesheet" href="simulator.css">
		<title>Simulator</title>
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
				<script type="text/javascript" src="http://www.easypolls.net/ext/scripts/emPoll.js?p=59a80847e4b0a26a2e8dfe90"></script>
				<a class="OPP-powered-by" href="https://www.murvey.com" style="text-decoration:none;">
				<div style="font: 9px arial; color: gray;">polls & surveys</div></a>
			</div>
		<?php 
			}
		?>
		
		<div class="picture1">
			<p>10. Kinectimals</p>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/MiEQZfzPInw" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="textbox1">
		</div>
		
		<div class="picture2">
			<p>9. Combat Air Patrol 2</p>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/ecyndnwkg5g" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="textbox2">
		</div>
		
		<div class="picture3">
			<p>8. Demolish and Build Company</p>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/wDfsgI8pM6k" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="textbox3">
		</div>
		
		<div class="picture4">
			<p>7. Fernbus Simulator</p>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/QKA21Edgvv0" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="textbox4">
		</div>
		
		<div class="picture5">
			<p>6. Euro Truck 2</p>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/nCDLuRY0THU" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="textbox5">
		</div>
		
		<div class="picture6">
			<p>5. Train Simulator 2017</p>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/cqXjDGb1vIU" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="textbox6">
		</div>
		
		<div class="picture7">
			<p>4. Ships 2017</p>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/SfTMImrwJI8" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="textbox7">
		</div>
		
		<div class="picture8">
			<p>3. Firefighting Simulator</p>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/pvJxuSifL8s" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="textbox8">
		</div>
		
		<div class="picture9">
			<p>2. Farming Simulator 2017</p>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/OE-sKkdFgaE" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="textbox9">
		</div>
		
		<div class="picture10">
			<p>1. Identity</p>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/7F3Nbcfr2YM" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="textbox10">
		</div>
	</body>
</html>