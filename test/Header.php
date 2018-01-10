		<div id="body">
		
				<div id="fb-root"></div>
				
				
			<div id="pagewrapper">
				<div id="header">
					<a id="logo" href="index.php">
						<img src="E/images/logo.png" height="150px" width="142px">
					</a>
					
					<?php include("headerimage.php") ?>
					
					
				</div>																					
			
				<div id="navigation">
					<ul id="navmenu">
						<li id="button1" class="mainbuttonleft"><a href="index.php" class="mainbutton">მთავარი</a></li>
						<li id="button2" class="mainbuttonmid"><a href="category.php?category=news" class="mainbutton">სიახლეები</a></li>	
						<li id="button3" class="mainbuttonmid"><a href="" class="mainbutton">კატეგორიები</a>
							<ul class="submenu" id="submenu3">
								<li id="subb3.3"><a href="category.php?category=Earth" class="subbutton">დედამიწა</a></li>
								<li id="subb3.3"><a href="category.php?category=Space" class="subbutton">კოსმოსი</a></li>
								<li id="subb3.1"><a href="category.php?category=Macro Physics" class="subbutton">მაკროსკოპული ფიზიკა</a></li>
								<li id="subb3.2"><a href="category.php?category=Particles" class="subbutton"><font face="arial">ნაწილაკები</font></a></li>
								<li id="subb3.3"><a href="category.php?category=Life" class="subbutton">სიცოცხლე</a></li>
								<li id="subb3.3"><a href="category.php?category=Human" class="subbutton">ადამიანი</a></li>
								<li id="subb3.3"><a href="category.php?category=Other" class="subbutton">სხვადასხვა</a></li>

							</ul>
						</li>
						<li id="button4" class="mainbuttonmid"><a href="Contact.php" class="mainbutton">კონტაქტი</a></li>
						<li id="button5" class="mainbuttonright"><a href="About.php" class="mainbutton">ჩვენ შესახებ</a></li>
					</ul>
				</div>
									
				<div id="page">
				<div id="sidekick">
				
				<div id="search">
				
					<form action="search.php" method="get">
						
						<input type="text" name="keywords" size="20" value='<?php  echo $keywordsfiltered; ?>'>
						<input type="submit" value="ძებნა">
						
						
					
					</form>
					
				
				
				</div>
				
				
				<div class="fb-like-box" data-href="https://www.facebook.com/Quasar.ge" data-width="222px" data-height="70px" data-colorscheme="light" data-show-faces="false" data-header="true" data-stream="false" data-show-border="true">
				</div>
				
				<?php include("recposts.php")?>
				
					<div id="top">
						<!-- TOP.GE COUNTER CODE -->
						<script language="JavaScript" type="text/javascript" src="//counter.top.ge/cgi-bin/cod?100+100301"></script>
						<noscript>
						<a target="_top" href="http://counter.top.ge/cgi-bin/showtop?100301">
						<img src="//counter.top.ge/cgi-bin/count?ID:100301+JS:false" border="0" alt="TOP.GE" /></a>
						</noscript>
						<!-- / END OF TOP.GE COUNTER CODE -->
					</div>
					
				
				
				
				</div>
				<div id="mainpage">
				
				