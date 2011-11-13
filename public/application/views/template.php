<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8" />
	
	<!-- Set the viewport width to device width for mobile -->
	<meta name="viewport" content="width=device-width" />
	
	<title>Rutame</title>
  
	<!-- Included CSS Files -->
	<link rel="stylesheet" href="/foundation/stylesheets/foundation.css">
	<link rel="stylesheet" href="/foundation/stylesheets/app.css">
	<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.7.min.js"></script>

	<!--[if lt IE 9]>
		<link rel="stylesheet" href="stylesheets/ie.css">
	<![endif]-->

	
	<!-- IE Fix for HTML5 Tags -->
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

</head>
<body>

	<!-- container -->
	<div class="container">
		<header>
			<div class="row">
				<div class="eight columns centered">
				<br />
					<img src='/images/enrutame-logo.png' style="height:100px;" class='show-on-phones'/>
					<img src='/images/enrutame-logo.png' style="height:200px;" class='hide-on-phones'/>
				</div>
			</div>
		</header>
		<section>
			<?php echo $contents; ?>
		</section>
	</div>
	<!-- container -->
	
	


	<!-- Included JS Files -->
	<script src="/foundation/javascripts/foundation.js"></script>
	<script src="/foundation/javascripts/app.js"></script>
</body>
</html>
