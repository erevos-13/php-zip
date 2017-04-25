<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>File</title>
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
<div class="fail">
<?php
echo "<p>The file: <i><b>".$_SESSION['file']."</b></i> file to upload all ready there</p>";
?>
<a href="upload.php"><button class="button">return</button></a>
</div>
</body>
</html>