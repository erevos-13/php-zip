<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

/**
* 
*/
class zipClass 
{
	public function zip($file){
	
	$zip = new ZipArchive;
		if ($zip->open("zipFile.zip", ZipArchive::CREATE) === TRUE)
		{
		    // Add file to the zip file
		    $zip->addFile($file);

		 
		    // All files are added, so close the zip file.
		    $zip->close();
		} else {
		    echo 'failed';
		}
	}
	
}

?>