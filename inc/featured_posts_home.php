<?php 
    if ( is_home() ) {
        $featured_posts = '?featured-posts=home';
    } elseif (is_single() ) {
        $featured_posts = '?featured-posts=single';
    } elseif (is_tag() ) {
        $featured_posts = '?featured-posts=tag';
    } elseif (is_category() ) {
        $featured_posts = '?featured-posts=category';
    } elseif (is_archive() ) {
        $featured_posts = '?featured-posts=archive';
    } else {
         $featured_posts = '?featured-posts=misc';
    }
?>
        <div class="featured-posts wrapper">
            <ul>
				<li><p><a title="WordPress de A à Z sur wp.4design.tl" href="http://wp.4design.tl/table-des-matieres-wordpress-a-z">WordPress<br>de A à Z</a></p></li>
				<li><p><a title="Un logo WordPress je thème pour les intégrateurs et intégratrices WordPress" href="http://css.4design.tl/logo-wordpress-je-theme-creative-commons<?php echo $featured_posts; ?>">WordPress<br> Je thème</a></p></li>
                <li><p><a title="Travailler avec le nombre d'Or et la suite de Fibonacci" href="http://css.4design.tl/nombre-d-or-suite-de-fibonacci-et-autres-grilles-de-mise-en-page-pour-le-design-web<?php echo $featured_posts; ?>">Nombre d'or<br>Web</a></p></li>
				<li><p><a title="Mixer plusieurs techniques de détourage pour faire ce que vous voulez avec vos cheveux" href="http://css.4design.tl/detourer-les-cheveux-avec-photoshop<?php echo $featured_posts; ?>">Détourage<br> Photoshop</a></p></li>
                <li><p><a title="Les meilleurs outils pour créer vos palettes de couleurs" href="http://css.4design.tl/choisir-sa-palette-de-couleur<?php echo $featured_posts; ?>">Palette<br> couleurs</a></p></li>
				 <li><p><a title="Une grille de mise en page adapter à vos textes" href="http://css.4design.tl/grille-typographique-nombre-d-or<?php echo $featured_posts; ?>">Grille<br> typographique</a></p></li>
                <li><p><a title="C'est quoi un reset.css et comment choisir celui qui vous convient ?" href="http://css.4design.tl/frameworks-css-reset-css-design-from-scratch<?php echo $featured_posts; ?>">Focus<br> Reset CSS</a></p></li>
                <li style="margin-right: 0;"><p><a title="Choisir votre framework CSS" href="http://css.4design.tl/choisir-un-frameworks-css<?php echo $featured_posts; ?>">40+<br> Grilles CSS</a></p></li>
            </ul>
        </div>