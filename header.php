<?php
/**
 * @package WordPress
 * @subpackage _942
 */

    $title = get_post_meta($post->ID, 'title', $single = true);
    $description = get_post_meta($post->ID, 'description', $single = true);
    $keywords = get_post_meta($post->ID, 'keywords', $single = true);

    $my_title_home = "Le blogzine de l'intégrateur web : du Design Web au HTML5, CSS3 et jQuery en passant par la création graphique";
    $my_single_cat = "Tous les articles appartenant à la rubrique";
    $my_single_tag = "Tous les articles partageant le tag";
    $my_desc = "css 4 design est un blog sur l'intégration web HTML, CSS et Javascript sans oublier le graphisme et l'ergonomie. Du webdesign, en somme ;)";

?>
<!DOCTYPE html>
<html>
<head>
<meta name="google-site-verification" content="G7dBlOwageLEBDwe4V-DDg1fLokWYqpKcpmH7zCFVgc">

<meta name="alexaVerifyID" content="kBG9I5NCi0S9htDeJOkomle7vEw" />

<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>">
<!--meta http-equiv="X-UA-Compatible" content="IE=7"-->

<?php if ( is_home() ) { ?>
    <title><?php echo $my_title_home; ?></title>
<?php } else if ( is_single() ) { ?>
    <title><?php if($title !== '') { echo $title; } else { the_title(); } ?></title>

<?php } else if ( is_category() ) { ?>
    <title><?php echo $my_single_cat . ' '; single_cat_title(); ?></title>
<?php } else if ( is_tag() ) { ?>
    <title><?php echo $my_single_tag . ' '; single_tag_title(); ?></title>
<?php } else { ?>
    <title><?php echo $my_desc; ?></title>
<?php } ?>

<?php if ( is_home() ) { ?>
    <meta name="description" content="<?php echo $my_desc; ?>">
<?php } else { ?>
    <meta name="description" content="<?php if ($description !== '') { echo $description; } else if ( $post->post_excerpt !== '') { echo strip_tags( $post->post_excerpt); } else { echo wp_html_excerpt($post->post_content, 200); } ?>">
<?php } ?>

<?php //if($keywords !== '') { echo '<meta name="keywords" content="' . $keywords .'" />'; } else { st_meta_keywords(); } ?>

<link rel="icon" type="image/png" href="<?php bloginfo('stylesheet_directory'); ?>/pix/favicon.png">
<!--[if IE]><link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('stylesheet_directory'); ?>/pix/favicon.ico" /><![endif]-->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen,projection">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/js/tipsy/tipsy.css" type="text/css" media="screen,projection">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/js/superfish/css/superfish.css" type="text/css" media="screen,projection">
<!--link rel="stylesheet" href="<?php /*bloginfo('stylesheet_directory'); */?>/js/jTextTranslate/css/style.css" type="text/css" media="screen,projection" /-->


<!--script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/column.js"></script-->
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.js"></script>
<!--script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/tools.js"></script-->
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/superfish/js/superfish.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/superfish/js/hoverIntent.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/tipsy/jquery.tipsy.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/lazyload.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/functions.js"></script>

<link href='http://fonts.googleapis.com/css?family=Neuton' rel='stylesheet' type='text/css'>

<!--[if lte IE 8]>
<link rel="stylesheet" type="text/css" media="screen,projection" href="<?php bloginfo('stylesheet_directory'); ?>/ie.css">
<![endif]-->

