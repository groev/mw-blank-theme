(function ($) {
  // menu
  $(".hamburger").click(function () {
    $(".main-nav").toggleClass("open");
    $("body").toggleClass("open");
  });
  $(".close").click(function () {
    $(".main-nav").toggleClass("open");
    $("body").toggleClass("open");
  });
})(jQuery);
