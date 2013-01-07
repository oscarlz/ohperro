<?php get_header(); ?>
<div id="fb-root"></div>
		<div class="outer" id="contentwrap">
			<div class="postcont">
				<div id="content">		
                <?php if(is_home()) { include (TEMPLATEPATH . '/featured.php'); } ?>
					<?php if (have_posts()) : ?>	
						<?php while (have_posts()) : the_post(); ?>
						
						<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
							<h2 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
							<div class="postdate"><img src="<?php bloginfo('template_url'); ?>/images/date.png" /> <?php the_time('F jS, Y') ?> | Por <?php c2c_the_author_image(); ?><?php if (current_user_can('edit_post', $post->ID)) { ?> <img src="<?php bloginfo('template_url'); ?>/images/edit.png" /> <?php edit_post_link('Edit', '', ''); } ?></div>
			
							<div class="entry">
                                <?php if ( function_exists("has_post_thumbnail") && has_post_thumbnail() ) { the_post_thumbnail(array(200,160), array("class" => "alignleft post_thumbnail")); } ?>
								<?php the_excerpt(); ?>
                                <div class="readmorecontent">
									<a class="readmore" href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">Seguir leyendo &raquo;</a>
								</div>
							</div>
						</div><!--/post-<?php the_ID(); ?>-->
				
				<?php endwhile; ?>
				<div align="center">
                    <?php if(function_exists('wp_paginate')) {
                        wp_paginate();
                    } ?>
				</div>
				<?php else : ?>
					<h2 class="center">Not Found</h2>
					<p class="center">Sorry, but you are looking for something that isn't here.</p>
					<?php get_search_form(); ?>
			
				<?php endif; ?>
				</div>
			</div>
		<?php get_sidebars('right'); ?>
        <?php get_sidebars('left'); ?>
	</div>
<?php get_footer(); ?>
