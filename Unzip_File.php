<?php
	$zip = new ZipArchive;
	$source_file = 'C:\\Users\\user\\Desktop\\source.zip';
	$destination_path = 'C:\\Users\\user\\Desktop\\destination\\';
	$res = $zip->open($source_file);
	
	if ($res === TRUE) {
		$zip->extractTo($destination_path);
		$zip->close();
		echo "Success!!! $destination_path";
	} else {
		echo "Error: cannot open $destination_path";
	}
?>