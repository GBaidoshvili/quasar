<!DOCTYPE html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta charset="UTF-8">
		<title>Quasar | Home</title>
		<meta name="google-site-verification" content="BefpOIfOCBKA585EV3KnTT4l_izO6UuNx-bSoLf0iyI" />
		
		<link href="mainstyle.css" rel="stylesheet" type="text/css">
		<link rel="shortcut icon" type="image/x-icon" href="E/images/q.ico" />
		
		<style type="text/css">
		


		</style>
		
	</head>
 
	<body>
		<?php include("Header.php"); ?> 

					
						
						<?php
						
						include("slider.php");

						$query = 'SELECT COUNT(id_num) FROM posts WHERE approval = "Yes"';
							
						
						include("showposts1.php");
						
						$query = 'SELECT title, posting_date_and_time, main_image, id_num, post_outer_text FROM posts WHERE approval = "Yes" ORDER BY id_num DESC ' . $limit;
						
						include("showposts2.php");
						
 ?>
						

	
					
					
					<?php include("Footer.php"); ?>
		
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>
		<script type="text/javascript">
		
		

		</script>
		<script type="text/javascript" src="mainjs.js"></script>
	</body>

</HTML>