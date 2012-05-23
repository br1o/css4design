<?php
/**
 * @package WordPress
 * @subpackage _942
 */
?>
            <div id="sidebars" class="roundies">
                <?php if ( is_home() || is_archive() ) : ?>
                    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar0') ) : ?>

                    <?php endif; ?>
                <?php endif; ?>

                <?php if ( is_home() ) : ?>                 
                    <!--div id="graphisme" class="roundies featured-sidebar">
                        <?php //$my_query = new WP_Query('tag=Sticky&showposts=1');
                        //while ($my_query->have_posts()) : $my_query->the_post(); $do_not_duplicate2 = $post->ID; ?>
                            <!-- begin article -->
                            <h2 class="widgettitle"><?php //the_category(' '); ?></h2>
                            <div <?php //post_class(); ?> id="post-<?php //the_ID(); ?>">
                                <h1 class="entry-title"><a href="<?php //the_permalink() ?>" rel="bookmark" title="Lien permanent vers <?php //the_title_attribute(); ?>"><?php //the_title(); ?></a></h1>
                                <?php //first_thumbnail_timthumb('w=98&h=98'); ?>
                                <div class="entry">
                                    <?php //the_content('Voulez-vous en savoir plus ?'); ?>
                                </div>
                            </div>
                            <!-- end article -->
                        <?php //endwhile; ?>
                    </div-->

                    <div id="tutoriels" class="roundies featured-sidebar">
                        <?php $my_query = new WP_Query('tag=tutoriels&showposts=1&orderby=rand');
                        while ($my_query->have_posts()) : $my_query->the_post(); $do_not_duplicate3 = $post->ID; ?>
                            <!-- begin article -->
                            <h2 class="widgettitle"><?php the_category(' '); ?></h2>
                            <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
                                <h1 class="entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Lien permanent vers <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
                                <div class="entry">
                                    <?php first_thumbnail_timthumb('w=98&h=98'); ?>
                                    <?php the_content('Voulez-vous en savoir plus ?'); ?>
                                </div>
                            </div>
                            <!-- end article -->
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>

                <?php /*Affiche les sous-catégories dans le contexte des catégories */
                    if (is_category()) {
                      global $wp_query;
                      $category_id = $wp_query->query_vars['cat'];
                      if ( get_category_children($category_id) != "" ) {                      
                        echo '<h2 class="widgettitle">Sous Catégories</h2>';
                        echo '<ul class="box">';
                        wp_list_categories('hide_empty=0&orderby=id&show_count=0&title_li=&use_desc_for_title=1&child_of='.$category_id);
                        echo '</ul>';                      
                      }
                    }
                ?>               

               <div id="sidebar1">
                <?php if ( is_home() || is_archive() ) : ?>
                    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar1') ) : ?>

                    <?php endif; ?>

                    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar2') ) : ?>

                    <?php endif; ?>
                <?php endif; ?>

                <?php if ( is_single() || is_search() ) : ?>
                    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar3') ) : ?>

                    <?php endif; ?>
                <?php endif; ?>
                </div>
                <!--div id="sidebar1" class="wrapper"-->

                <?php if ( !is_single() && !is_paged() && !is_search() && !is_page() &&!is_404() ) : ?>
                    <div id="sidebar2">
                        <?php include (TEMPLATEPATH . '/sidebar2.php'); ?>
                    </div>
                    <!--div id="sidebar2" class="wrapper"-->
                <?php endif; ?>
                
            </div>
            <!--END div id="sidebars"-->

	