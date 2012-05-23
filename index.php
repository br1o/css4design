<?php
/**
 * @package WordPress
 * @subpackage _942
 */
?>
<?php get_header(); ?>
		<?php if ( is_home() && !is_paged()) : ?>
		<div id="featured">
			<?php $my_query = new WP_Query('tag=Edito&showposts=1');
			while ($my_query->have_posts()) : $my_query->the_post(); $do_not_duplicate = $post->ID; ?>
				<!-- begin article -->
				<h2 class="widgettitle roundies"><?php the_category(' '); ?></h2>
				<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
					<h1 class="entry-title">
                        <a href="<?php the_permalink() ?>" rel="bookmark" title="Lien permanent vers <?php the_title_attribute(); ?> (Publié le <?php echo get_the_time('l j F Y') ?>)"><?php the_title(); ?></a>
                    </h1>
					
					<div class="entry">
                         <?php first_thumbnail_timthumb('w=98&h=98'); ?>
						 <?php the_excerpt('...'); ?> 
						 <p class="gimme-more"><a class="roundies" href="<?php the_permalink() ?>" rel="bookmark" title="Lien permanent vers <?php the_title_attribute(); ?>">Voulez-vous en savoir plus ?</a></p>
					</div>
					
					<div id="visuel" class="roundies">
						<?php
						$thumb = get_post_meta($post->ID, 'visuel_src', $single = true);
						$thumb_class = get_post_meta($post->ID, 'visuel_css', $single = true);
						$thumb_alt = get_post_meta($post->ID, 'visuel_alt', $single = true);
						$thumb_desc = get_post_meta($post->ID, 'visuel_desc', $single = true);
						?>					
						<p id="featured-image">
								<a href="<?php the_permalink() ?>" rel="bookmark" title="Lien permanent vers <?php the_title_attribute(); ?>">
									
									<img src="<?php if($thumb !== '') { echo $thumb; } else { echo bloginfo('stylesheet_directory').'/pix/featured.jpg'; } ?>"
									id="the_thumb"
									class="<?php if($thumb_class !== '') { echo $thumb_class; } else { echo "thumb-class"; } ?>"
									alt="<?php if($thumb_alt !== '') { echo $thumb_alt; } else { echo the_title(); } ?>" />
								</a>
						</p><!--p id="featured-image"-->	
						
						<p id="featured-description">
							<?php  if ($thumb_desc !== '') { echo $thumb_desc; } else { echo '&copy Tous droits réservés'; } ?>
						</p>
					</div><!--div id="visuel"-->
				</div>
				<!-- end article -->
			<?php endwhile; ?>
		</div>
		<!--div id="featured"-->
		<?php endif; ?>

		<div id="content-sidebar" class="wrapper">            
			<div id="content">				
				<?php if (is_page()) : ?>
					<hr class="rules roundies" />
				<?php else : ?>
				<h2 class="widgettitle roundies">
					<?php echo get_bloginfo ( 'description' ); ?>
				</h2>
				<?php endif; ?>

				<?php if (have_posts()) : ?>
					<?php query_posts("$query_string&cat=-1"); ?>
					<?php while (have_posts()) : the_post();
						if( $post->ID == $do_not_duplicate ) continue; update_post_caches($posts); ?>
						<!-- begin article -->
						<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
								<h1 class="entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Lien permanent vers <?php the_title_attribute(); ?> (Publié le <?php echo get_the_time('l j F Y') ?>)"><?php the_title(); ?></a></h1>
							<div class="entry">
								<?php first_thumbnail_timthumb('w=98&h=98'); ?>
								<?php the_content('Voulez-vous en savoir plus ?'); ?>
                                 <!--p class="gimme-more"><a href="<?php the_permalink() ?>" rel="bookmark" title="Lien permanent vers <?php the_title_attribute(); ?>">Voulez-vous en savoir plus ?</a></p-->
								<p class="footer"><?php comments_popup_link('Aucun commentaire ? »', 'un commentaire »', '% commentaires »', 'comments-link', 'Les commentaires sont actuellement fermés'); ?> | Publié dans <?php the_category(', '); ?></p>
							</div>
							
						</div>
						<!-- end article -->
					<?php endwhile; ?>
					<div id="prev-next" class="wrapper">
						<p class="floatleft"><?php next_posts_link(__('&laquo; Articles précédents', '_942')) ?></p>
						<p class="floatright"><?php previous_posts_link(__('Articles suivants &raquo;', '_942')) ?></p>
					</div>
				<?php else : ?>
					<div class="box">
						<h2><?php _e('Page non trouvée', '_942'); ?></h2>
						<p><?php _e('La page que vous recherchez n\'est pas en stock. Merci d\'utiliser le champs de recherche pour chercher bonheur ;)', '_942'); ?></p>

					</div>
				<?php endif; ?>
			</div>
			<!--END div id=content-->
				<?php get_sidebar(); ?>				
        </div>
		<!--END div id="content-sidebar"-->
<?php get_footer(); ?>
