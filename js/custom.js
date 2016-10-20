
// Function that return prefered langage
function getPreferedLanguage() {
	var language;
	if (navigator.browserLanguage)
		language = navigator.browserLanguage;
	else
		language = navigator.language;
	console.log(language);
	switch (language) {
		case "fr":
			return "fr";
		default:
			return "en";
	}
}

$(document).ready(function() {

	// Animation for scrolling
	$('.scrollTo').on('click', function() { // Au clic sur un élément
		var page = $(this).attr('href'); // Page cible
		var speed = 750; // Durée de l'animation (en ms)
		$('html, body').animate( { scrollTop: $(page).offset().top }, speed ); // Go
		return false;
	});

	// Change language
	$('#menu_language').on('change', function() {
		var value = $(this).attr('value'); // Page cible
		var pageName = window.location.pathname;
		pageName = pageName.split("/");
		pageName = pageName[pageName.length -1];

		var splitPageName = pageName.split(".");
		var extension = splitPageName[splitPageName.length -1];
		if(!extension || extension.length === 0)
			extension = "html";
		// Remove extension from splitPageName
		splitPageName.pop();
		// Remove _fr
		splitPageName = splitPageName.toString().split("_");
		if(splitPageName.length > 1)
			splitPageName.pop();
		if(!splitPageName || splitPageName.length === 0)
			splitPageName = "index";
		// For page in PHP
		if(extension.toLowerCase() === "php") {
			window.open(pageName+"?lang="+value, "_self");
		}
		// For page in HTML
		else {
			// For exemple, index.html is default page
			var targetPage = splitPageName+"."+extension;
			// index_fr the translation
			if(defaultLanguage != value)
				targetPage = splitPageName+"_"+value+"."+extension;
			window.open(targetPage, "_self");
		}
	});
});
