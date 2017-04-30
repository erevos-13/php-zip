<?php
    require 'connect.php';

    $query = "SELECT id, name, mime FROM file";
    $result = mysqli_query($conn, $query) or die('Error, query failed');

    if(mysqli_num_rows($result)==0){
        echo "Database is empty <br>";
    }
    else{
       

        while(list($id, $name, $mime) = mysqli_fetch_array($result)){

            echo "<a href='download.php?id=".$id."'>".$name."</a> <br>";
            

           

        }
    }

    if(isset($_GET['id'])){

        $id = $_GET['id'];  
        
        $query = "SELECT name, mime, size, data FROM file WHERE id = '$id'";       
        $result = mysqli_query($conn, $query) or die('Error, query failed');

        list($name, $mime, $size, $data) =  mysqli_fetch_array($result);

        header("Content-length: $size");
        header("Content-type: $mime");
        header("Content-Disposition: attachment; filename=".$name);
        ob_clean();
        flush();
        echo $data;
        mysqli_close($conn);
        exit;
        
    }
?>
