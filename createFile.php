<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);


$content = "edw tha vawzw to periexomeno pou thelw";
//here i open and i meka i file

$fp = fopen("orfeas.txt", "wb");
fwrite($fp, $content);
fclose($fp);


?>