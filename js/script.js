(function () {

	$('.owl-carousel').owlCarousel({
		stagePadding: 0,
		items: 1,
		loop: true,
		margin: 0,
		items: 2,
		itemsDesktop: [1000, 4],
		itemsDesktopSmall: [900, 2],
		itemsTablet: [600, 1],
		singleItem: false,
		nav: true,
		navText: [
			"<i class='fa fa-caret-left'></i>",
			"<i class='fa fa-caret-right'></i>"
		],
		dots: true
	});
}());