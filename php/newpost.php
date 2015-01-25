<?php

	include "connection.php";
	$status = "succes";
	if($connection_err == false){
		
		mysql_select_db("abipool") or die ("Die Datenbank existiert nicht.");
		
		$thumbnail = $_POST['thumbnail'];
		$timestamp = $_POST['timestamp'];
		$desc = $_POST['desc'];
		$subject = $_POST['subject'];
		$title = $_POST['title'];
		$tags = $_POST['tags'];
		$cid = $_POST['currentid'];
		$content = $_POST['content'];
	
		$c_url = $subject . "_" . $timestamp . "_" . $cid . ".html";
		$file = "../posts/" . $c_url;
		
		file_put_contents($file, $content);
		
		
		
		$eintrag = "INSERT INTO contentdb
		(thumbimage, thumbtext,  time, subject, content,tags,title )
		VALUES
		('$thumbnail', '$desc', '$timestamp' , '$subject' , '$c_url' , '$tags' , '$title')";
		
		$eintragen = mysql_query($eintrag);
		echo $eintragen;
		
	} else {
	$status = "nomysql";
	}
	
	echo $status;

?>