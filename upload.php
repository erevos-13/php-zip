<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$target_dir = "upload/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$FileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {

    if (($_FILES["fileToUpload"]["tmp_name"])=== ($_FILES["fileToUpload"]["name"])) {
        echo "readyup";
    }
   
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) 
    {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error to uploading your file.";
    }
}
?>


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Cloud</title>
   <link rel="stylesheet" type="text/css" href="css/normalize.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<form class="form" action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
    
</form>

</body>
</html>


