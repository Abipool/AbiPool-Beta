<?php 

include 'php/subjects.php';
include 'php/content.php';



if(isset($_GET["page"]) && $_GET["page"] == "about" || !isset($_GET["page"])){
	$page =  'about';
	$color = '#ffffff';
	
}else{ 
	if ($_GET["page"] == "post"){
		$page =  'post';
		$color = '#03A678';
	}
	
	if ($_GET["page"] == "home"){
		$page =  'home';
		
	}
	
	if ($_GET["page"] == "about"){
		$page =  'about';
		
	}
	
	if ($_GET["page"] == "subjects"){
		$page =  'subjects';
	}
	if ($_GET["page"] == "view"){
		$page =  'view';
		$url= $_GET["url"];
	}
}

 ?>


<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Cover Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
	
	
	<!-- JQUERY STUFF-->
	<script src="js/jquery.js"></script>
	
	<!-- CODE HIGHLIGHTER -->
	<script src="cm/lib/codemirror.js"></script> 
	<link rel="stylesheet" href="cm/lib/codemirror.css"> 
	<link rel="stylesheet" href="cm/theme/eclipse.css"> 
		
	<script src="cm/mode/htmlmixed/htmlmixed.js"></script>
	<script src="cm/mode/xml/xml.js"></script>
	<script src="cm/mode/javascript/javascript.js"></script>
	<script src="cm/mode/css/css.js"></script>
	<script src="cm/mode/vbscript/vbscript.js"></script>

	<script src="cm/addon/display/fullscreen.js"></script>
	<script src="cm/addon/selection/active-line.js"></script>
	<script src="cm/addon/edit/closebrackets.js"></script>
		
    <!-- Custom styles for this template -->
    <link href="css/somepadding.css" rel="stylesheet">

	<!-- popups -->
	<link href="css/magnific-popup.css" rel="stylesheet">
	<script src="js/jquery.magnific-popup.js"></script>
    
	
	<!-- SCROLL BARS -->
	<link rel="stylesheet" href="css/perfect-scrollbar.css">
	
	
	<!-- FILE UPLOADS -->
	<script src="js/SimpleAjaxUploader.js"></script>
	
	
  </head>

  <body style="background-image:url('img/noise.png')">
	
				<?php include "data/navbar.html";?>
  

				<!-- CONTENT GENERATOR -->
				
					<?php
					if($page == 'home'){
					
						include "data/home.php";
						
					} else {
						if ($page == "post"){
							//echo file_get_contents("post.php");
							include "data/post.php";
						} 
						
						if ($page == "view"){
						?>
						<div class="container" style="margin-top:20px">
							<?php 
								echo file_get_contents("posts/" . $url);
							?>
						</div>
						<?php
						}
						
						if ($page == "about"){
							include "data/about.php";
						}
						
						
						if ($page == "subjects"){
						
							include "data/subjects.php";
						
						}
						
					}
					?>

			  
		
			
		
	  
	 

 

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  
    <script src="js/bootstrap.js"></script>
    <script src="js/docs.min.js"></script>
	
	
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
	
	<!-- MY SCRIPTS-->
	<script src="js/home.js"></script>
	<script src="js/new.js"></script>
	<script src="js/scrollwatcher.js"></script>
	
	
	
	 
	 
	 <!-- DO SOME STUFF AFTER WEBISTE LOADING --->
	<?php
		if ($connection_err == true){
			
			echo '<script>error("Entschuldigung", "Unsere Datenbank ist leider Offline");</script>';
			
		}
	?>		

	 
  </body>
</html>