<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?> 
<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>

    <?php if ( is_user_logged_in() ) : ?>
    <div id="testouille">
    <ul>
        <li><a id="displayGrid" href="#displayGrid">Afficher la grille</a></li>
        <li><a id="fontAltSerif" href="#fontAltSerif">Police serif</a></li>
        <li><a id="fontAltSans" href="#fontAltSans">Police Sans serif</a></li>
    </ul>
    <p>
    <select id="chgPolice" class="alignright">
        <option value="font-defaut">Avec ou Sans Serif ?</option>
        <option value="font-alt-sans">Sans Serif</option>
        <option value="font-alt-serif">Avec Serif</option>
    </select>
    </p>
    </div>
    <?php endif; ?>

    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('header1') ) : ?>
        <div id="header-1">

        </div>
    <?php endif; ?>
    
	<div id="container">
        <div id="skip-links" class="small wrapper">
            <ul>
                <li><a href="/#featured" title="Accédez à un article de fond mise en avant">A la Une !</a></li>
                <li><a href="/#content" title="Accédez à la succession des billets du blog">Les billets du blog</a></li>
                <li><a href="/#graphisme" title="Accédez à un article sur le Graphisme">Graphisme</a></li>
                <li><a href="/#tutoriels" title="Accédez à un tutoriel aléatoire">Tutoriels</a></li>
                <li><a href="/#sidebar1" title="Accédez à la barre latérale">Barre latérale</a></li>
                <li><a href="/#primary-footer" title="Accédez au pied de page">Pied de page</a></li>
            </ul>
        </div>
		<div id="intro" class="wrapper">
			<div id="logo">
				<a title="Le blog de intégrateur HTML & CSS" href="<?php echo get_option('home'); ?>/"><img src="<?php bloginfo('stylesheet_directory'); ?>/pix/css-4-design.png" alt="" />
				</a>
			</div>          
			<div id="annonce">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('header2') ) : ?>
                <!--a title="A tout de suite ;)" href="http://css4design.com/contact"><img width="222px" height="108px" src="/data/pub/222x118.png" alt="Encart publicitaire 222x118" /></a-->
                <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                    <input type="hidden" name="cmd" value="_s-xclick">
                    <input type="hidden" name="hosted_button_id" value="9559UWTCW7FKS">
                    <input type="image" src="http://css4design.com/data/pub/don-paypal.png" border="0" name="submit" alt="PayPal - la solution de paiement en ligne la plus simple et la plus sécurisée !">
                    <img alt="" border="0" src="https://www.paypal.com/fr_FR/i/scr/pixel.gif" width="1" height="1">
                </form>
                <?php endif; ?>
			</div>
			<div id="photo">
				<img src="<?php bloginfo('stylesheet_directory'); ?>/pix/br1o.png" alt="" title="Bruno Bichet, intégrateur web front-end" />
			</div>
			<div id="presentation" class="small">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('header3') ) : ?>
				<h2>Rigueur. <span>Et passion !</span></h2>
					<p>Ne dites pas à ma mère que je suis artisan en architecture de l'information appliquée aux sites web : elle croit que je suis webdesigner, intégrateur HTML & CSS, rédacteur web, formateur NTIC et consultant en webmarketing depuis 2001 ! <a title="Plus d'information sur ce blog" href="<?php echo get_option('home'); ?>/a-propos"><strong>Voulez-vous en savoir plus ?</strong></a></p>
				<?php endif; ?>	
			</div>
		</div>
		<div id="menu" class="wrapper">
        	<div id="rech">
                <form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
                    <div class="wrapper">
                        <input class="roundies" type="text" value="<?php the_search_query(); ?>" name="s" id="s" />
                        <input class="roundies" type="submit" id="searchsubmit" value="OK" />
                    </div>
                </form>                
            </div>
			<ul id="nav" class="wrapper sf-menu">
               <?php //if (!is_home()) : ?>
				<!--li><a id="accueil" title="Retour vers la page d'accueil" href="<?php //echo get_option('home'); ?>/">Accueil</a></li-->
				<?php //endif; ?>
                <!--li id="plus-1"><g:plusone></g:plusone></li-->
                <?php wp_list_pages('title_li=&exclude=6176,267'); ?>
				<li id="portfolio"><a href="/tag/portfolio">PORTFOLIO</a></li>
				<li id="catlist" class="cat-item">
                    <a title="Cliquez pour afficher tous les articles par catégories" href="/categories">THEMES</a>
					 <ul class="children">
					 <?php wp_list_categories('orderby=order&title_li=&use_desc_for_title=0&exclude=1');
						  $this_category = get_category($cat);
						  if (get_category_children($this_category->cat_ID) != "") {
							  echo "<ul>";
							  wp_list_categories('orderby=id&show_count=0&title_li=
							  &use_desc_for_title=0&child_of='.$this_category->cat_ID);
							  echo "</ul>";
						  }		
                    ?>
                    </ul>
				</li>
                <li id="flux-rss"><a href="http://feeds.feedburner.com/css4design" title="Abonnez-vous au flux RSS">RSS</a></li>
				<li id="4design"><a title="La timeline de la création numérique" href="http://4design.tl/"><strong>4DESIGN</strong></a></li>
			</ul>
		</div>

            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('header4') ) : ?>


            <?php endif; ?>

        <?php //include( TEMPLATEPATH . '/inc/featured_posts_home.php' ); ?>
