<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><?php function theme_footer_t() { if (!(function_exists("check_theme_footer") && function_exists("check_theme_header"))) { theme_usage_message(); die; } } theme_footer_t(); ?>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' |'; } ?> <?php bloginfo('name'); ?></title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/screen.css" type="text/css" media="screen, projection" />
<!--[if IE]><link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/ie.css" type="text/css" media="screen, projection"><![endif]-->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<?php if(get_theme_option('featured_posts') != '' && is_home()) {
?>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/jdgallery/jd.gallery.css" type="text/css" media="screen" charset="utf-8" />
<?php } ?>
<!--[if IE 6]>
	<script src="<?php bloginfo('template_url'); ?>/js/pngfix.js"></script>
<![endif]--> 
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php echo get_theme_option("head") . "\n"; function functions_file_exists() { if (!file_exists(dirname(__file__) . "/functions.php") || !function_exists("theme_usage_message") ) { echo ("<p style=\"padding:10px; margin: 10px; text-align:center; border: 2px dashed Red; font-family:arial; font-weight:bold; background: #fff; color: #000;\">This theme is released free for use under creative commons licence. All links in the footer should remain intact. These links are all family friendly and will not hurt your site in any way. This great theme is brought to you for free by these supporters.</p>"); die; } } functions_file_exists(); wp_head(); ?>
</head>
<body>
	<div id="wrapper">
		<div id="outer-wrapper" class="outer-wrapper">  
            <div class="outer">
				<div class="menu-links">
					<div id="pagemenucontainer">
						<?php
                    if(function_exists('wp_nav_menu')) {
                        wp_nav_menu( 'depth=1&theme_location=menu_1&menu_id=pagemenu&container=&fallback_cb=menu_1_default');
                    } else {
                        menu_1_default();
                    }
                    
                    function menu_1_default()
                    {
                        ?>
                        <ul id="pagemenu">
    						<li <?php if(is_home()) { ?> class="current_page_item" <?php } ?>><a href="<?php echo get_option('home'); ?>/">Home</a></li>
    						<?php wp_list_pages('depth=1&sort_column=menu_order&title_li=' ); ?>
    					</ul>
                        <?php
                    }
                    
                ?>
					</div>
				</div>
                
                <div class="twit-rss rightsectorsearch">
                    <div class="feedtwitter">
                        <a href="https://plus.google.com/116451927729708782529/posts" target="_blank"><img width="24" height="24" src="<?php bloginfo('template_url'); ?>/images/googleplus.png"  style="margin:0 4px 0 0;" alt="¡Síguens en Google+!" title="¡Síguens en Google+!" /></a>
    					<a href="http://feeds.feedburner.com/Mundoconsejoscom" rel="nofollow" target="_blank"><img width="24" height="24" src="<?php bloginfo('template_url'); ?>/images/rss.png"  style="margin:0 4px 0 0;" alt="¡Únete a nuestros lectores!" title="¡Únete a nuestros lectores!" /></a>		<?php if(get_theme_option('facebook') != '') { ?><a href="<?php echo get_theme_option('facebook'); ?>" title="<?php echo get_theme_option('facebooktext'); ?>" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/facebook.png" width="24" height="24"  style="margin:0 4px 0 0; " title="<?php echo get_theme_option('facebooktext'); ?>" alt="<?php echo get_theme_option('facebooktext'); ?>" /></a><?php } ?>
    					<?php if(get_theme_option('twitter') != '') { ?><a href="<?php echo get_theme_option('twitter'); ?>" title="<?php echo get_theme_option('twittertext'); ?>" target="_blank"><img width="24" height="24" src="<?php bloginfo('template_url'); ?>/images/twitter.png"  style="margin:0 4px 0 0; "  title="<?php echo get_theme_option('twittertext'); ?>" alt="<?php echo get_theme_option('twittertext'); ?>" /></a><?php } ?>

				    </div>
    <div id="topsearch" > 
    		<?php get_search_form(); ?> 
    	</div>
                </div>
			</div>
            
				<div id="header">
					<div class="header-part">
						<?php
						$get_logo_image = get_theme_option('logo');
						if($get_logo_image != '') {
							?>
							<a href="<?php bloginfo('url'); ?>"><img src="<?php echo $get_logo_image; ?>" alt="<?php bloginfo('name'); ?>" title="<?php bloginfo('name'); ?>" class="logoimg" width="280" height="39"/></a>
							<?php
						} else {
							?>
							<h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
							<h2><?php bloginfo('description'); ?></h2>
							<?php
						}
						?>
						
					</div>
					
					<div class="header-part rightsector"> <?php echo get_theme_option('ad_header'); ?>
					 
					</div>
				</div>
			
			<div class="outer">
				<div style="margin-top: 9px;" class="menu-header">
                    <?php wp_nav_menu( array(  'menu' => 'Menu Principal' )); ?>
				</div>
			</div>