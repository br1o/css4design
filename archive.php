<?php
/**
 * @package WordPress
 * @subpackage _942
 */
?>
<?php get_header(); ?>
		<div id="content-sidebar" class="wrapper">
			<div id="content">
				<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
				<?php /* If this is a category archive */ if (is_category()) { ?>
				<h2 class="widgettitle roundies"><?php printf(__('Catégorie &raquo; %s', '_942'), single_cat_title('', false)); ?></h2>
				<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
				<h2 class="widgettitle roundies"><?php printf(__('tag &raquo; %s', '_942'), single_tag_title('', false) ); ?></h2>
				<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
				<h2 class="widgettitle roundies"><?php printf(_c('Archive for %s| Par jour', '_942'), get_the_time(__('F jS, Y', '_942'))); ?></h2>
				<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
				<h2 class="widgettitle roundies"><?php printf(_c('Archive for %s| Par mois', '_942'), get_the_time(__('F, Y', '_942'))); ?></h2>
				<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
				<h2 class="widgettitle roundies"><?php printf(_c('Archive for %s| Par années', '_942'), get_the_time(__('Y', '_942'))); ?></h2>
				<?php /* If this is an author archive */ } elseif (is_author()) { ?>
				<h2 class="widgettitle roundies"><?php _e('Articles classés par auteur', '_942'); ?></h2>
				<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
				<h2 class="widgettitle roundies"><?php _e('Archives du blog', '_942'); ?></h2>
				<?php } ?>

				<?php if (have_posts()) : ?>
					<?php query_posts("$query_string&cat=-1&showposts=6"); ?>
					<?php while (have_posts()) : the_post(); ?>
						<!-- begin article -->
						<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
								<h1 class="entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Lien permanent vers <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
							<div class="entry">
								<?php first_thumbnail_timthumb('w=42&h=42'); ?>
								<?php the_content(__("Voulez-vous en savoir plus ?", '')); ?>
								<p class="footer"><?php comments_popup_link('Aucun commentaire ? »', 'un commentaire »', '% commentaires »', 'comments-link', 'Les commentaires sont actuellement fermés'); ?> | Publié dans <?php the_category(', '); ?></p>
							</div>
							<!--end div class="footer"-->
						</div>
						<!-- end article -->
					<?php endwhile; ?>
					<div id="prev-next" class="wrapper">
						<p class="floatleft"><?php next_posts_link(__('&laquo; Articles précédents', '_942')) ?></p>
						<p class="floatright"><?php previous_posts_link(__('Articles suivants &raquo;', '_942')) ?></p>
					</div>
				<?php else : ?>
					<div class="box">
						<h2 class="center"><?php _e('Page non trouvée', '_942'); ?></h2>
						<p class="center"><?php _e('La page que vous recherchez n\'est pas en stock. Merci d\'utiliser le champs de recherche pour chercher bonheur ;)', '_942'); ?></p>
						<?php get_search_form(); ?>
					</div>
				<?php endif; ?>
			</div>
			<!--END div id=content-->
			
			<div id="sidebar" class="roundies">
				<?php get_sidebar(); ?>
			</div>
			<!--END div id="sidebar"-->
			
		</div>
		<!--END div id="content-sidebar"-->
<?php get_footer(); ?>
