<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);




// Check if a file has been uploaded
if(isset($_FILES['uploaded_file'])) {
    // Make sure the file was sent without errors
   
        // Connect to the database
        require('connect.php');
 
        // Gather all required data
        $name = $conn->real_escape_string($_FILES['uploaded_file']['name']);
        $mime = $conn->real_escape_string($_FILES['uploaded_file']['type']);
        $data = $conn->real_escape_string(file_get_contents($_FILES  ['uploaded_file']['tmp_name']));
        $size = intval($_FILES['uploaded_file']['size']);
 
        // Create the SQL query
        $query = "
            INSERT INTO file (
                id, name, mime , size, data, created
            )
            VALUES (
            NULL ,'$name', '$mime', $size, '$data', NOW()
            )";
 
        // Execute the query
        $result = $conn->query($query);
 
        // Check if it was successfull
        if($result) {
            echo 'Success! Your file was successfully added!';
        }
        else {
            echo 'Error! Failed to insert the file'
               . "<pre>{$conn->error}</pre>";
        }
    
    
 
    // Close the mysql connection
    $conn->close();

}
 


?>
 
<!DOCTYPE html>
<head>
    <title>Cloud</title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
    <form class="form" action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="uploaded_file"><br>
        <input type="submit" value="Upload file">
    </form>
    
</body>
</html>



