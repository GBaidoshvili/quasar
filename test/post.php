<!DOCTYPE html>
	<head>

<?php

	include("../connection.php");
	
	$id = '';
				
	if (isset($_GET['id']))
	{$id = preg_replace ('%^0-9%',' ',$_GET['id']);}
	
	$query = 'SELECT title, main_image, id_num, post_outer_text FROM Posts WHERE id_num = "' . $id . '"';
	$result = mysql_query($query);
				
	mysql_close($connect);
								
	while($post = mysql_fetch_array($result))
		{
		echo 
		    '<meta property="fb:app_id"          content="1378114882513415" > 
		    <meta property="og:type"            content="article" > 
		    <meta property="og:url"             content="http://quasar.ge/post.php?id=' . $post['id_num'] . '" > 
		    <meta property="og:title" 		content="' . $post['title'] . '" >
		    <meta property="og:image"           content="http://quasar.ge/post%20main%20images/' . $post['main_image'] . '" > 
		    <meta property="og:description"    content="' . $post['post_outer_text'] . '" >';
									}


?>



		<meta charset="UTF-8">
		<title>Quasar</title>
		<link rel="shortcut icon" type="image/x-icon" href="E/images/q.ico" />
		<link href="mainstyle.css" rel="stylesheet" type="text/css">
		
		<link href="poststyle.css" rel="stylesheet" type="text/css">

	</head>
	

	<body>
	
	 
		
			<?php include("Header.php"); ?>
			<div id="fb-root"></div>
				<div class="post">
				
				<?php
				include("../connection.php");
				
				
				$id = 1;
				
				if (isset($_GET['id']))
				{$id =$_GET['id'];}
				
				$query = 'SELECT title, id_num, text, posting_date_and_time, main_image FROM Posts WHERE id_num = "' . $id . '"';
						
				$result = mysql_query($query);
				
				$post = mysql_fetch_array($result);
				
					if($post == '') {echo '<div class="postheader">
								<div class="posttitle">
								გვერდი არ არსებობს
								</div>
							</div>
							
							<div class="postmain">
								<div class="postimage">
								<img class="postmainimage" src="E/images/404.jpg">
								</div>
								<div class="posttext">
								
								გვერდი, რომელსაც თქვენ ეძებთ, სამწუხაროდ, არ არსებობს. . .  :(<br>
								გადაამოწმეთ მითითებული URL ან დაბრუნდით მთავარ გვერდზე.
								
								</div>
							</div>
							
							<div class="postfooter">
							
							<a class="readmore" href="index.php">
								მთავარი
								</a>

							</div> ';}
				
					else{	
					
				$id = 1;
				
				if (isset($_GET['id']))
				{$id =$_GET['id'];}
				
				$query = 'SELECT title, id_num, text, posting_date_and_time, main_image FROM Posts WHERE id_num = "' . $id . '"';
						
				$result = mysql_query($query);	
				mysql_close($connect);	
				
				while($post = mysql_fetch_array($result))
						{
						
						echo		'<div class="postheader">
								<div class="posttitle">' .
								$post['title'] .
								'</div>
								<div class="postdate">' .
								$post['posting_date_and_time'] .
								'</div>
							</div>
							
							<div class="postmain">
								<div class="postimage">
								<img class="postmainimage" src="post main images/' . $post['main_image'] . '">
								</div>
								<div class="posttext">' .
								$post['text'] .
								'</div>
							</div>
							
							<div class="postfooter">
								<div class="sharelike">
									
								<a class="share" target="_blank" rel="nofollow" href="http://www.facebook.com/sharer.php?u=http://quasar.ge/post.php?id=' . $post['id_num'] . '" title="FaceBook" 		
                                    				onclick="window.open(this.href,\'FaceBook\',\'status=no,toolbar=no,scrollbars=yes,titlebar=no,menubar=no,resizable=yes,width=700,height=480,directories=no,location=no\'); return false;">
                                  	  			</a>
								</div>
							</div> 
							
							<div class="fb-comments" data-href="http://quasar.ge/post.php?id=' . $post['id_num'] . '" data-width="700" data-numposts="5" data-colorscheme="light"></div>
							
							';}
							
							include("similarposts.php"); 
						}
							
	
				
				?>
				

				
				
				
				
			</div>
<?php include("Footer.php"); ?>
		
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>
		<script type="text/javascript" src="mainjs.js"></script>
	</body>
</html>