<?php get_header(); $i = 0; ?>
<div id="fb-root"></div>
		<div class="outer" id="contentwrap">
			<div class="postcont">
				<div id="content">		
                <?php if(is_home()) { include (TEMPLATEPATH . '/featured.php'); } ?>
					<?php if (have_posts()) : ?>	
						<?php while (have_posts()) : the_post(); $i++;?>
						
						<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
                            <?php
                            if($i == 4){
                                ?>
                            <br>
                            <div align="center">
								<script type="text/javascript"><!--
								google_ad_client = "ca-pub-4342568147424167";
								/* OhPerro - banner en listado (medium) */
								google_ad_slot = "9878449757";
								google_ad_width = 300;
								google_ad_height = 250;
								//-->
								</script>
								<script type="text/javascript"
								src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
								</script>
                            </div>
                                <?php
                            }
                                $hTag = 'h2';
                                if( stristr(the_title(' ', ' ', false), 'Ohperro: razas de perros, fotos de perros') == true ) { $hTag = 'h1'; } ?>
                            <?php echo "<$hTag class=\"title\">"; ?><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a><?php echo "</$hTag>"; ?>
							<div class="postdate"><img src="<?php bloginfo('template_url'); ?>/images/date.png" width="16" height="16"/> <?php the_time('j F, Y') ?> | Por <?php c2c_the_author_image(); ?><?php if (current_user_can('edit_post', $post->ID)) { ?> <img src="<?php bloginfo('template_url'); ?>/images/edit.png" /> <?php edit_post_link('Edit', '', ''); } ?></div>
			
							<div class="entry">
                                <?php if(!in_category('Fotos de perros') && !in_category('Fotos de perros cachorros')){ if ( function_exists("has_post_thumbnail") && has_post_thumbnail() ) { the_post_thumbnail(array(200,160), array("class" => "alignleft post_thumbnail")); } } ?>
								<?php the_excerpt(); ?>
                                <br>
                                <div class="readmorecontent">
									<a class="readmore" href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">Seguir leyendo &raquo;</a>
								</div>
                                <br>
							</div>
						</div>
				<?php endwhile; ?>
				<div align="center"><br>
                    
					<script type="text/javascript"><!--
					google_ad_client = "ca-pub-4342568147424167";
					/* OhPerro - footer */
					google_ad_slot = "6785382558";
					google_ad_width = 300;
					google_ad_height = 250;
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
