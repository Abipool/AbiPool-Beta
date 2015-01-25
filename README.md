<h1>AbiPool</h1>
<br>Hier wird der Code für die kommende Website entwickelt</br>
<br>

<h2>Installation</h2>
<p>DU hast den MYSQL server installiert. Du musst nun die sql struktur importieren. Das sieht man in PHPMYADMIN WIE MAN DAS MACHT, bekommt man hin :D
<br>Der FILE liegt hier: <pre>sql/abipool.sql</pre>

<br>Der nächste wichtige Schritt ist es den FILE <pre>php/connection.php</pre> so anzupassen dass er mit deiner Datenbank übereinstimmt

<br>

<h3>Hier musst du deine Server daten und einen Login auswählen</h3>

<h2>SQL BEFEHL EINFACH BEI PHP-MY ADMIN REINHAUEN (**username** ersetzen)</h2>
<pre>
GRANT SELECT, INSERT, UPDATE, DELETE, FILE ON *.* TO '**username**'@'localhost' IDENTIFIED BY PASSWORD '*FE773F4C77B9CA5700D568F226A78522FC6388EF';

</pre>
<br>
Das Passwort ist dann: webpool
<br>
<code>
<?php
	$connection_err = false;
	error_reporting(E_ERROR); 	
	$verbindung = mysql_connect("localhost", "webpool","webpool") or ($connection_err = true) ;
?>

</code>

<br>
<p> Bei fragen einfach an mich wenden :D

Julius

<pre>
Team GBS,
für Leonardo,
2015
</pre>
