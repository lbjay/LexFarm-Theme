<!DOCTYPE html>
<html lang="en">
<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php wp_head(); ?>
	<!--[if lte IE 7]><style type="text/css">.header ul { margin-bottom: -30px; }</style><![endif]-->
</head>
<body>
<div class="inbody">
    <!--
	<div class="header_menu">
		<div class="wrap">
			<div class="alignleft">
                <ul>
				<li class="page_item<?php if (is_home() || is_single()) {echo ' current_page_item';} ?>"><a href="<?php bloginfo('url'); ?>">Home</a></li>
				<?php wp_list_pages('meta_key=header_menu&meta_value=1&title_li=&depth=1'); ?>
                <li class="page_item"><a href="/category/events">Calendar</a></li>
                </ul>
			</div>
			<form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
			<div class="alignright">
				<input type="text" class="textinput" value="<?php echo wp_specialchars(stripslashes($_GET['s']), true) ?>" name="s" id="s"></input>
				<input type="submit" class="submitinput" value="<?php _e('Search'); ?>"></input>
			</div>
			</form>
			<span class="clear"></span>
		</div>
	</div>
    -->
    <div class="wrap logo">
        <!--a href="<?php bloginfo('url'); ?>"><img id="logo" width="900" src="<?php bloginfo('template_url'); ?>/images/LexFarm_website_HEADER_v1_08-10.jpg"/></a-->
        
        <div class="header">
        <!--
			<h1><a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a></h1>
			<p><?php bloginfo('description'); ?></p>
        -->
			<ul>
				<li class="page_item<?php if (is_home() || is_single()) {echo ' current_page_item';} ?>"><a href="<?php bloginfo('url'); ?>">Home</a></li>
				<?php wp_list_pages('meta_key=main_menu&meta_value=1&sort_column=menu_order&title_li=&depth=1'); ?>
                <li class="page_item"><a href="/category/events">Calendar</a></li>
			</ul>
			<div class="clear"></div>
        </div>
            
    </div>
    <div class="content">
            
