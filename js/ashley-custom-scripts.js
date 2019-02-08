jQuery(document).ready(function($) {
	var $containerRowMarginLeft = $('.containerRow').css('margin-left');
	$('.pageTitle').css('margin-left',$containerRowMarginLeft);
	
	/*$(".featuredProductsWrapper .productsWhite a", this).hover(function(){
		$(this).add('.featuredProductsWrapper').addClass('headingHover');
	}, function(){
		$(this).add('.featuredProductsWrapper').removeClass('headingHover');
	}
									   );*/
});
jQuery(window).on('resize', function($){
	var $containerRowMarginLeft = jQuery('.containerRow').css('margin-left');
	jQuery('.pageTitle').css('margin-left',$containerRowMarginLeft);
	
	
});
jQuery(document).ready(function($) {


// Get an array of all element heights
        var elementHeights = jQuery('.productsWhite1').map(function() {
        return jQuery(this).outerHeight();
			
        }).get();

        jQuery('.productsWhite2').css('height', elementHeights);
	jQuery('.productsWhite3').css('height', elementHeights);




});
jQuery(window).resize(function() {
  

        // Get an array of all element heights
        var elementHeights = jQuery('.productsWhite1').map(function() {
        return jQuery(this).outerHeight();
			
        }).get();



        // Set each height to the max height
        jQuery('.productsWhite2').css('height', elementHeights);
	jQuery('.productsWhite3').css('height', elementHeights);
         
    
});