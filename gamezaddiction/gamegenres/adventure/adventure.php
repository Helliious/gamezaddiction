<?php
session_start();
$user = @$_SESSION['username'];
$pass = md5(@$_SESSION['password']);
?>

<!DOCTYPE HTML>
<html>
	<head>
		<link type="text/css" rel="stylesheet" href="adventure.css">
		<title>Adventure</title>
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
				<script type="text/javascript" src="http://www.easypolls.net/ext/scripts/emPoll.js?p=59a6f876e4b0f0b62d08adb7"></script>
				<a class="OPP-powered-by" href="http://trailguide.net/html" style="text-decoration:none;">
				<div style="font: 9px arial; color: gray;">find bike trails</div></a>
			</div>
		<?php 
			}
		?>
		
		<div class="picture1">
			<p>10. Oxenfree</p>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/NAhrOoNR4ng" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="textbox1">
		</div>
		
		<div class="picture2">
			<p>9. No man's sky</p>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/aozqa_7PLhE" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="textbox2">
		</div>
		
		<div class="picture3">
			<p>8. Middle-earth: Shadow of War</p>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/bhSfjt8jQyk" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="textbox3">
		</div>
		
		<div class="picture4">
			<p>7. Game of Thrones: Season 2</p>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/W1UtoNE3aoI" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="textbox4">
		</div>
		
		<div class="picture5">
			<p>6. The Walking Dead: Season 3</p>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/fS5NgOQZBTw" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="textbox5">
		</div>
		
		<div class="picture6">
			<p>5. State of Mind</p>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/0INc_35W6PI" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="textbox6">
		</div>
		
		<div class="picture7">
			<p>4. Guardians of the Galaxy</p>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/RiE8w03GgZU" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="textbox7">
		</div>
		
		<div class="picture8">
			<p>3. What remains of Edith Finch</p>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/4mrx1G26GTQ" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="textbox8">
		</div>
		
		<div class="picture9">
			<p>2. Shenmue III</p>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/k3uqdByimME" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="textbox9">
		</div>
		
		<div class="picture10">
			<p>1. Firewatch</p>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/kZX3MgsRb0A" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="textbox10">
		</div>
	</body>
</html>