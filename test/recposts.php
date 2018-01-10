		
				<div id="recposts">
				
					<div id="recpostshead">
						რეკომენდებული პოსტები
					</div>
					
					<div id="recpostscontent">
						
					<?php 

							
							include("../connection.php");
							
							$query1 = 'SELECT title, main_image, id_num FROM Posts WHERE in_recposts != "NULL" ORDER BY in_recposts';
							$result1 = mysql_query($query1);
							while($post = mysql_fetch_array($result1)) {
							echo   '
										
						<a href="post.php?id=' . $post['id_num'] . '" ><div class="recpost">
						<img class="recpostimage" src="post main images/' . $post['main_image'] . '" width="226px;" height="120px">
						
						<div class="recpostinfo">
						' . $post['title'] . '
						</div>
						</div>
						</a>';};
						
						
						mysql_close($connect);
							
			
			
						?>
					</div>

				</div>