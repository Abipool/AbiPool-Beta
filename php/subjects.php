<?php
							error_reporting(E_ERROR);	
							$serror = false;
							include "connection.php";
							mysql_select_db("abipool") or ($serror = true);
							$abfrage = "SELECT * FROM subjects";
							$ergebnis = mysql_query($abfrage);
							$counter = 0;
							$subjects = array();
							while($row = mysql_fetch_object($ergebnis)){
								$subjects[] = $row;
								
							}
							
							
?>