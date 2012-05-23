<?php function featured_posts($f_posts = '?featured-posts=misc') {
     if ( is_home() ) {
        return $f_posts = '?featured-posts=home';
    } elseif (is_single() ) {
        return $f_posts = '?featured-posts=single';
    } elseif (is_tag() ) {
        return $f_posts = '?featured-posts=tag';
    } elseif (is_category() ) {
        return $f_posts = '?featured-posts=category';
    } elseif (is_archive() ) {
        return $f_posts = '?featured-posts=archive';
    } else {
         return $f_posts = '?featured-posts=misc';
    }
}
?>
        <div id="featured-posts" class="wrapper">
            <ul>
                <li><p><a href="http://css4design.com/detourer-les-cheveux-avec-photoshop<?php echo featured_posts(); ?>">&hearts; Détourer les cheveux avec Photoshop</a></p></li>
                <li><p><a href="http://css4design.com/nombre-d-or-suite-de-fibonacci-et-autres-grilles-de-mise-en-page-pour-le-design-web<?php echo featured_posts(); ?>">&hearts; Design web avec Fibonacci et le nombre d'or</a></p></li>
                <li><p><a href="http://css4design.com/tester-un-site-dans-plusieurs-navigateurs-mais-surtout-dans-ie6-avec-vista<?php echo featured_posts(); ?>">&hearts; Tester son site web sous IE6 avec Vista</a></p></li>
                <li><p><a href="http://css4design.com/choisir-sa-palette-de-couleur<?php echo featured_posts(); ?>">&hearts; Des outils pour choisir sa palette de couleurs</a></p></li>
                <li><p><a href="http://css4design.com/1000-ressources-pour-wordpress-et-le-developpement-web<?php echo featured_posts(); ?>">&hearts; 1000 ressources pour le design web</a></p></li>
                <li><p><a href="http://css4design.com/frameworks-css-reset-css-design-from-scratch<?php echo featured_posts(); ?>">&hearts; Frameworks CSS et Reset CSS</a></p></li>
                <li><p><a href="http://css4design.com/choisir-un-frameworks-css<?php echo featured_posts(); ?>">&hearts; 24 frameworks CSS passés au crible</a></p></li>
                <li><p><a href="http://css4design.com/danse-avec-les-loops-1-un-theme-wordpress-mis-a-nu<?php echo featured_posts(); ?>">&hearts; Un thème WordPress mis à nu</a></p></li>
            </ul>
        </div>