"use strict";

jQuery(document).ready(function ($) {
  // Shows/hides the Go to Top button and minimizes the Header Navigation Bar.
  $(window).scroll(function () {
    if ($(this).scrollTop() >= 102) {
      $("#go-to-top").fadeIn(200);
      $("#header__top-bar").removeClass("visible");
      $("#header__top-bar").addClass("hidden");
      $("#header__nav__wrapper").removeClass("regular");
      $("#header__nav__wrapper").addClass("small");
    } else {
      $("#go-to-top").fadeOut(200);
      $("#header__top-bar").removeClass("hidden");
      $("#header__top-bar").addClass("visible");
      $("#header__nav__wrapper").removeClass("small");
      $("#header__nav__wrapper").addClass("regular");
    }
  }); // Sticky menus.

  $("#header__desktop").stick_in_parent();
  $("#header__nav-mobile").stick_in_parent(); // Muestra/Oculta el menú para mobile.

  $("#mobile-toggle").animatedModal({
    animationDuration: "0.3s",
    animatedIn: "slideInDown",
    animatedOut: "slideOutUp"
  });
  $("#go-to-top").click(function () {
    $("html, body").animate({
      scrollTop: 0
    }, 800);
    return false;
  });
});
"use strict";

jQuery(document).ready(function ($) {
  // Shows/hides the Go to Top button and minimizes the Header Navigation Bar.
  $(window).scroll(function () {
    if ($(this).scrollTop() >= 100) {
      $("#go-to-top").fadeIn(200);
      $("#header__top-bar").removeClass("visible");
      $("#header__top-bar").addClass("hidden");
      $("#header__nav__wrapper").removeClass("regular");
      $("#header__nav__wrapper").addClass("small");
      $("#header__logo").removeClass("regular");
      $("#header__logo").addClass("small");
    } else {
      $("#go-to-top").fadeOut(200);
      $("#header__top-bar").removeClass("hidden");
      $("#header__top-bar").addClass("visible");
      $("#header__nav__wrapper").removeClass("small");
      $("#header__nav__wrapper").addClass("regular");
      $("#header__logo").removeClass("small");
      $("#header__logo").addClass("regular");
    }
  }); // Sticky menus.

  $("#header__desktop").stick_in_parent();
  $("#header__nav-mobile").stick_in_parent();
  $("#go-to-top").click(function () {
    $("html, body").animate({
      scrollTop: 0
    }, 800);
    return false;
  });
});