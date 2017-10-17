<?php
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();

?>




<!DOCTYPE html>
<html>
<head>
<?$APPLICATION->ShowHead();?>
<link rel="profile" href="http://gmpg.org/xfn/11">
<title><?$APPLICATION->ShowTitle();?></title>
<link rel='stylesheet' id='font-awesome-css'  href='<?=SITE_TEMPLATE_PATH?>/assets/css/font-awesome.min.css' type='text/css' media='all' />
<script type='text/javascript' src='<?=SITE_TEMPLATE_PATH?>/assets/js/jquery/skip-link-focus-fix.js'></script>
<script type='text/javascript' src='<?=SITE_TEMPLATE_PATH?>/assets/js/jquery/navigation.js'></script>
<script type='text/javascript' src='<?=SITE_TEMPLATE_PATH?>/assets/js/jquery/customizer.js'></script>
</head>

<body>
    <div id="panel">
			<?$APPLICATION->ShowPanel();?>
    </div>
<div id="page" class="site">

	<header id="masthead" class="site-header" role="banner">
		<div class="container">

			<div class="site-branding">

				
				<div class="site-logo">
					
				</div>

					<h1 class="site-title"><a href="" rel="home"><?$APPLICATION->ShowTitle();?></a></h1>
				
					<p class="site-description">Just another WPStash Sites site</p>
				

			</div><!-- .site-branding -->

			<div class="social-menu">
				<div id="menu-social" class="social-links"><ul id="menu-social" class="menu"><li id="menu-item-9" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-9"><a href="https://www.facebook.com/"><span class="screen-reader-text">facebook</span></a></li>
<li id="menu-item-10" ><a href="http://twitter.com/"><span class="screen-reader-text">twitter</span></a></li>
<li id="menu-item-11" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-11"><a href="https://plus.google.com/u/0/"><span class="screen-reader-text">google plus</span></a></li>
<li id="menu-item-12" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-12"><a href="https://www.linkedin.com"><span class="screen-reader-text">linkedin</span></a></li>
<li id="menu-item-61" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-61"><a href="http://youtube.com"><span class="screen-reader-text">Youtube</span></a></li>
<li id="menu-item-62" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-62"><a href="https://www.pinterest.com/"><span class="screen-reader-text">Pinterest</span></a></li>
</ul></div>			</div>

		</div>

	</header><!-- #masthead -->

	<nav id="site-navigation" class="main-navigation" role="navigation">
		<div class="container">

			<button class="menu-toggle" aria-controls="top-menu" aria-expanded="false"><?/*php esc_html_e( 'Menu', 'fashify' ); */?>Menu</button>
			
			<?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"topmenu", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "top",
		"USE_EXT" => "N",
		"COMPONENT_TEMPLATE" => "topmenu"
	),
	false
);?>
			<?/*php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); */?>


		</div>
	</nav><!-- #site-navigation -->

	<div id="content" class="site-content">
