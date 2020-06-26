<?php 
session_start();
$user = @$_SESSION['username'];
$pass = md5(@$_SESSION['password']);
?>

<!DOCTYPE HTML>
<html>
	<head>
		<link type="text/css" rel="stylesheet" href="logical.css">
		<title>Logical</title>
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
				<script type="text/javascript" src="http://www.easypolls.net/ext/scripts/emPoll.js?p=59a6fa56e4b0f0b62d08adbe"></script>
				<a class="OPP-powered-by" href="http://trailguide.net/html" style="text-decoration:none;">
				<div style="font: 9px arial; color: gray;">bike trails</div></a>
			</div>
		<?php
			}
		?>
		<div class="picture1">
			<p>10. Rime</p>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/mrQINQ-Jxmo" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="textbox1">
		</div>
		
		<div class="picture2">
			<p>9. Manifold Garden</p>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/BSP-e8tnXhw" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="textbox2">
		</div>
		
		<div class="picture3">
			<p>8. Monument Valley</p>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/wC1jHHF_Wjo" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="textbox3">
		</div>
		
		<div class="picture4">
			<p>7. Chuchel</p>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/dPP_f9lXv68" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="textbox4">
		</div>
		
		<div class="picture5">
			<p>6. The Witness</p>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/9ytwNUMdbcE" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="textbox5">
		</div>
		
		<div class="picture6">
			<p>5. Echo</p>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/zG5Lh7Uu-EA" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="textbox6">
		</div>
		
		<div class="picture7">
			<p>4. The Room</p>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/syiha-lS04g" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="textbox7">
		</div>
		
		<div class="picture8">
			<p>3. The Talos Principle</p>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/m8oxVPeTUnU" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="textbox8">
		</div>
		
		<div class="picture9">
			<p>2. Obduction</p>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/2wCPOTK587o" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="textbox9">
		</div>
		
		<div class="picture10">
			<p>1. Portal 2</p>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/tax4e4hBBZc" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="textbox10">
		</div>
	</body>
</html>