<?php
// Zones widgétisables du thème
if ( function_exists('register_sidebar') )
register_sidebar(array('name'=>'header1',
'before_widget' => '<div id="%1$s" class="widget-header-1 widget %2$s">',
'after_widget' => '</div>',
'before_title' => '<h2 class="widgettitle roundies">',
'after_title' => '</h2>',
));
register_sidebar(array('name'=>'header2',
'before_widget' => '<div id="%1$s" class="widget-header-2 widget %2$s">',
'after_widget' => '</div>',
'before_title' => '<h2 class="widgettitle roundies">',
'after_title' => '</h2>',
));
register_sidebar(array('name'=>'header3',
'before_widget' => '<div id="%1$s" class="widget-header-3 widget %2$s">',
'after_widget' => '</div>',
'before_title' => '<h2 class="widgettitle roundies">',
'after_title' => '</h2>',
));
register_sidebar(array('name'=>'header4',
'before_widget' => '<div id="%1$s" class="widget-header-3 widget %2$s">',
'after_widget' => '</div>',
'before_title' => '<h2 class="widgettitle roundies">',
'after_title' => '</h2>',
));
register_sidebar(array('name'=>'sidebar0',
'before_widget' => '<div id="%1$s" class="widget-header-3 widget %2$s">',
'after_widget' => '</div>',
'before_title' => '<h2 class="widgettitle roundies">',
'after_title' => '</h2>',
));
register_sidebar(array('name'=>'sidebar1',
'before_widget' => '<div id="%1$s" class="widget-sidebar-1 widget %2$s">',
'after_widget' => '</div>',
'before_title' => '<h2 class="widgettitle">',
'after_title' => '</h2>',
));
register_sidebar(array('name'=>'sidebar2',
'before_widget' => '<div id="%1$s" class="widget-sidebar-2 widget %2$s">',
'after_widget' => '</div>',
'before_title' => '<h2 class="widgettitle">',
'after_title' => '</h2>',
));
register_sidebar(array('name'=>'sidebar3',
'before_widget' => '<div id="%1$s" class="widget-sidebar-3 widget %2$s">',
'after_widget' => '</div>',
'before_title' => '<h2 class="widgettitle">',
'after_title' => '</h2>',
));
register_sidebar(array('name'=>'sidebar21',
'before_widget' => '<div id="%1$s" class="widget-sidebar2-1 widget %2$s">',
'after_widget' => '</div>',
'before_title' => '<h2 class="widgettitle">',
'after_title' => '</h2>',
));
register_sidebar(array('name'=>'sidebar22',
'before_widget' => '<div id="%1$s" class="widget-sidebar2-2 widget %2$s">',
'after_widget' => '</div>',
'before_title' => '<h2 class="widgettitle">',
'after_title' => '</h2>',
));
register_sidebar(array('name'=>'widget-footer1',
'before_widget' => '<div id="%1$s" class="widget-footer-1 widget section %2$s">',
'after_widget' => '</div>',
'before_title' => '<h3 class="widgettitle">',
'after_title' => '</h3>',
));
register_sidebar(array('name'=>'widget-footer2',
'before_widget' => '<div id="%1$s" class="widget-footer-2 widget %2$s">',
'after_widget' => '</div>',
'before_title' => '<h3 class="widgettitle">',
'after_title' => '</h3>',
));
register_sidebar(array('name'=>'widget-footer3',
'before_widget' => '<div id="%1$s" class="widget-footer-3 widget %2$s">',
'after_widget' => '</div>',
'before_title' => '<h3 class="widgettitle">',
'after_title' => '</h3>',
));
register_sidebar(array('name'=>'widget-footer4',
'before_widget' => '<div id="%1$s" class="widget-footer-4 widget %2$s">',
'after_widget' => '</div>',
'before_title' => '<h3 class="widgettitle">',
'after_title' => '</h3>',
));
register_sidebar(array('name'=>'text-footer1',
'before_widget' => '<div id="%1$s" class="text-footer-1 widget %2$s">',
'after_widget' => '</div>',
'before_title' => '<h3 class="widgettitle">',
'after_title' => '</h3>',
));
register_sidebar(array('name'=>'text-footer2',
'before_widget' => '<div id="%1$s" class="text-footer-2 widget %2$s">',
'after_widget' => '</div>',
'before_title' => '<h3 class="widgettitle">',
'after_title' => '</h3>',
));
?>
<?php
function gothic_search(){
?>
<div id="recherche">
	<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
		<div>
			<label class="title">Rechercher sur le blog</label><input type="text" class="text" value="<?php the_search_query(); ?>" name="s" id="s" />
			<input type="submit" id="searchsubmit" value="OK" />
		</div>
	</form>
</div>
<hr class="space" />
<?php 
}
?>
<?php
if ( function_exists('gothic_search') ) {
    register_sidebar_widget('search', 'gothic_search');
}
?>
<?php
function sc_liste($atts, $content = null) {
        extract(shortcode_atts(array(
                "nombre" => '5',
                "cat" => ''
        ), $atts));
        //requete sur la BDD pour recuperr la liste de billet
        global $post;
        $myposts = get_posts('numberposts='.$nombre.'&order=DESC&orderby=post_date&category='.$cat);
        $retour='<ul>';
        foreach($myposts as $post) :
                setup_postdata($post);
             $retour.='<li><a href="'.get_permalink().'">'.the_title("","",false).'</a></li>';
        endforeach;
        $retour.='</ul> ';
        //on renvoi la liste
        return $retour;
}
add_shortcode("liste", "sc_liste");
?>
<?php
/**
 * Retrieve list of images from a post.
 *
 * The defaults are as follows:
 *     'number' - Default is -1. Total number of images to retrieve.
 *     'order' - Default is 'ASC'. The order to retrieve the attachments.
 *     'orderby' - Default is 'post_date'. How to order the posts.
 *                 Uses 'natural' to retrieve the images in the order they appear in the post.
 *     'output' - Default is OBJECT. Constant for return type, either OBJECT, ARRAY_A, ARRAY_N.
 *     'post_id' - Default is null. Post ID.
 *     'preserve_keys' - Default is false. If true, the list will be indexed by attachments ID.
 *
 * @author Mehdi Kabab <http://pioupioum.fr>
 * @copyright Copyright (C) 2009 Mehdi Kabab
 * @license http://www.gnu.org/licenses/gpl.html  GNU GPL version 3 or later
 * @version 1.0.0
 *
 * @uses $post If no post_id are transmit and in the loop.
 * @link http://pioupioum.fr/outils-astuces/wordpress-recuperation-avancee-images-article.html
 *
 * @param  array $args Optional. Overrides defaults.
 * @return array|bool List of attachments. False on failure.
 **/
