
jQuery(document).ready(function() {
	
	
	jQuery( ".wbd-title h3" ).each(function() {
		jQuery(this).on("click", function() {
			jQuery(this).parent('.wbd-title').parent('.wbd-raid').toggleClass("toggled"); // Adding/Removing "toggled" class when the title is clicked.
		});
	});
	
	
});