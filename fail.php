<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Fail</title>
	<style>
	a{
		text-decoration: none;
	}
		.fail{
			text-align: center;
			font-size: 1.30em;
			padding: 60px 40px;
			background-color: #00FA9A;
		}
	</style>
</head>
<body>
<div class="fail">
<?php
echo "<p>The file: <i><b>".$_SESSION['file']."</b></i> file to upload all ready there</p>";
?>
<button><a href="upload.php">return</a></button>
</div>
</body>
</html>