<?php 
							
							include("../connection.php");
							
							$id = $_GET['id'];
							
							$category = mysql_fetch_array(mysql_query('SELECT category FROM Posts WHERE id_num ="' . $id . '"'))[0];
								
							
							$resultcount = mysql_fetch_array(mysql_query('SELECT COUNT(id_num) FROM Posts WHERE category = "'. $category .'" AND id_num != ' . $id))[0];
							
							$query1 = 'SELECT title, id_num, main_image FROM Posts WHERE category = "'. $category .'" AND id_num != ' . $id . ' ORDER BY RAND() LIMIT 3';
						
							$result1 = mysql_query($query1);
							
							mysql_close($connect);
							
							if($resultcount != 0)
							
							{
							echo '<div id="similarposts">';
							
							$a=0;
							
							while($post = mysql_fetch_array($result1)) {
							$a++;
							echo   
							'<a href="post.php?id=' . $post['id_num'] . '">
									<div class="similarpost">
										<img src="post main images/' . $post['main_image'] . '">
										<div class="similarpostinfo">
										' . $post['title'] . '
										</div>
									</div>
								</a>';
								
								//if($a < 3 && $a < $resultcount){echo '<hr>';};
								};
							
							echo '</div>';
							};	
							
						?>
					