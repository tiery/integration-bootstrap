<!doctype html>
<!--[if lte IE 7]> <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="no-js ie8" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" lang="en"><!--<![endif]-->
<head>
    <!-- Encoding first! -->
    <meta charset="utf-8">

    <!-- Metas SEO & others -->
    <title><?=$templateName?> - <?=_SITENAME_?></title>
    <meta name="title" content="<?=$templateName?> - INSEAD Knowledge">
    <meta name="description" content="<?=$templateName?> - INSEAD Knowledge">
    <meta name="robots" content="index,follow">
    <link rel="prev" href="">
    <link rel="next" href="">

    <!-- Icons -->
    <link rel="shortcut icon" href="<?=_UIIMG_?>favicon.ico">
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
    <link rel="stylesheet" href="<?=_UICSS_?>colorbox.css">
	
    <!-- Mobile -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="cleartype" content="on">
	
    <!-- Facebook & Open Graph -->
    <meta property="fb:admins" content="">
    <meta property="fb:page_id" content="">
    <meta property="fb:app_id" content="">
    <meta property="og:type" content="article">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:image" content="">
    <meta property="og:url"  content=""> 
    <meta property="og:site_name" content="">
    <link rel="image_src" href="http://720plan.ovh.net/~inseadpoq/knowledge2/knowledgevideo/preview/237617.jpg">
    <?php if ($templateName == 'Video') : ?>
    <link rel="video_src" href="http://www.youtube.com/embed/rVqLCVC4kkE">
    <?php endif; ?>
    
    <!-- Divers -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
</head>
<body>
<input type="checkbox" id="mobile-menu-checkbox" class="input-styles">
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