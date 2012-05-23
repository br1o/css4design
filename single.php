<?php
/**
 * @package WordPress
 * @subpackage _942
 */
?>
<?php get_header(); ?>
		<div id="content-sidebar" class="wrapper">
			<div id="content">          
				<h2 class="widgettitle roundies">
					<?php echo get_bloginfo ( 'description' ); ?>
				</h2>
				<?php if (have_posts()) : ?>
					<?php query_posts("$query_string&cat=-1"); ?>
					<?php while (have_posts()) : the_post(); ?>
						<!-- begin article -->
						<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
												
								<h1 class="entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Lien permanent vers <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
							<div class="entry">
                                <?php wp_link_pages(array('before' => '<p class="nextpage"><strong>' . __('Article en plusieurs parties :', '_942') . '</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
                                <!--div class="plus-1" style="float: right; margin-left: 18px;">
							<g:plusone size="tall"></g:plusone>
						</div-->
								<?php //first_thumbnail_timthumb('w=42&h=42'); ?>
								
								<?php //if(!isset($_COOKIE['PHPSESSID'])) { ?>
								<div class="inpost200">
								<script><!--
									google_ad_client = "ca-pub-2857805375441186";
									/* InPost200 */
									google_ad_slot = "5052769000";
									google_ad_width = 200;
									google_ad_height = 200;
									//-->
									</script>
									<script type="text/javascript"
									src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
									</script>
								</div>
								<?php //} ?>
								<?php the_content(__("Voulez-vous en savoir plus ?", '')); ?>
                                <?php wp_link_pages(array('before' => '<p class="nextpage"><strong>' . __('Article en plusieurs parties :', '_942') . '</strong> ', 'after' => '</p>', 'next_or_number' => 'next')); ?>
								<p class="footer">
                                    <?php comments_popup_link('Aucun commentaire ? »', 'un commentaire »', '% commentaires »', 'comments-link', 'Les commentaires sont actuellement fermés'); ?>
                                        | Publié le <?php echo get_the_time('l j F Y') ?>
                                        dans <?php the_category(', '); ?> <br />

                                    <?php if ( comments_open() && pings_open() ) {
                                    // Both Comments and Pings are open ?>
                                        <?php printf(__('Vous pouvez <a href="#respond">laisser un commentaire</a> ou un <a href="%s" rel="trackback">trackback</a> depuis votre site.', '_942'), trackback_url(false)); ?>

                                    <?php } elseif ( !comments_open() && pings_open() ) {
                                    // Only Pings are Open ?>
                                        <?php printf(__('Les commentaires sont actuellement fermés, mais vous pouvez faire un <a href="%s" rel="trackback">trackback</a> depuis votre site.', '_942'), trackback_url(false)); ?>

                                    <?php } elseif ( comments_open() && !pings_open() ) {
                                    // Comments are open, Pings are not ?>
                                        <?php _e('Vous pouvez laisser directement un commentaire plus bas. Les pings ne sont pas ouverts.', '_942'); ?>

                                    <?php } elseif ( !comments_open() && !pings_open() ) {
                                    // Neither Comments, nor Pings are open ?>
                                        <?php _e('Les commentaires et les pings sont fermés.', '_942'); ?>

                                    <?php } edit_post_link(__('Modifier cet article', '_942'),'','.'); ?>
                                </p>
                                <div class="monetisation" style="padding: 1.5em; border: 1px solid #eee; text-align: center;">
                                    <p>
                                        PS : Le respect de la vie privée sur internet est important : j'ai décidé d'échanger mon bouton <em>Like</em> de Facebook par un bouton <em>Faire un don</em> de Paypal car <br><q cite="Jean Cocteau">Il n'y pas d'amour, il n'y a que des preuves d'amour</q> (Jean Cocteau) ;) Merci d'avance.
                                    
                                    </p>
                                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" style="margin-bottom: 1.5em;">
                                        <input type="hidden" name="cmd" value="_s-xclick">
                                        <input type="hidden" name="hosted_button_id" value="6GSAUUCS35UGJ">
                                        <input class="center" type="image" src="https://www.paypal.com/fr_FR/FR/i/btn/btn_donate_LG.gif" border="0" name="submit" alt="PayPal - la solution de paiement en ligne la plus simple et la plus sécurisée !">
                                        <img alt="" border="0" src="https://www.paypal.com/fr_FR/i/scr/pixel.gif" width="1" height="1">
                                    </form>
                                    <p>
                                        Afin de satisfaire le plus grand nombre, j'ai ajouté <br>un bouton <strong>Flattr</strong> parce que vous le valez bien ;)
                                    </p>
                                    <?php the_flattr_permalink() ?>
                                </div>
							</div>
							<!--end div class="entry"-->
						</div>
						<!-- end article -->

					<?php comments_template(); ?>
	
					<?php endwhile; ?>
					<div id="prev-next" class="wrapper">
						<p><?php next_posts_link(__('&laquo; Articles précédents', '_942')) ?></p>
						<p class="alignright"><?php previous_posts_link(__('Articles suivants &raquo;', '_942')) ?></p>
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
			
			<?php get_sidebar(); ?>			
			
		</div>
		<!--END div id="content-sidebar"-->
<?php get_footer(); ?>
