<h1>AbiPool</h1>
<br><i>Hier wird der Code für die kommende Website entwickelt</i></br>
<br>

<h2>Installation</h2>
<h3>PHP</h3>


<br>Den File <pre>php/connection.php</pre> so anpassen, dass er mit der Datenbank übereinstimmt.


<h3>Im MYSQL</h3>
<h4>User Erstellen</h4>
<br>Mit diesem Befehl kann man einen User erstellen mit dem namen 'webpool' und dem Passwort 'webpool'.
<pre>
GRANT SELECT, INSERT, UPDATE, DELETE, FILE ON *.* TO 'webpool'@'localhost' IDENTIFIED BY PASSWORD '*FE773F4C77B9CA5700D568F226A78522FC6388EF';
</pre>

<br> Die dazugehörende Konfiguration entspricht der Standart-Konfiguration:

<code>
<?php
	$connection_err = false;
	error_reporting(E_ERROR); 	
	$verbindung = mysql_connect("localhost", "webpool","webpool") or ($connection_err = true) ;
?>
</code>

<h4>Struktur Importieren</h4>
<br> Erstelle eine Datenbank mit dem Namen 'abipool' und <h4>IMPORTIERE</h4> den FILE <pre>sql/abipool.sql</pre> nun solltest du mehrere Tabellen sehen.



<h3>Alles Weitere</h3>
<br>Bei fragen und Problemen einfach an mich wenden 
<br>Wer mithelfen will beim design kann sich genau <a href="juliusmh@web.de">HIER</a>informieren.



<pre>
Team GBS,
für Leonardo,
2015

</pre>
