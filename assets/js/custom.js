"use strict";

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
  }); // Sticky menus.

  $("#header__desktop").stick_in_parent();
  $("#header__nav-mobile").stick_in_parent();
  $("#go__top").click(function () {
    $("html, body").animate({
      scrollTop: 0
    }, 500);
    return false;
  }); //Dropdown Menu in Header

  $("#header__nav ul li.menu-item-has-children > a").click(function () {
    $(this).parent().siblings().find("ul").slideUp(300);
    $(this).next("ul").stop(true, false, true).slideToggle(300);
    return false;
  });
});