$(document).ready(function () {    
	// setup ul.tabs to work as tabs for each div directly under div.panes 
	//$("ul.tabs").tabs("div.panes > div"); 
	
    // coins arrondis
    //$('.roundies').corner()

	// tooltips a la facebook - twitter style
	$('#intro a, #menu > li a, #outro a, .featured-posts a').tipsy({gravity: 'n', fade: 'false'}); // n | s | e | w
	$('#logo a').tipsy({gravity: 'n', fade: 'false'}); // n | s | e | w
	//$('#catlist a').tipsy({gravity: 'n', fade: 'false'}); // n | s | e | w
    $('.hentry h1 a').tipsy({gravity: 's', fade: 'false'}); // n | s | e | w
	
	// navigation principale avec superfish
	$('ul#nav').superfish(); 

    // suppression de la bordure du bas dans le sommaire
	$(".sommaire li:last").css("border", "0 none");

    // suppression de la marge droite dans les featured posts
	//$("#featured-posts-1 li:last, #featured-posts-2 li:last").css("margin-right", "0");

    // suppression de la bordure gauche dans le menu
    $("#nav li:first a").css("border-left", "0 none");

    // Affichage de la grille si connecte
    $("#displayGrid").click(function() {
        $("html").toggleClass("display-grid");
    });

    // Police serif
    $("#fontAltSerif").click(function() {
        $("#container").toggleClass("font-alt-serif");
    });

    // Police sans serif
    $("#fontAltSans").click(function() {
        $("#container").toggleClass("font-alt-sans");
    });

    $("#chgPolice").change(function() {
        var police = $(this).val();
        $("#content").removeClass("font-alt-sans font-alt-serif font-defaut").addClass(police);
        return false;
    });

    $("#fontAltSans").click(function() {
        $("#container").toggleClass("font-alt-sans");
    });

    // supprime les title dans les liens du menu categorie
    $('#catlist ul a').removeAttr('title');
	
	// Affiche les images après le scroll uniquement
	$("img").lazyload({ 
		//threshold : 200,
		//placeholder : "http://css4design.com/wp-content/themes/css4design/js/grey.png",
		//event : "click",
		//effect : "fadeIn"
	});
	
// dom ready	
});