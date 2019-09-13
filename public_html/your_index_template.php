<!--
hey,
this is a template for your own index.php.
you can edit this file and rename it to index.php.
have fun!

cp ~/public_html/your_index_template.php ~/public_html/index.php

YOU CAN REMOVE THIS COMMENT!
-->
<?php $user = posix_getpwuid(fileowner(__FILE__))["name"]; ?>
<!DOCTYPE html>
<html>
	<head>
		<title>~<?=$user?> on envs.net</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="author" content="<?=$user?>">
		<meta name="robots" content="noindex">
		<meta name="description" content="envs.net | ~<?=$user?>" />
		<meta name="keywords" content="<?=$user?>" />
		<link rel="stylesheet" href="https://envs.net/css/css_style.css" />
		<script src="https://envs.net/js/darklight.js" ></script>
	</head>
	<body id="body">
		<div style="clear:both; min-width: 650px;">

			<div style="float: left;">
<pre>
<blockquote>
<?=$user?>

</blockquote>
IRC:   <?=$user?> on tilde
Mail:  <code><?=$user?>&#64;envs.net</code>

</pre>
			</div>

<!-- Button DarkLight-->
			<div class="button_darklight">
				<button type="button" name="dark_light" onclick="toggleDarkLight()" title="Toggle dark/light mode">🌛</button>
			</div>
		</div>

<script>(function() { setThemeFromCookie() })();</script>

	</body>
</html>
