<h1>AbiPool</h1>
<br><i>Hier wird der Code für die kommende Website entwickelt</i></br>
<br>

<h2>Installation</h2>


<br>Der nächste wichtige Schritt ist es den File <pre>php/connection.php</pre> so anzupassen dass er mit deiner Datenbank übereinstimmt.


<br>Mit diesme Befehl kann man einen User erstellen mit dem namen 'webpool' und dem Passwort 'webpool'.
<pre>
GRANT SELECT, INSERT, UPDATE, DELETE, FILE ON *.* TO 'webpool'@'localhost' IDENTIFIED BY PASSWORD '*FE773F4C77B9CA5700D568F226A78522FC6388EF';
</pre>

<br> Die dazugehörende Konfiguration entspricht der Standart-Konfiguration:

<pre>
<?php
	$connection_err = false;
	error_reporting(E_ERROR); 	
	$verbindung = mysql_connect("localhost", "webpool","webpool") or ($connection_err = true) ;
?>
</pre>

<br>Bei fragen einfach an mich wenden 



<pre>
Team GBS,
für Leonardo,
2015

</pre>
