<div id="slider">
							<div id="arrowleft" class="slidernav"></div>
							<div id="arrowright" class="slidernav"></div>
							<div id="sliderpointwrapper" class="slidernav">
								<div id="sliderpoint1" data-num="1" class="sliderpoint"></div>
								<div id="sliderpoint2" data-num="2" class="sliderpoint"></div>
								<div id="sliderpoint3" data-num="3" class="sliderpoint"></div>
								<div id="sliderpoint4" data-num="4" class="sliderpoint"></div>
							</div>
							
							
							<?php 
							
							include("../../connection.php");
							
							
							
							$query1 = 'SELECT title, main_image, id_num FROM posts WHERE in_slider != "NULL" ORDER BY in_slider';
							
							
						
							$result1 = $conn ->query($query1);
							
														
							$zz = 1;
							
							while($post = mysqli_fetch_array($result1)) {
							echo   '<a href = "post.php?id=' . $post['id_num'] . '">
									<div class="slide" id="slide' . $zz++ . '" > 
										<img src="post main images/' . $post['main_image'] . '"> 
										<div class = "slideinfo" >
										<div class = "slidetitle">' . $post['title'] . '</div>
										</div>
									</div>
								</a>';}
							
								
							mysqli_close($conn);

			
			
			
							?>
							

						</div>