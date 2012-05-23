<?php
/**
 * @package WordPress
 * @subpackage _942
 */
?>
<?php get_header(); ?>

		<div id="content-sidebar" class="wrapper">            
			<div id="content">
                <div id="cse" style="width: 100%;">Chargement en cours...</div>
                <script src="http://www.google.com/jsapi" type="text/javascript"></script>
                <script type="text/javascript">
                  google.load('search', '1', {language : 'fr'});
                  google.setOnLoadCallback(function() {
                    var customSearchControl = new google.search.CustomSearchControl('006967523849017542096:qzvkccaamge');
                    customSearchControl.setResultSetSize(google.search.Search.FILTERED_CSE_RESULTSET);
                    customSearchControl.draw('cse');
                  }, true);
                </script>
                <link rel="stylesheet" href="http://www.google.com/cse/style/look/default.css" type="text/css" />

			<!--END div id=content-->
				<?php get_sidebar(); ?>				
        </div>
		<!--END div id="content-sidebar"-->
<?php get_footer(); ?>
