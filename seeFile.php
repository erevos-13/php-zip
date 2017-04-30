<?php
/*session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

const br = "<br>";

require('connect.php');

$sql = "SELECT * from file";
$result = $conn->query($sql);

echo "<h1> The file inside of me cloud is:</h1>";
while ($row = $result->fetch_assoc()) {
	echo "<ul>";
	echo "<li> The <b>id: </b> ".$row['id']." <b>The name: </b>".$row['name']." <b> Type: </b>".$row['mime']." <b>In size: </b>".$row['size']."<b>Created by the time : </b>".$row['created'].br."</li>";
	echo "</ul>";
}
$conn->close();
*/
?>

<!DOCTYPE html>
<html>
<head>
	<title>Download File</title>
</head>
<!-- <body>
<form method="post"  action="download.php">
	<input type="text" name="id">
	<input type="submit" name="submit">
</form>

</body>
</html> -->

<?php 
    include("connect.php");  
    $fetc = "SELECT * FROM file LIMIT 5";
    $result = mysqli_query($conn, $fetc);
?>
<body>
<?php
while($row1=mysqli_fetch_array($result))
{
    $id=$row1['id'];
    $name = $row1['name'];
    
    ?>
<div class="rect">

<a href="download.php?filename=<?php echo $name ;?>" >
<?php echo $name ;?></a>
</div>
<?php 
} 
?>
</body>

</html>