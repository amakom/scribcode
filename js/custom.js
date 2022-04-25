$(document).ready(function () {
  $(window).on("scroll", function () {
    if ($(window).scrollTop() >= 10) {
      $(".navbar").addClass("compressed");
      $(".navbar-brand").addClass("black");
      $(".navbar-light .navbar-nav .nav-link").addClass("color");
      $(".fa-bars").addClass("icons");
    } else {
      $(".navbar").removeClass("compressed");
      $(".navbar-brand").removeClass("black");
      $(".navbar-light .navbar-nav .nav-link").removeClass("color");
      $(".fa-bars").removeClass("icons");
    }
  });
});

$(window).scroll(function () {
  $("nav").toggleClass("scrolled", $(this).scrollTop() > 650);
});
