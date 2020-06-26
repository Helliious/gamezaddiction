<?php
session_start();
$user = @$_SESSION['username'];
$pass = md5(@$_SESSION['password']);
?>

<!DOCTYPE HTML>
<html>
	<head>
		<link type="text/css" rel="stylesheet" href="sport.css">
		<title>Sport</title>
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
				<script type="text/javascript" src="http://www.easypolls.net/ext/scripts/emPoll.js?p=59a6f634e4b0f0b62d08adb1"></script>
				<a class="OPP-powered-by" href="http://www.objectplanet.com/opinio/" style="text-decoration:none;">
				<div style="font: 9px arial; color: gray;">survey hosting</div></a>
			</div>
		<?php 
			}
		?>
		
		<div class="picture1">
			<p>10. Virtual Tennis 4</p>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/x5Qkc39VPvs" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="textbox1">
		</div>
		
		<div class="picture2">
			<p>9. MLB The Show 16</p>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/vNkkCApSOhI" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="textbox2">
		</div>
		
		<div class="picture3">
			<p>8. Rugby Challenge 3</p>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/wv9lGdQlUxs" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="textbox3">
		</div>
		
		<div class="picture4">
			<p>7. EA Sports UFC 3</p>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/6DbqJpUv3ZM" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="textbox4">
		</div>
		
		<div class="picture5">
			<p>6. Rocket League</p>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/Vce7Z9ziAjs" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="textbox5">
		</div>
		
		<div class="picture6">
			<p>5. NHL 17</p>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/MsnbSvrlBZ4" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="textbox6">
		</div>
		
		<div class="picture7">
			<p>4. MADDEN NFL 17</p>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/vX6BVrWusxQ" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="textbox7">
		</div>
		
		<div class="picture8">
			<p>3. PES 2017</p>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/Y4dQDTge59s" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="textbox8">
		</div>
		
		<div class="picture9">
			<p>2. NBA 17</p>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/T4jN8PKdZo8" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="textbox9">
		</div>
		
		<div class="picture10">
			<p>1. FIFA 17</p>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/-3fjoe5Njpc" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="textbox10">
		</div>
	</body>
</html>