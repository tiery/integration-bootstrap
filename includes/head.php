<!doctype html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
	<!-- Encoding -->
	<meta charset="utf-8">

	<!-- SEO -->
	<title><?=$templateName?> - <?=_SITENAME_?></title>
	<meta name="title" content="<?=$templateName?> - <?=_SITENAME_?>">
	<meta name="description" content="<?=$templateName?> - <?=_SITENAME_?>">
	<meta name="robots" content="index,follow">
	<link rel="prev" href="">
	<link rel="next" href="">
	
	<!-- Script bootstrap -->
	<script type="text/javascript">
	(function(ua,h,c) {
		// no/js snippet
		h[c] = h[c].replace('no-', '');
		// OS sniffing	
		var os = ['windows','macintosh','linux'];
		for (var i=0, l=os.length; i<l; i++) {
			if(new RegExp(os[i]).test(ua)){ h[c] += ' ' + os[i].substr(0,3); }
		}
	})(navigator.userAgent.toLowerCase(), document.documentElement, 'className');
	
	// Google Analytics
	var _gaq = [['_setAccount', 'XXXXXXX'], ['_trackPageview']];
	(function(d,sEl) {
		var ga = d.createElement(sEl); ga.async = true;
		ga.src = ('https:' == d.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		//var s = d.getElementsByTagName(sEl)[0]; s.parentNode.insertBefore(ga, s);
	})(document,'script');
	</script>
	
	<!-- Media files -->
	<!--[if lt IE 9]><script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<link rel="stylesheet" href="<?=_UICSS_?>0_reset.css">
	<link rel="stylesheet" href="<?=_UICSS_?>1_basic.css">
	<link rel="stylesheet" href="<?=_UICSS_?>2_modules.css">
	<link rel="stylesheet" href="<?=_UICSS_?>3_medias.css">
	<link rel="stylesheet" href="<?=_UICSS_?>4_print.css" media="print">
	
	<!-- Icons -->
	<link rel="shortcut icon" href="<?=_UIIMG_?>favicon.ico">
	
	<!-- Mobile -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv="cleartype" content="on">
	
	<!-- Latest IE rendering engine (or Chrome Frame) -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
	<!-- Social -->
	<meta property="fb:admins" content="">
	<meta property="fb:page_id" content="">
	<meta property="fb:app_id" content="">
	<meta property="og:type" content="">
	<meta property="og:title" content="">
	<meta property="og:description" content="">
	<meta property="og:image" content="">
	<meta property="og:url" content=""> 
	<meta property="og:site_name" content="">
	<link rel="image_src" href="">
	<link rel="video_src" href="">
</head>

<body>
<div class="site">
	<div class="site-topbar">
		<div class="trunk">
		</div>
	</div><!-- site-topbar -->
	
	<header class="site-header">
		<div class="trunk">
		</div>
	</header><!-- site-header -->
	
	<nav class="site-nav" role="navigation">
		<div class="trunk">
			<?php include_once(_ROOT_ . 'includes/navigation.php'); ?>
		</div>
	</nav><!-- site-nav -->
	
	<div class="site-body">
		<div class="trunk">