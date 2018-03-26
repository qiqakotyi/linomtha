(function () {

	$('.owl-carousel').owlCarousel({
		stagePadding: 0,
		loop: true,
		margin: 0,
		nav: true,
		dots: true,
		items: 3,
		itemsTablet: [600, 1],
		itemsMobile: [400, 1],
		singleItem: false,
		navText: [
			"<i class='fa fa-caret-left'></i>",
			"<i class='fa fa-caret-right'></i>"
		],
	});
}());