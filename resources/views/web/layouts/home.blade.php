<!DOCTYPE html>
<html lang="zxx">

	<head>
		<title>Prueba 1</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="utf-8">
		<meta name="keywords" content="Weblog a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
		Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

		<script>
			addEventListener("load", function () {
				setTimeout(hideURLbar, 0);
			}, false);

			function hideURLbar() {
				window.scrollTo(0, 1);
			}
		</script>
		<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
		<link rel="stylesheet" href="css/single.css">
		<link href="css/style.css" rel='stylesheet' type='text/css' />
		<link href="css/fontawesome-all.css" rel="stylesheet">
		<link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
			rel="stylesheet">
		<link href="//fonts.googleapis.com/css?family=Signika:400,600,700&display=swap" rel="stylesheet">
		<link href="//fonts.googleapis.com/css?family=Baloo&display=swap" rel="stylesheet">	<body>
		<header>
			<section class="">
				@include('web.partials.navbar')
			</section>
		
			
		</header>
		<body>
			<section class="main-content-agileits">
				@yield('content')	
			</section>
				
		</body>
		<footer>
			@include('web.partials.footer')
		</footer>
		
		
		<!-- js -->
		<script src="js/jquery-2.2.3.min.js"></script>
		<!-- //js -->
		<!--/ start-smoth-scrolling -->
		<script src="js/move-top.js"></script>
		<script src="js/easing.js"></script>
		<script>
			jQuery(document).ready(function ($) {
				$(".scroll").click(function (event) {
					event.preventDefault();
					$('html,body').animate({
						scrollTop: $(this.hash).offset().top
					}, 900);
				});
			});
		</script>
		<!--// end-smoth-scrolling -->

		<script>
			$(document).ready(function () {
				/*
										var defaults = {
											containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear' 
										};
										*/

				$().UItoTop({
					easingType: 'easeOutQuart'
				});

			});
		</script>
		<a href="#home" class="scroll" id="toTop" style="display: block;">
			<span id="toTopHover" style="opacity: 1;"> </span>
		</a>

		<!-- //Custom-JavaScript-File-Links -->
		<script src="js/bootstrap.js"></script>


	</body>

</html>
		
	