<div id="scripts">
	<!-- facebook -->
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
	</script>
	
	<!-- twitter -->
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
	
	<!-- google-plus -->
	<script type="text/javascript">
	  (function() {
		var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
		po.src = 'https://apis.google.com/js/plusone.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
	  })();
	</script>

	<!-- site scripts -->
	<script src="<?=_UIJS_?>libraries/jquery-1.7.1.min.js"></script>
	<script src="<?=_UIJS_?>libraries/jquery.toolbox.js"></script>
	<script src="<?=_UIJS_?>plugins/jquery.l.js"></script>
	<script src="<?=_UIJS_?>scripts.js"></script>
	
	<!-- linked-in -->
	<script src="//platform.linkedin.com/in.js" type="text/javascript"></script>
</div><!-- #scripts -->