function get_post_images($args = array())
{
    global $post;

    $defaults = array(
        'number'        => -1,
        'order'         => 'ASC',
        'orderby'       => 'post_date',
        'output'        => OBJECT,
        'post_id'       => null,
        'preserve_keys' => false
    );
    $args = wp_parse_args($args, $defaults);

    $post_id = (int) $args['post_id'];
    if (0 === $post_id)
    {
        if (!in_the_loop())
        {
            return false;
        }

        $post_id = $post->ID;
    }
    extract($args, EXTR_SKIP);
    $attachments = false;
    $buf         = false;
    $number      = (int) $number;
    $number      = (0 === $number) ? -1 : $number;

    $order = strtoupper(trim($order));
    if ('ASC' !== $order && 'DESC' !== $order)
    {
        $order = 'ASC';
    }

    switch (strtolower(trim($orderby)))
    {
        case 'natural':
            $orderby = 'natural';
            break;
        case 'post_id':
            $orderby = 'ID';
            break;
        case 'post_date':
        default:
            $orderby = 'post_date_gmt';
            break;
    }

    if ('natural' !== $orderby)
    {
        $attachments = get_children(array(
            'order'          => $order,
            'orderby'        => $orderby,
            'numberposts'    => $number,
            'post_mime_type' => 'image',
            'post_parent'    => (int) $post_id,
            'post_status'    => 'inherit',
            'post_type'      => 'attachment'
        ));
    }

    if (!$attachments)
    {
        if ($post_id == $post->ID)
        {
            $post_content = $post->post_content;
        }
        else
        {
            $my_post = get_post($post_id);
            if (!$my_post)
            {
                return false;
            }
            $post_content = $my_post->post_content;
            unset($my_post);
        }

        $regexp = apply_filters('get_images_regexp', '#<\s*?img\s+.*?wp-image-(\d+)[^>]*>#i');
        if (1 === $number)
        {
            preg_match($regexp, $post_content, $matches);
            if (isset($matches[1]))
            {
                $matches = array($matches[1]);
            }
        }
        else
        {
            preg_match_all($regexp, $post_content, $matches);
            if (isset($matches[1]))
            {
                $matches = $matches[1];
            }
        }
        unset($regexp, $post_content);

        if ($matches_count = count($matches))
        {
            $stack = array();
            if (-1 === $number)
            {
                $c = $matches_count;
            }
            else if ($number < $matches_count)
            {
                $c = $number;
            }
            else
            {
                $c = $matches_count;
            }
            unset($matches_count, $number);

            for ($i = 0; $c > $i; ++$i)
            {
                $id = (int) $matches[$i];
                $stack[$id] = get_post($id);
            }

            if ('natural' === $orderby)
            {
                $attachments = $stack;
            }
            else
            {
                $tmp = array();
                foreach ($stack as $id => $attachment)
                {
                    $tmp[$id] = $attachment->$orderby;
                }
                natcasesort($tmp);

                foreach (array_keys($tmp) as $id)
                {
                    $attachments[$id] = $stack[$id];
                }
                unset($tmp, $attachment);

                if ('DESC' === $order)
                {
                    $attachments = array_reverse($attachments, true);
                }
            }
            unset($stack, $id, $c, $i);
        }
    }

    if ($attachments)
    {
        switch (trim(strtoupper($output)))
        {
            case ARRAY_A:
                $buf = array();
                foreach ($attachments as $id => $attachment)
                {
                    $buf[$id] = get_object_vars($attachment);
                }
                break;

            case ARRAY_N:
                $buf = array();
                foreach ($attachments as $id => $attachment)
                {
                    $buf[$id] = array_values(get_object_vars($attachment));
                }
                break;

            case OBJECT:
            default:
                $buf = $attachments;
                break;
        }

        if (!$preserve_keys)
        {
            $buf = array_merge(array(), $buf);
        }
    }

    return apply_filters('get_images', $buf);
}
?>
<?php
/**
 * Display thumb of the first image from a post.
 *
 * @author Mehdi Kabab <http://pioupioum.fr>
 * @copyright Copyright (C) 2009 Mehdi Kabab
 * @license http://www.gnu.org/licenses/gpl.html  GNU GPL version 3 or later
 *
 * @param  array $post_id Optional. Post ID.
 * @return bool False on failure.
 */
