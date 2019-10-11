<!--
hey,
this is a template for your own index.php.
you can edit this file and rename it to index.php.
have fun!

cp ~/public_html/your_index_template.php ~/public_html/index.php

YOU CAN REMOVE THIS COMMENT!
-->

<?php $user = posix_getpwuid(fileowner(__FILE__))["name"]; ?>
<!-- HTML HEADER -->
<!DOCTYPE html>
<html>
	<head>
		<title>~<?=$user?> on envs.net</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="author" content="<?=$user?>">
		<meta name="robots" content="noindex">
		<meta name="description" content="~<?=$user?> on envs.net" />
		<meta name="keywords" content="<?=$user?>" />
		<link rel="stylesheet" href="https://envs.net/css/css_style.css" />
		<link rel="stylesheet" href="https://envs.net/css/fork-awesome.min.css" />
		<script src="https://envs.net/js/darklight.js" ></script>
	</head>
<!-- HTML BODY -->
	<body id="body">
		<!-- min-width: needed if the sidebar is enable -->
		<div style="clear:both; /*min-width: 750px;*/">

			<div id="main" style="float: left;">
<pre>
<blockquote>
<?=$user?>

</blockquote>
hi and welcome to my new website.

IRC:   <?=$user?> on tilde.chat
Mail:  <code><?=$user?>&#64;envs.net</code>

</pre>
			</div>

<!-- You can also enable a right sidebar

			<div id="sidebar">
<pre class="sidebar">

more text

</pre>
			</div>

-->

<!-- HTML FOOTER -->
			<!-- Button DarkLight -->
			<div class="button_darklight">
				<button type="button" name="dark_light" onclick="toggleDarkLight()" title="Toggle dark/light mode">🌛</button>
			</div>
		</div>

<script>(function() { setThemeFromCookie() })();</script>

	</body>
</html>
