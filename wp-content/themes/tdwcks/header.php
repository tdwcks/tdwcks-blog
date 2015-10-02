<!doctype html>
<html <?php language_attributes(); ?> style="overflow-x: hidden" class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title('Tdwcks &#8594;'); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<script src="https://use.typekit.net/nah0djz.js"></script>
		<script>try{Typekit.load({ async: true });}catch(e){}</script>

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>

			<!-- header -->
	<header>

	<div class="layout-container">

		<div class="layout-span-three">

			<h1>Tom Wicks</h1>

		</div>

		<div class="layout-span-six">

			<h2>Thoughts on building digital products and running a company</h2>

		</div>

		<nav class="header-simple-navigation">

			<ul>

				<li class="header-feed header-navigation-active">

					<a id="js-replace-feed">Feed</a>

				</li>

				<li class="header-info">

					<a id="js-replace-about">Info</a>

				</li>

			</ul>

		</nav> <!-- header-simple-navigation -->

	</div> <!-- layout-container -->

</header>
			<!-- /header -->
