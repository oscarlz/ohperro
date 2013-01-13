<?php get_header(); ?>
	<div class="outer" id="contentwrap">	
			<div class="postcont">
				<div id="content">	
					<?php if (have_posts()) : ?>	
						<?php while (have_posts()) : the_post(); ?>
						<div <?php post_class() ?> id="post-<?php the_ID(); ?>">

							<h1 class="title"><?php the_title(); ?></h1>
							<div class="postdate"><img src="<?php bloginfo('template_url'); ?>/images/date.png" /> <?php the_time('j F, Y') ?>  | Por <?php c2c_the_author_image(); ?> <?php if (current_user_can('edit_post', $post->ID)) { ?> <img src="<?php bloginfo('template_url'); ?>/images/edit.png" /> <?php edit_post_link('Edit', '', ''); } ?></div>
			
							<div class="entry">
                            <?php if(!has_post_thumbnail() || in_category('Fotos de perros') || in_category('Fotos de perros cachorros')) {?> <div align="center" style="margin-bottom: 5px;"><?php } ?>
                            <script type="text/javascript"><!--
                            google_ad_client = "ca-pub-4342568147424167";
                            /* MC - Cuadro medio */
                            google_ad_slot = "6467339225";
                            google_ad_width = 300;
                            google_ad_height = 250;
                            //-->
                            </script>
                            <script type="text/javascript"
                            src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
                            </script>
                            <?php if(!has_post_thumbnail() || in_category('Fotos de perros') || in_category('Fotos de perros cachorros')) { ?> </div> <?php } ?>
                                <?php if(!in_category('Fotos de perros') && !in_category('Fotos de perros cachorros')){ if ( function_exists("has_post_thumbnail") && has_post_thumbnail() ) {
                                    the_post_thumbnail('alignleft post_thumbnail_insidepost'); } } ?>

                                <?php the_content('Read the rest of this entry &raquo;'); ?>
								<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
							</div>
                            <div align="center">
							<script type="text/javascript"><!--
							google_ad_client = "ca-pub-4342568147424167";
							/* MC - Final de posts (medium) */
							google_ad_slot = "5192891648";
							google_ad_width = 300;
							google_ad_height = 250;
							//-->
							</script>
							<script type="text/javascript"
							src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
							</script>
                            </div>
                            <br>
                            <?php related_posts(); ?>
                            <br>
                            <?php if(function_exists('igit_rpwt_posts')) igit_rpwt_posts(); ?>
							<div class="postmeta"><img src="<?php bloginfo('template_url'); ?>/images/folder.png" /> Publicado en <?php the_category(', ') ?> <?php if(get_the_tags()) { ?> <img src="<?php bloginfo('template_url'); ?>/images/tag.png" /> <?php  the_tags('Tags: ', ', '); } ?></div>
							<br>
                            <?php if (('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
								// Both Comments and Pings are open ?>
								
							<?php } elseif (!('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
								// Only Pings are Open ?>
								Responses are currently closed, but you can <a href="<?php trackback_url(); ?> " rel="trackback">trackback</a> from your own site.
	
							<?php } elseif (('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
								// Comments are open, Pings are not ?>
								You can skip to the end and leave a response. Pinging is currently not allowed.
	
							<?php } elseif (!('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
								// Neither Comments, nor Pings are open ?>
								Both comments and pings are currently closed.
	
							<?php } edit_post_link('Edit this entry','','.'); ?>
						</div><!--/post-<?php the_ID(); ?>-->
						
				<?php comments_template(); ?>
				
				<?php endwhile; ?>
			
				<?php endif; ?>
			</div>
			</div>
		<?php get_sidebars('right'); ?>
        <?php get_sidebars('left'); ?>
	</div>
<?php get_footer(); ?>