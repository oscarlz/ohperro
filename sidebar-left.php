<div class="sidecont rightsector">
		<div class="sidebar sidebar-right">
            <!--<ul>
                <li style="text-align:center; font-weight: bold;"><a href="http://testdeamorgratis.net/" target="_blank">¡Test de amor!</a></li>
            </ul>
            !-->
            <?php if (function_exists('fpg_show')) {
            $args = array(
                'cat' => '',
                'tag' => 'destacado' /* comma separated list tag slugs to include */);
            echo fpg_show($args);
            }?>

            <?php if (function_exists('fpg_show')) {
            $args = array(
                'cat' => '',
                'tag' => 'destacado2' /* comma separated list tag slugs to include */);
            echo fpg_show($args);
            }?>

            <?php if (function_exists('fpg_show')) {
            $args = array(
                'cat' => '',
                'tag' => 'destacado3' /* comma separated list tag slugs to include */);
            echo fpg_show($args);
            }?>

            <ul>
				<?php
					  if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Right Sidebar') ) : ?>

				<?php endif; ?>
			</ul>
		<?php if(get_theme_option('ad_sidebar2_bottom') != '') {
		?>
		<div class="sidebaradbox">
			<?php echo get_theme_option('ad_sidebar2_bottom'); ?>
		</div>
		<?php
		}
		?>
		</div>
</div>
