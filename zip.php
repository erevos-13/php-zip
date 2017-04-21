<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$zip = new ZipArchive;
if ($zip->open('test.zip') === TRUE) {
    $zip->addFile('/home/erevos13/Desktop/orfeas.txt', 'orfeas2.txt');
    $zip->close();
    echo 'ok';
} else {
    echo 'failed';
}
?>