<?php 
							
							include("../../connection.php");
							
							$id = $_GET['id'];
							
							$category = mysqli_fetch_array($conn->query('SELECT category FROM posts WHERE id_num ="' . $id . '"'))[0];
								
							
							$resultcount = mysqli_fetch_array($conn->query('SELECT COUNT(id_num) FROM posts WHERE category = "'. $category .'" AND id_num != ' . $id))[0];
							
							$query1 = 'SELECT title, id_num, main_image FROM posts WHERE category = "'. $category .'" AND id_num != ' . $id . ' ORDER BY RAND() LIMIT 3';
						
							$result1 = $conn->query($query1);
							
							mysqli_close($conn);
							
							if($resultcount != 0)
							
							{
							echo '<div id="similarposts">';
							
							$a=0;
							
							while($post = mysqli_fetch_array($result1)) {
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
					