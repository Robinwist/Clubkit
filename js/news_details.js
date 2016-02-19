$(document).ready(function() {
    $('#slider').flexslider({
        animation: 'slide',
        controlNav: 'thumbnails'
    });

	$('#slider .image-popup-no-margins').magnificPopup({
		type: 'image',
		closeOnContentClick: true,
		closeBtnInside: false,
		fixedContentPos: true,
		mainClass: 'mfp-no-margins mfp-with-zoom',
		image: {
			verticalFit: true
		},
		zoom: {
			enabled: true,
			duration: 300
		}
	});
});
