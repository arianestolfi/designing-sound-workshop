<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File: 			template.php
* @Package:		GetSimple
* @Action:		Sound on Clound workshop CMS
*
*****************************************************/
?>
<!DOCTYPE html>
<html>
<head>

	<!-- Site Title -->
	<title><?php get_page_clean_title(); ?> &lt; <?php get_site_name(); ?></title>
	<?php get_header(); ?>
	<meta name="robots" content="index, follow" />
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="<?php get_theme_url(); ?>/style.css" media="all" />
	 <link href="https://fonts.googleapis.com/css?family=Signika" rel="stylesheet"> 
	<style>
		#header {background:url('<?php get_theme_url(); ?>/images/banner_960.png')}
		.logo2 {visibility: hidden;}
	</style>

</head>
<body id="<?php get_page_slug(); ?>" >

<div id="wrapper">

	<div id="header">
		

		
		<div class="sitename"><span class="logo2"><?php get_site_name(); ?></span>
		<!--<a class="logo" href="<php get_site_url(); >"><?php get_site_name(); ?></a>--></div>


	</div><!-- end header -->
	
	<div id="sidebar">
		<ul id="nav">
			<?php get_navigation(return_page_slug()); ?>

		</ul>


		<div class="section">
			<?php get_component('sidebar');	?>
		</div>
		<div class="section credits">
		
		</div>
	</div>
	
	<div id="content">
		<h1><?php get_page_title(); ?></h1>	
			<div id="page-content">
				<div class="page-text">
					<?php get_page_content(); ?>
					<p class="page-meta"><span><?php get_page_date('F jS, Y'); ?></span></p>
				</div>
			</div>
	</div>	
		
	
	
	<div class="clear"></div>

<div id="footer"><?php get_footer(); ?>
<div class="credits"><a href="http://audiomostly.com/">Audio Mostly 2017 Workshop </a>| site developed by <a href="http://ariane.stolfi.org">ariane stolfi</a> with <a href="http://get-simple.info/">get simple cms</a></div>
</div>	
	
	

	
</div><!-- end wrapper -->
</body>
</html>
