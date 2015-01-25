<?php
	$connection_err = false;
	error_reporting(E_ERROR);	
	$verbindung = mysql_connect("localhost", "webpool","webpool") or ($connection_err = true) ;
?>