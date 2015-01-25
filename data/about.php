<div class="jumbotron  justshadow" style="background-color: #222; background-repeat: x-repeat; ">
	<div class="container"  >
	<center>
	<h1 style="color:#fff">Willkommen zu AbiPool</h1>
	</center>
	</div>
	
	<center>
	<div  style="overflow:hidden;height:60px; max-width:100%;width:auto">
	
	<?php
		for ($i = 0; $i<count($subjects);$i++){
			?>
											
			 <img style="margin: 0px -3px 0px -3px" width="60px" height="60px" src="<?php echo $subjects[$i]->img; ?>" alt="...">
			<?php
		}
									
	?>
	
</div>		
</center>
	
</div>


