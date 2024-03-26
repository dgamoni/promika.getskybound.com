
jQuery(document).ready(function($) {

	// $('.gallery_variant').hide();
	// $('.gallery_variant.selected').show();

	$('.promika_product_variants_size').click(function(event) {
		var variant = $(this).attr('data-variant');
		$('.promika_product_variants_size').removeClass('selected');
		$(this).addClass('selected');

		$('.gallery_variant').removeClass('selected');
		$('.gallery_variant').each(function(index, el) {
			if ( $(el).attr('data-galvariant') == variant) {
				//$(el).show();
				$(el).addClass('selected');
			}
		});

	});

}); //end ready

jQuery(window).load(function() {
	jQuery('#slider-0').flexslider();
	jQuery('#slider-1').flexslider();
	jQuery('#slider-2').flexslider();
	jQuery('#slider-3').flexslider();
});