				<?php		$result = $conn ->query($query);
				
				
						
						mysqli_close($conn);
						
						$paginationControls = '';
						
						if ( $pageCount != 1) {
						
							if ($currentPage > 1) { $previous = $currentPage - 1;
										$paginationControls .= '<a class ="pagebuttonp" href="' . $_SERVER['PHP_SELF'] . '?' . 'category=' . $category . '&' . 'pn=' . 1 . '">' . '<<' . '</a> &nbsp; &nbsp';
										$paginationControls .= '<a class ="pagebuttonp" href="' . $_SERVER['PHP_SELF'] . '?' . 'category=' . $category . '&' . 'pn=' . $previous . '">' . '<' . '</a> &nbsp; &nbsp';}
										
										
							for ($i = $currentPage - 4; $i < $currentPage; $i++){
									if($i > 0) {
									
									$paginationControls .= '<a class ="pagebuttonp" href="' . $_SERVER['PHP_SELF'] . '?' . 'category=' . $category . '&' . 'pn=' . $i . '">' . $i . '</a> &nbsp; &nbsp';};
									};
									
							$paginationControls .= '<a class ="pagebuttona">' . $currentPage .'</a> &nbsp; &nbsp';
							
							
							for ($i = $currentPage + 1; $i <= $pageCount; $i++){
									
									
									$paginationControls .= '<a class ="pagebuttonp" href="' . $_SERVER['PHP_SELF'] . '?' . 'category=' . $category . '&' . 'pn=' . $i . '">' . $i . '</a> &nbsp; &nbsp';
									if ($i == $currentPage + 4) {break;}
									};
									
							
							if ($currentPage < $pageCount) { $next = $currentPage + 1;
										$paginationControls .= '<a class ="pagebuttonp" href="' . $_SERVER['PHP_SELF'] . '?' . 'category=' . $category . '&' . 'pn=' . $next . '">' . '>' . '</a> &nbsp; &nbsp';		
										$paginationControls .= '<a class ="pagebuttonp" href="' . $_SERVER['PHP_SELF'] . '?' . 'category=' . $category . '&' . 'pn=' . $pageCount . '">' . '>>' . '</a> &nbsp; &nbsp';};
							};
							
						while($post = mysqli_fetch_array($result))
						{
						echo	'<div class="postouter">
							<div class="postouterheader">
								<div class="posttitle">
								<a href=post.php?id=' . $post['id_num'] . '>' . $post['title'] . '</a>
								</div>
								<div class="postdate">
								' . $post ["posting_date_and_time"] . '
								</div>
							</div>
							
							<div class="postoutermain">
								<a href=post.php?id=' . $post['id_num'] . '>
								<div class="postouterimage">
									<img class = "postmainimage" src="post main images/' . $post['main_image'] . '">
								</div>
								</a>
								<div class="postoutertext">
								' . $post['post_outer_text'] . '
								</div>
							</div>
							
							<div class="postouterfooter">

					<a class="share" target="_blank" rel="nofollow" href="http://www.facebook.com/sharer.php?u=http://quasar.ge/post.php?id=' . $post['id_num'] . '" title="FaceBook" 		
                                    	onclick="window.open(this.href,\'FaceBook\',\'status=no,toolbar=no,scrollbars=yes,titlebar=no,menubar=no,resizable=yes,width=700,height=480,directories=no,location=no\'); return false;">
                                    </a>
									
									
								<a class="readmore" href=post.php?id=' . $post['id_num'] . '>
								მეტი
								</a>
							</div>
						</div>
						<div id="fb-root"></div>'
						;


						
						
						} ?>
	
			
						<?php
						
						if ($paginationControls != '')
						{
						 echo '<div id="pagination">' . $paginationControls . '</div>';
						}
						 
						 ?>
						