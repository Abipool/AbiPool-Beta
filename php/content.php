<?php
							error_reporting(E_ERROR);	
							$cerror = false;
							include "connection.php";
							
						
						
							$contents = array();
						
							include "php/connection.php";
							mysql_select_db("abipool") or ($cerror = true);
							$abfrage = "SELECT * FROM contentdb";
							$ergebnis = mysql_query($abfrage);
							
							while($row = mysql_fetch_object($ergebnis)){
							
								$contents[] = $row;
							
							}
								
								
							
							
?>