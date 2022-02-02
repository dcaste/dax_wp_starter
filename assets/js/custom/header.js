jQuery(document).ready(function ($) {
	// Shows/hides the Go to Top button and minimizes the Header Navigation Bar.
	$(window).scroll(function () {
		if ($(this).scrollTop() >= 100) {
			$("#go__top").fadeIn(200);
			$("#header__top-bar").removeClass("visible");
			$("#header__top-bar").addClass("hidden");
			$("#header__nav__wrapper").removeClass("regular");
			$("#header__nav__wrapper").addClass("small");
			$("#header__logo").removeClass("regular");
			$("#header__logo").addClass("small");
		} else {
			$("#go__top").fadeOut(200);
			$("#header__top-bar").removeClass("hidden");
			$("#header__top-bar").addClass("visible");
			$("#header__nav__wrapper").removeClass("small");
			$("#header__nav__wrapper").addClass("regular");
			$("#header__logo").removeClass("small");
			$("#header__logo").addClass("regular");
		}
	});

	// Sticky menus.
	$("#header__desktop").stick_in_parent();
	$("#header__mobile").stick_in_parent();

	$("#go__top").click(function () {
		$("html, body").animate({ scrollTop: 0 }, 500);
		return false;
	});

	// Dropdown Menu in Header.
	$("#header__nav ul li.menu-item-has-children > a").click(function () {
		$(this).parent().siblings().find("ul").slideUp(150);
		$(this).next("ul").stop(true, false, true).slideToggle(150);
		return false;
	});

	// Show/hides Header search form.
	$("#header__button-search").click(function () {
		$("#header__search-form").slideUp(150);
		$("#header__search-form").stop(true, false, true).slideToggle(150);
		return false;
	});

	// Dropdown Menu in Mobile.
	$("#mobile-toggle").click(function () {
		$("#header__mobile__nav").slideUp(150);
		$("#header__mobile__nav").stop(true, false, true).slideToggle(150);
		return false;
	});
});
