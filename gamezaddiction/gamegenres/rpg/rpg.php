<?php
session_start();
$user = @$_SESSION['username'];
$pass = md5(@$_SESSION['password']);
?>

<!DOCTYPE HTML>
<html>
	<head>
		<link type="text/css" rel="stylesheet" href="rpg.css">
		<title>RPG</title>
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
				<script type="text/javascript" src="http://www.easypolls.net/ext/scripts/emPoll.js?p=59a7356ae4b0f0b62d08aec4"></script>
				<a class="OPP-powered-by" href="http://www.objectplanet.com/opinio/" style="text-decoration:none;">
				<div style="font: 9px arial; color: gray;">survey solution</div></a>
			</div>
		<?php 
			}
		?>
		
		<div class="picture1">
			<p>10. Kingdom Come Deliverance</p>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/ZOkd-Lmmcb4" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="textbox1">
		</div>
		
		<div class="picture2">
			<p>9. Nier: Automata</p>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/YKI1Jh43Ju8" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="textbox2">
		</div>
		
		<div class="picture3">
			<p>8. Nioh</p>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/aMTH7Byv5vE" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="textbox3">
		</div>
		
		<div class="picture4">
			<p>7. South Park: The Fractured But Whole</p>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/fiayfb1rrs0" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="textbox4">
		</div>
		
		<div class="picture5">
			<p>6. Vampyr</p>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/QDd8TJwVZ0s" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="textbox5">
		</div>
		
		<div class="picture6">
			<p>5. Divinity Original Sin 2</p>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/3A_PEIkZ0O8" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="textbox6">
		</div>
		
		<div class="picture7">
			<p>4. The Elder Scrolls V: Skyrim</p>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/PjqsYzBrP-M" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="textbox7">
		</div>
		
		<div class="picture8">
			<p>3. Mass Effect Andromeda</p>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/pyZw_oqk7Q8" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="textbox8">
		</div>
		
		<div class="picture9">
			<p>2. Horizon Zero Dawn</p>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/wzx96gYA8ek" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="textbox9">
		</div>
		
		<div class="picture10">
			<p>1. Fallout: New Vegas</p>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/l-x-1fm2cq8" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="textbox10">
		</div>
	</body>
</html>