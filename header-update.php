<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Chiaki Soejima</title>

<link href="css/chiakistyle-update.css" rel="stylesheet" type="text/css" />
<link href="css/chiakistyle_gen.css" rel="stylesheet" type="text/css" />
<link href="css/mobile.css" media="screen and (max-device-width: 640px)" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/jquery.fullPage.css" />
<link rel="stylesheet" type="text/css" href="shadowbox-3.0.3/shadowbox.css">

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/jquery.fullPage.min.js" type="text/javascript"></script>
<script src="js/jquery.lazyload.js" type="text/javascript"></script>
<script src="shadowbox-3.0.3/shadowbox.js" type="text/javascript"></script>
<!-- <script src="js/jquery.mosaicflow.min.js"></script> -->

<script type="text/javascript">
	$(document).ready(function() {
		$('#fullpage').fullpage({
			anchors: ['top', 'about', 'portfolio', 'contact'],
			menu: '#menu',
			css3: true,
			autoScrolling: false,
			scrollingSpeed: 600,
			keyboardScrolling: false,
			resize: false,
		});
		$("img.lazy").lazyload({
			effect: 'fadeIn',
		});
	});
	Shadowbox.init({
		continuous: true,
		animate: false,
	});
</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-59402244-1', 'auto');
  ga('send', 'pageview');

</script>

</head>

<body>