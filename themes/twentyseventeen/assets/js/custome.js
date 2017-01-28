jQuery( document ).ready(function() {

    jQuery('#contact-form' ).popover();

    jQuery('.wpcf7-submit').click(function(event) {
    	setTimeout(function() { jQuery('#exampleModal' ).modal('hide');}, 5000);    	
	});
	  
});