<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

if(isset($_POST["submit"])) {


$target_dir = "upload/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = true;
$FileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image


    if (file_exists($target_file)) {
        $uploadOk = false;
    }

    


    if ($uploadOk == false) {
        $_SESSION['file'] = basename( $_FILES["fileToUpload"]["name"]);
        header('Location: fail.php');
        exit;
    }
    else 
    {   

        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        $_SESSION['file']=  basename( $_FILES["fileToUpload"]["name"]);

         
        header('Location: upload_ok.php');
        exit;       
    }else{
        echo "Sorry, file is not upload";
    }

    }        
    



    
    
}
?>


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Cloud</title>
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
<form class="form" action="upload.php" method="post" enctype="multipart/form-data">
    <h1>Up load a file in our Coud</h1>
    <p>Select file to upload:</p>
    <input type="file" name="fileToUpload" id="fileToUpload"><br><br>
    <input type="submit" value="Upload file" name="submit">
    
</form>

</body>
</html>


