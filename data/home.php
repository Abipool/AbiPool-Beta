<?php

echo '<div class="container" style="margin-top:20px;">';
					
					
						$counter = 0;
						
						for ($i = 0; $i < count($contents); $i++){
						
							if($counter == 0){
								echo '<div class="row">';
							}
							
							?>
							
									
							
							 
								  <div class="  col-sm-6 col-md-3">
								  
										<?php
										
											for($f = 0; $f < count($subjects); $f++){
												if ($subjects[$f]->tag == ($contents[$i]->subject)){
													$thissubject = $subjects[$f]; 
													$thisimg = $thissubject->img; 
													
												}
											
											}
										
										?>
								  
								  
									<div class="thumbnail justshadow" >
									
									
										
									<span style="position:absolute; margin-top:10px;margin-left:10px" class="badge">
									
									
									<?php
										echo $thissubject->name; 
									
									
									
									?></span>
									 
										<div style="width:100%;height:200px;background-image:url('<?php if(($contents[$i]->thumbimage) == 'none'  || ($contents[$i]->thumbimage) == '' ){ echo $thisimg;}else{echo $contents[$i]->thumbimage ;}?>'); background-size: cover;background-repeat: no-repeat; background-position: 50% 50%"></div>
									  
									  <div class="caption">
										<?php
										
										echo ' <h3>' . $contents[$i]->title . '</h3>';
										echo ' <div style="height:auto;max-height: 100px;overflow:hidden;"><p>' . $contents[$i]->thumbtext .'</p></div>';
										
										?>
										<p>
											<a href="?page=view&url=<?php echo $contents[$i]->content; ?>" style="margin-top:5px;color:white;background-color:<?php echo $thissubject->color; ?>" class="btn btn-default" role="button">Beitrag anzeigen</a>
											
											<br>
											
											
											<h5 align="right" style="color:#777">
												<?php 
												$date = new DateTime();
												$date->format('Y-m-d H:i:s');
												
												$date->setTimestamp($contents[$i]->time / 1000);
												
												echo $date->format('d.m.Y');
												
												
												?>
											</h5>
												
											
											
										</p>
									  </div>
									</div>
								  </div>
							
							
							
							<?php
							if ($counter >= 3){
								echo '</div>';
								$counter = 0;
								$lines = $lines +1;
							}else {
							$counter = $counter + 1;
							}
							
						
						
						}
						
					echo '</div>';


?>