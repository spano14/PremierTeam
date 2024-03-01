jQuery(document).ready(function ($) {
  var header = $("nav#header .container");
  var initialTranslateY = 0;
  var maxTranslateY = 16;
  var scrollThreshold = 25;
  var translateY = 0;

  $(window).scroll(function () {
    var scrollTop = $(this).scrollTop();
    translateY = Math.min(
      (scrollTop / scrollThreshold) * maxTranslateY,
      maxTranslateY
    );

    header.css({
      transform: "translate3d(0px, " + translateY + "px, 0px)",
    });

    if (scrollTop > scrollThreshold) {
      header.css("background-color", "rgba(49, 58, 72, 0.85)");
    } else {
      header.css("background-color", "transparent");
    }
    console.log(scrollThreshold);
  });
});
