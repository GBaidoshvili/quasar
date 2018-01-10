		<?php 
		if (isset($_GET['category']))
		{$category = strtolower($_GET['category']);}
		
		echo '<img id="headerimage" src="E/images/'. $category .'.jpg" height="160px" width="800px" style="float: right">';
		
		echo $category;
		?>