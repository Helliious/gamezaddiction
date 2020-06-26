<?php
session_start();
$user = @$_SESSION['username'];
$pass = md5(@$_SESSION['password']);
?>

<!DOCTYPE HTML>
<html>
	<head>
		<link type="text/css" rel="stylesheet" href="survival.css">
		<title>Survival</title>
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
				<script type="text/javascript" src="http://www.easypolls.net/ext/scripts/emPoll.js?p=59a6f96ee4b0f0b62d08adbc"></script>
				<a class="OPP-powered-by" href="https://www.murvey.com" style="text-decoration:none;">
				<div style="font: 9px arial; color: gray;">surveys</div></a>
			</div>
		<?php 
			}
		?>
		
		<div class="picture1">
			<p>10. Conan Exiles</p>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/oEIcftl0OZk" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="textbox1">
		</div>
		
		<div class="picture2">
			<p>9. Project Crynosaurs</p>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/UKITtWvy5GY" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="textbox2">
		</div>
		
		<div class="picture3">
			<p>8. Hello Neighbor</p>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/TKLx5rhpS2k" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="textbox3">
		</div>
		
		<div class="picture4">
			<p>7. Project Wight</p>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/XxzNSRQG4m0" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="textbox4">
		</div>
		
		<div class="picture5">
			<p>6. Of Kings and Men</p>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/iDfmKdVX254" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="textbox5">
		</div>
		
		<div class="picture6">
			<p>5. State of Decay 2</p>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/FB4fFl-Ysg8" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="textbox6">
		</div>
		
		<div class="picture7">
			<p>4. Wild</p>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/JZwCLfTvmXo" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="textbox7">
		</div>
		
		<div class="picture8">
			<p>3. Prey for the Gods</p>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/hzDl2THyF4w" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="textbox8">
		</div>
		
		<div class="picture9">
			<p>2. Last Year</p>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/yaH4CAxfXwU" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="textbox9">
		</div>
		
		<div class="picture10">
			<p>1. Days Gone</p>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/DiHbP_gdfQg" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="textbox10">
		</div>
	</body>
</html>