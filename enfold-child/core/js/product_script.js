
jQuery(document).ready(function($) {


	$('.promika_aplication_type_element').on('click', function () {
		var obj = $(this);
		var spice = obj.data('species');
		console.log(spice);
		var application_type = obj.data('type');
		console.log(application_type);

		$('.home_product').css({
			'opacity': 0.3
		});

		$('.promika_aplication_type_element').removeClass('select');
		$(this).addClass('select');

		$.ajax({
			type    : "POST",
			url     : MyAjax.ajaxurl,
			dataType: "json",
			data    : "action=promika_product_home_filter&species=" + spice + "&application_type=" +application_type,
			success : function (a) {
				console.log(a);
				if (a.html) {
					$('.home_product').html(a.html).css({
						'opacity': 1
					});
				} else {
					$('.home_product').html('<p class="nofound">No result found!</p>').css({
						'opacity': 1
					});
				}
				var destination = $('.home_product').offset().top - 50;

				$('body,html').animate({scrollTop: destination}, 400);
			}
		});
		return false;
	});

	$('.single-product .type_selector_element').on('click', function () {
		var spice_ = $('.species_selector_element.select').data('spice');
		var application_type_ = $(this).data('select');
		window.location.replace('/products/?species=' + spice_ + '&application_type=' + application_type_);
	});

	$('.single-product .species_selector_element').on('click', function () {
		var spice_ = $(this).data('spice');
		var application_type_ = $('.type_selector_element.select').data('select');
		window.location.replace('/products/?species=' + spice_ + '&application_type=' + application_type_);
	});

	$('.page-template-template-products .type_selector_element').on('click', function () {
		var obj = $(this);
		var spice = $('.species_selector_element.select').data('spice');
		//console.log(spice);
		var application_type = obj.data('select');
		//console.log(application_type);

		$('.product_filter_wrap').css({
			'opacity': 0.3
		});

		$('.type_selector_element').removeClass('select');
		$(this).addClass('select');

		$.ajax({
			type    : "POST",
			url     : MyAjax.ajaxurl,
			dataType: "json",
			data    : "action=promika_product_filter&species=" + spice + "&application_type=" +application_type,
			success : function (a) {
				console.log(a);
				if (a.html) {
					$('.product_filter_wrap').html(a.html).css({
						'opacity': 1
					});
				} else {
					$('.product_filter_wrap').html('<p class="nofound">No result found!</p>').css({
						'opacity': 1
					});
				}
				var destination = $('.product_filter_wrap').offset().top - 50;

				$('body,html').animate({scrollTop: destination}, 400);
			}
		});
		return false;
	});

	$('.page-template-template-products .species_selector_element').on('click', function () {
		var obj = $(this);
		var spice = obj.data('spice');
		var application_type = $('.type_selector_element.select').data('select');

		$('.product_filter_wrap').css({
			'opacity': 0.3
		});

		$('.species_selector_element').removeClass('select');
		$(this).addClass('select');

		$.ajax({
			type    : "POST",
			url     : MyAjax.ajaxurl,
			dataType: "json",
			data    : "action=promika_product_filter&species=" + spice + "&application_type=" +application_type,
			success : function (a) {
				console.log(a);
				if (a.html) {
					$('.product_filter_wrap').html(a.html).css({
						'opacity': 1
					});
				} else {
					$('.product_filter_wrap').html('<p class="nofound">No result found!</p>').css({
						'opacity': 1
					});
				}
				var destination = $('.product_filter_wrap').offset().top - 50;

				$('body,html').animate({scrollTop: destination}, 400);
			}
		});
		return false;
	});

	// $('.species_selector_element').click(function(event) {
	// 	$('.species_selector_element').removeClass('select');
	// 	$(this).addClass('select');
	// });
	
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