function first_thumbnail($post_id = null)
{
    $img = get_post_images("post_id=$post_id&number=1");
    if (false !== $img)
    {
        echo wp_get_attachment_link($img[0]->ID, 'thumbnail');
    }
    else
    {
        return false;
    }
}
?>
<?php
/**
 * Display a dynamic thumbnail of the first image from a post.
 *
 * The defaults are as follows:
 *     'post_id' - Default is null. Post ID.
 *     'h' - Default is null. Thumbnail height.
 *     'w' - Default is null. Thumbnail width.
 *     'q' - Default is null. Thumbnail quality.
 *     'zc' - Default is null. Zoom crop used for generates the thumbnail.
 *
 * @author Mehdi Kabab <http://pioupioum.fr>
 * @copyright Copyright (C) 2009 Mehdi Kabab
 * @license http://www.gnu.org/licenses/gpl.html  GNU GPL version 3 or later
 *
 * @link http://code.google.com/p/timthumb/ Timthumb
 *
 * @param  array $args Optional. Overrides defaults.
 * @return bool False on failure.
 */
function first_thumbnail_timthumb($args = array())
{
    $defaults = array(
        'post_id' => null,
        'h'  => null,
        'q'  => null,
        'w'  => null,
        'zc' => null,
    );
    $args    = wp_parse_args($args, $defaults);
    $post_id = $args['post_id'];
    $img     = get_post_images("post_id=$post_id&number=1");
    unset($args['post_id']);
 
    if (false !== $img)
    {
        $img = $img[0];
 
        if (null === $post_id)
        {
            if (in_the_loop())
            {
                global $post;
                $post_id = $post->ID;
            }
            else
            {
                if (isset($img->post_parent))
                {
                    $post_id = $img->post_parent;
                }
                else
                {
                    return false;
                }
            }
        }
        $query     = http_build_query($args, '', '&amp;');
        $thumbnail = sprintf('<img class="first_thumbnail_timthumb" src="%s?src=%s%s" rel="attachment"%s%s/>',
            get_bloginfo('template_url', 'display') . '/timthumb.php', // customize timthumb url
            $img->guid,
            ($query) ? '&amp;' . $query : '',
            (isset($args['w'])) ? " width=\"{$args['w']}\"" : '',
            (isset($args['h'])) ? " height=\"{$args['h']}\"" : ''
        );
 
        printf('<a href="%s" title="%s">%s</a>',
            get_permalink($post_id),
            esc_attr(get_the_title($post_id)),
            $thumbnail
        );
    }
    else
    {
        return false;
    }
}
?>
<?php
/*
 * function new_excerpt_more($excerpt) {
	return str_replace('[...]', '[...] <a href="<?php the_permalink() ?>" rel="bookmark" title="Lien permanent vers <?php the_title_attribute(); ?>">Voulez-vous en savoir plus ?</a>', $excerpt);
}
add_filter('wp_trim_excerpt', 'new_excerpt_more');
*/

/*
 * function new_excerpt_more($more) {
	return '[...] <a href="<?php the_permalink() ?>" rel="bookmark" title="Lien permanent vers <?php the_title_attribute(); ?>">Voulez-vous en savoir plus ?</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');
*/

function new_excerpt_length($length) {
	return 100;
}
add_filter('excerpt_length', 'new_excerpt_length');

remove_action('wp_head', 'wp_generator');
?>