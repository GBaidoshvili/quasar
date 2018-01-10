<!DOCTYPE html>
	<head>

		<meta charset="UTF-8">
		<title>Quasar</title>
		<link rel="shortcut icon" type="image/x-icon" href="E/images/q.ico" />
		<link href="mainstyle.css" rel="stylesheet" type="text/css">
		
		<link href="poststyle.css" rel="stylesheet" type="text/css">

	</head>
	
	<body>
	
	 
		
		
			
			<?php
						
						$keywords = $_GET['keywords'];
						
						$keywordsfiltered = preg_replace('#[^a-z ^ა-ჰ 0-9?!,]#i', '', $keywords);
						
						
						include("Header.php");
						include("../connection.php");
						
						$query = "SELECT title, id_num, post_outer_text FROM Posts WHERE MATCH(title,text,post_outer_text) AGAINST ('" . $keywordsfiltered . "')";
						$result = mysql_query($query);
						
	
						$resultnum = mysql_num_rows($result);
						
						if ($resultnum == 0)
						{ echo '<center id="searchreport0"><h2>სამწუხაროდ, თქვენ მიერ მითითებულ საძიებო სიტყვაზე არცერთი რეზულტატი არ მოიძებნა.</h2></center>';}
						else if ($keywords == '')
						{echo '<center id="searchreport0"><h2>გთხოვთ მიუთითოთ საძიებო სიტყვა!</h2></center>';}
						else
						{

						
						echo '<center id="searchreport"><i> თქვენ მიერ მითითებულ საძიებო სიტყვაზე მოიძებნა '. $resultnum .' რეზულტატი </i></center>';
						
						while($post = mysql_fetch_array($result))
						{
						
						
						echo '<span class="searchresult"> <h3> <a href=post.php?id=' . $post['id_num'] . '>' . $post['title'] . '</a> </h3> 
						
						<p>' . $post['post_outer_text'] . '</p>
						
						</span>'
						
						;
						
						
						} 
						
						};
						
						
						mysql_close($connect);
						
			?>
			
									
					
		<?php include("Footer.php"); ?>
	
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>
		<script type="text/javascript" src="mainjs.js"></script>
	
	</body>
</html>