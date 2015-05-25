<!DOCTYPE html>
<html>
	<head>
		<title>Platonic Network</title>
		<link rel="shortcut icon" type="image/png" href="/Platonic_Network/img/favicon.png"/>
		<style>
			p {
				font-size: 50px;
				text-align: center;
				font-family: Helvetica;
				color: #551A8B;
				word-break: break-all
			}

			div {
				background-color: #9E9E9E;
				max-width: 50%;
				width: 50%;
				margin-top: 15%;
				border-style: solid;
				border-color: #9E9E9E;
				border-width: 1px;
				border-radius: 5px
			}
			
			body {
				background-color: #424242
			}
		</style>
	</head>
	
	<body>
		<center>
			<div>
				<?php
				$q = $_GET['q'];
				echo "<p>" . $q . "</p>";
				?>
			</div>
		</center>
	</body>
</html>
