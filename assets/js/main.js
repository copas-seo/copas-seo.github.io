$(document).ready(function () {

  $(".icon-menu").click(function () {
    $(".header-top").addClass("nav")
  });
  $(".icon-close").click(function () {
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