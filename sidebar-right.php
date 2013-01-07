<div class="sidecont">
		<div class="sidebar sidebar-left">
		<?php if(get_theme_option('ad_sidebar1_bottom') != '') { ?>
		<div class="sidebaradbox">
			<?php echo get_theme_option('ad_sidebar1_bottom'); ?>
		</div>
		<?php } ?>
			<ul>
            <?php
                if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Left Sidebar') ) : ?>

            <?php endif; ?>
			</ul>
            <?php if (function_exists('fpg_show')) {
            $args = array(
                'cat' => '',
                'tag' => 'destacado4' /* comma separated list tag slugs to include */);
            echo fpg_show($args);
            }?>
            
            <?php if (function_exists('fpg_show')) {
                $args = array(
                'cat' => '',
                'tag' => 'destacado5' /* comma separated list tag slugs to include */);
            echo fpg_show($args);
            }?>	
		</div>
</div>