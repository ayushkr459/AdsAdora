// mediumZoom('.zoom', {
//   margin:50
// });

$(document).ready(function () {
  $("#zoom1").on("click", function () {
    if ($(".enabled").length === 0) {
      $(".zoomContainer").show();
      $("#zoom1").elevateZoom({
        zoomType: "inner",
        cursor: "crosshair",
      });
      $(this).toggleClass("enabled");
    } else {
      $(this).toggleClass("enabled");
      $(".zoomContainer").hide();
    }
  });
});

$(document).ready(function () {

  // $("#zoom1").elevateZoom({
  //   zoomType: "inner",
  //   cursor: "cursor",
  // });

  // $("#zoom1").on("click", function () {
  //   if ($(".enabled").length === 0) {
  //     $(".zoomContainer").show();
  //     $("#zoom1").elevateZoom({
  //       zoomType: "inner",
  //       cursor: "crosshair",
  //       zoomWindowFadeIn: 500,
  //       zoomWindowFadeOut: 750,
  //     });
  //     $(this).toggleClass("enabled");
  //   } else {
  //     $(this).toggleClass("enabled");
  //     $(".zoomContainer").hide();
  //   }
  // });

  $("#flyers .owl-carousel").owlCarousel({
    loop: true,
    nav: true,
    dots: false,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 3,
      },
      1000: {
        items: 4,
      },
    },
  });
});

$(document).ready(function ($) {
  var owl = $("#owl-demo-2");
  owl.owlCarousel({
    autoplay: true,
    autoplayTimeout: 1000,
    autoplayHoverPause: true,
    items: 3,
    loop: true,
    center: false,
    rewind: false,
    mouseDrag: true,
    touchDrag: true,
    pullDrag: true,
    freeDrag: false,
    margin: 0,
    stagePadding: 0,
    merge: false,
    mergeFit: true,
    autoWidth: false,
    startPosition: 0,
    rtl: false,
    smartSpeed: 250,
    fluidSpeed: false,
    dragEndSpeed: false,
    responsive: {
      0: {
        items: 1,
        // nav: true
      },
      480: {
        items: 2,
        nav: false,
      },
      768: {
        items: 3,
        // nav: true,
        loop: false,
      },
      992: {
        items: 4,
        // nav: true,
        loop: false,
      },
    },
    responsiveRefreshRate: 200,
    responsiveBaseElement: window,
    fallbackEasing: "swing",
    info: false,
    nestedItemSelector: false,
    itemElement: "div",
    stageElement: "div",
    refreshClass: "owl-refresh",
    loadedClass: "owl-loaded",
    loadingClass: "owl-loading",
    rtlClass: "owl-rtl",
    responsiveClass: "owl-responsive",
    dragClass: "owl-drag",
    itemClass: "owl-item",
    stageClass: "owl-stage",
    stageOuterClass: "owl-stage-outer",
    grabClass: "owl-grab",
    autoHeight: false,
    lazyLoad: false,
  });

  $(".next").click(function () {
    owl.trigger("owl.next");
  });
  $(".prev").click(function () {
    owl.trigger("owl.prev");
  });
});
