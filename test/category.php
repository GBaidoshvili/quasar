<!DOCTYPE html>
	<head>
		<meta charset="UTF-8">
		<title>Quasar | <?php 
		
		
		include("../connection.php");
		
		if (isset($_GET['category']))
		{$category = preg_replace ('%^a-z%',' ',$_GET['category']);}
		
		echo ucwords($category);
		
		?></title>
		<link rel="shortcut icon" type="image/x-icon" href="E/images/q.ico" />
		<link href="mainstyle.css" rel="stylesheet" type="text/css">

	</head>
	<body>
		<?php		
		
		include("Header.php");
		
		$category = '';
				
		if (isset($_GET['category']))
		{$category = $_GET['category'];}
		

		$query = 'SELECT COUNT(id_num) FROM Posts WHERE category = '. '"' .$category. '"';	
		
		include("showposts1.php");								
								
		$query = 'SELECT title, posting_date_and_time, main_image, id_num, post_outer_text FROM Posts WHERE category = '. '"' .$category. '"' .  'ORDER BY id_num DESC ' . $limit;
								
		include("showposts2.php");
				
		include("Footer.php");
		
		?>
		
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>
		<script type="text/javascript" src="mainjs.js"></script>
	</body>
</html>