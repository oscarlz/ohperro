<?php get_header(); $i=0; ?>
<div class="outer" id="contentwrap">
	<div class="postcont">
		<div id="content">

	<?php if (have_posts()) : ?>

		<h2 class="pagetitle">Resultados de la busqueda </h2>

		<?php while (have_posts()) : the_post(); $i++;?>

			<div <?php post_class('post') ?>>
			
                <?php if($i == 1){ ?>
						<div align="center">
							<script type="text/javascript"><!--
							google_ad_client = "ca-pub-4342568147424167";
							/* MC - search */
							google_ad_slot = "4990127662";
							google_ad_width = 336;
							google_ad_height = 280;
							//-->
							</script>
							<script type="text/javascript"
							src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
							</script>
						</div>
				<?php } ?>
			    
                <h2 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				<div class="postdate"><img src="<?php bloginfo('template_url'); ?>/images/date.png" /> <?php the_time('j F, Y') ?>  | Por <?php c2c_the_author_image(); ?><?php if (current_user_can('edit_post', $post->ID)) { ?> <img src="<?php bloginfo('template_url'); ?>/images/edit.png" /> <?php edit_post_link('Edit', '', ''); } ?></div>
				<div class="entry">
                    <?php if(!in_category('Fotos de perros') && !in_category('Fotos de perros cachorros')){ if ( function_exists("has_post_thumbnail") && has_post_thumbnail() ) { the_post_thumbnail(array(200,160), array("class" => "alignleft post_thumbnail")); } }?>
					<?php the_excerpt() ?>
                    <div class="readmorecontent">
						<a class="readmore" href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">Seguir leyendo &raquo;</a>
					</div>
				</div>
        	</div>

		<?php endwhile; ?>

        <div align="center">
			<br>
			<script type="text/javascript"><!--
			google_ad_client = "ca-pub-4342568147424167";
			/* MC - search */
			google_ad_slot = "4990127662";
			google_ad_width = 336;
			google_ad_height = 280;
			//-->
			</script>
			<script type="text/javascript"
			src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
			</script>		
            <?php if(function_exists('wp_paginate')) {
                wp_paginate();
            } ?>
        </div>

	<?php else : ?>

		<h2 class="pagetitle">No se encontraron posts</h2>
		<?php //get_search_form(); ?>

	<?php endif; ?>

		</div>
	</div>

<?php get_sidebars('right'); ?>
<?php get_sidebars('left'); ?>
</div>
<?php get_footer(); ?>