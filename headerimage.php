		<?php 
		if (isset($_GET['category']))
		{$category = strtolower($_GET['category']);
		
		if($category=="earth" or $category=="space" or $category=="macro physics" or $category=="life" or $category=="particles" or $category=="human" or $category=="other"){
		echo '<img id="headerimage" src="E/images/'. $category .'.jpg" height="160px" width="800px" style="float: right">';}}
		
		?>