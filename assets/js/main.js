$(document).ready(function () {

  $(".header-icon").click(function () {
    $(".header-top").addClass("nav")
  });
  $(".header-close").click(function () {
    $(".header-top").removeClass("nav")
  });

  $(window).on('scroll', function () {
    if ($(window).scrollTop()) {
      $(".header-sticky").addClass("sticky");
    } else {
      $(".header-sticky").removeClass("sticky");
    }
  })
});