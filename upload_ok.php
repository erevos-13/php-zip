<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Up load Ok</title>
<style>
	.upload{
		text-align: center;
		font-size: 1.30em;
		background-color: #00FA9A;
		padding: 60px 40px;

	}
</style>
</head>
<body>
<?php
date_default_timezone_set('Europe/Athens');
$time = date("F j, Y, g:i a");

?>
<div class="upload">
<p><?php print "the file:".$_SESSION['file']."@".$time; ?></p>
</div>

</body>
</html>