			
			$(document).ready(function(){
			
			
			function preload(arrayOfImages) {
							    $(arrayOfImages).each(function(){
							        $('<img/>')[0].src = this;
							        // Alternatively you could use:
							        // (new Image()).src = this;
							    });
							}
							
							// Usage:
							
							preload([
							    'E/images/lba.png',
							    'E/images/mba.png',
							    'E/images/rba.png',
							    'E/images/subb.png',
							    'E/images/subba.png',
							    'E/images/rma.png',
							    'E/images/sliderpointh.png'
							]);
										
				
				
								
				  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
				  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
				  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
				  })(window,document,'script','//www.google-analytics.com/analytics.js','ge');
				
				  ga('create', 'UA-63009319-1', 'auto');
				  ga('send', 'pageview');
				
							
			(function(d, s, id) {
					  var js, fjs = d.getElementsByTagName(s)[0];
					  if (d.getElementById(id)) return;
					  js = d.createElement(s); js.id = id;
					  js.src = "//connect.facebook.net/ka_GE/sdk.js#xfbml=1&version=v2.3&appId=1378114882513415";
					  fjs.parentNode.insertBefore(js, fjs);
					}(document, 'script', 'facebook-jssdk'));			
			
			  (function(d, s, id) {
						  var js, fjs = d.getElementsByTagName(s)[0];
						  if (d.getElementById(id)) return;
						  js = d.createElement(s); js.id = id;
						  js.src = "//connect.facebook.net/ka_GE/sdk.js#xfbml=1&appId=1378114882513415&version=v2.0";
						  fjs.parentNode.insertBefore(js, fjs);
						}(document, 'script', 'facebook-jssdk'));
						

						
											$('#navmenu li').hover(
					function () {
						$('ul', this).queue(); $('ul', this).slideDown(200);
					},
					function () {
						$('ul', this).stop(true).slideUp(200);
					});
			
			
			});
			
						$(document).ready(function(){
			
						var interval;
						var counter = 1;
						var lastCounter = 0;
				
				$('#sliderpoint'+counter).css({backgroundImage: 'url(E/images/sliderpointa.png)'});
				
				
				$("#slide1").show("fade",800)
				

				var slideNumber = $("#slider img").size();
				
				function startSlider () {interval = setInterval(function(){
											
											$("#slide"+counter).hide("slide",{direction:"left"},800);
											lastCounter = counter;
											if(counter==slideNumber){counter = 1;}
											else{counter = counter+1;}
											$("#slide"+counter).show("slide",{direction:"right"},800);
											$('#sliderpoint'+counter).css({backgroundImage: 'url(E/images/sliderpointa.png)'});
											$('#sliderpoint'+counter).siblings().css({backgroundImage: 'url(E/images/sliderpointp.png)'});
											},6800);}
				
				startSlider();
				function pauseSlider() {clearInterval(interval);}
				
				$(".slide").on("mouseover", pauseSlider).on("mouseleave", startSlider);
				
						$('#arrowleft').click(function() {
							if ($('#slide' + lastCounter).is(":visible")) {
								return;
							}

							
							pauseSlider();
							$('#slide' + counter).hide("slide", { direction: "right" }, 800);
							lastCounter = counter;
							if (counter == 1) {
								counter = slideNumber;
							} else {
								counter = counter - 1;
							}
							$('#slide' + counter).show("slide", { direction: "left" }, 800);
							$('#sliderpoint'+counter).css({backgroundImage: 'url(E/images/sliderpointa.png)'});
							$('#sliderpoint'+counter).siblings().css({backgroundImage: 'url(E/images/sliderpointp.png)'});
							startSlider();
						});

						$('#arrowright').click(function() {
							if ($('#slide' + lastCounter).is(":visible")) {
								return;
							}

							
							pauseSlider();
							$('#slide' + counter).hide("slide", { direction: "left" }, 800);
							lastCounter = counter;
							if (counter == slideNumber) {
								counter = 1;
							} else {
								counter = counter + 1;
							}
							$('#slide' + counter).show("slide", { direction: "right" }, 800);
							$('#sliderpoint'+counter).css({backgroundImage: 'url(E/images/sliderpointa.png)'});
							$('#sliderpoint'+counter).siblings().css({backgroundImage: 'url(E/images/sliderpointp.png)'});
							startSlider();
						});
																
						
						$('.sliderpoint').hover(			

										function pointHover() { var num = parseInt($(this).attr('data-num'));
										if(num != counter) {$(this).css({backgroundImage: 'url(E/images/sliderpointh.png)'})}},
										function () { var num = parseInt($(this).attr('data-num'));
										if(num != counter) {$(this).css({backgroundImage: 'url(E/images/sliderpointp.png)'})}});
					
							
				$('.sliderpoint').on('click', function () { var num = parseInt($(this).attr('data-num'));
															if (counter != num) {
															if ($('#slide' + lastCounter).is(":visible")) {return;}
															pauseSlider();
															$('#slide'+ counter).hide("fade",800);
															lastCounter = counter;
															counter = num;
															$('#slide'+ counter).show("fade",800);
															startSlider();
															$(this).css({backgroundImage: 'url(E/images/sliderpointa.png)'});
															$(this).siblings().css({backgroundImage: 'url(E/images/sliderpointp.png)'});
															}});
				
				});
			