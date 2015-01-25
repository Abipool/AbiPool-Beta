<?php
	$myfile = fopen("../misc/counter.txt", "r+") or die("Unable to open file!");
	
	$content = (int)file_get_contents('../misc/counter.txt');
	$towrite = 1 + intval($content);
	fwrite($myfile, $towrite);
	echo $towrite;
?>