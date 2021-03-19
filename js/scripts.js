/*--------------------------------------
Header
-----------------------------------------------------*/
// add background color when scrolling some amount
$(document).ready(function() {
  $(window).scroll(function() {
    var scrollPos = $(document).scrollTop();

    if (scrollPos > 10) {
      $("header .middle-header").addClass("sticky");
      $(".adjusting-header-heigh").addClass("add-height");
    } else {
      $("header .middle-header").removeClass("sticky");
      $(".adjusting-header-heigh").removeClass("add-height");
    }
  });
});

//slider
$(document).ready(function() {
  $(".carousel-indicators li::firstchild").addClass("active");
});

/*--------------------------------------
End of Header
-------------------------------------*/
/*--------------------------------------
Footer
-------------------------------------*/
// to show the button after scrolling
// $(document).ready(function() {
//   $(window).scroll(function() {
//     var scrollPos = $(document).scrollTop();

//     if (scrollPos < 200) {
//       $(".back-to-top").removeClass("shown");
//     } else if (scrollPos >= 200) {
//       $(".back-to-top").addClass("shown");
//     }
//   });
// });
/*--------------------------------------
End of Footer
-------------------------------------*/
/*--------------------------------------
 Material List
-------------------------------------*/
//slide in animation
$(document).ready(function() {
  $(window).scroll(function() {
    
    var scrollPos = $(document).scrollTop();
    var clumn = $(".wp-block-image img").offset().top - 500; // .offset() ...
    // var clumn = $(".wp-block-image img").offset().top - 200; // .offset() ...

    if (scrollPos > clumn) {
      $(".pm-post .wp-block-columns img").addClass("come-in");
      $(".pm-post .wp-block-image img").addClass("come-in");
    }
  });
});

// read more toggle
$(document).ready(function() {
 
    $(".material-list .content .card .right-container .read-toggle").on(
      "click",
      function(e) {
        if (
          !$(this)
            .siblings(".right-container .more")
            .hasClass("shown")
        ) {
          $(this)
            .siblings(".right-container .more")
            .addClass("shown");
          $(this).text("Read Less");
        } else {
          $(this)
            .siblings(".right-container .more")
            .removeClass("shown");
          $(this).text("Read More");
        }
      }
    );
  
});
/*--------------------------------------
End of Material List
-------------------------------------*/

/*--------------------------------------
 Contact
-------------------------------------*/
// change iframe default width and height

// $(window).on("load", function() {
//   $(".contact-section .my-container .google-map iframe").removeAttr("width");
//   $(".contact-section .my-container .google-map iframe").removeAttr("height");
//   $(".contact-section .my-container .google-map iframe").attr("width", "100%");
//   $(".contact-section .my-container .google-map iframe").attr("height", "100%");
// });

/*--------------------------------------
End of Contact
-------------------------------------*/

/*--------------------------------------
Product page
-------------------------------------*/
//TODO product archive sidebar for accordion
$(document).ready(function() {
  $(".widget-1 h5.card-title").addClass("plus");
  $(".widget-2 h5.card-title").addClass("plus");
  $(".widget-3 h5.card-title").addClass("plus");

  $(".widget-1 h5.card-title").on("click", function(e) {
    if (
      !$(this)
        .siblings(".woocommerce-widget-layered-nav-list")
        .hasClass("show")
    ) {
      $(this)
        .siblings(".woocommerce-widget-layered-nav-list")
        .addClass("show");
      $(".widget-1 h5.card-title").removeClass("plus");
      $(".widget-1 h5.card-title").addClass("minus");
    } else {
      $(this)
        .siblings(".woocommerce-widget-layered-nav-list")
        .removeClass("show");
      $(".widget-1 h5.card-title").removeClass("minus");
      $(".widget-1 h5.card-title").addClass("plus");
    }
  });
  $(".widget-2 h5.card-title").on("click", function(e) {
    // event.preventDefault();
    // alert("hi");
    if (
      !$(this)
        .siblings(".woocommerce-widget-layered-nav-list")
        .hasClass("show")
    ) {
      $(this)
        .siblings(".woocommerce-widget-layered-nav-list")
        .addClass("show");
      $(".widget-2 h5.card-title").removeClass("plus");
      $(".widget-2 h5.card-title").addClass("minus");
    } else {
      $(this)
        .siblings(".woocommerce-widget-layered-nav-list")
        .removeClass("show");
      $(".widget-2 h5.card-title").removeClass("minus");
      $(".widget-2 h5.card-title").addClass("plus");
    }
  });
  $(".widget-3 h5.card-title").on("click", function(e) {
    if (
      !$(this)
        .siblings(".woocommerce-widget-layered-nav-list")
        .hasClass("show")
    ) {
      $(this)
        .siblings(".woocommerce-widget-layered-nav-list")
        .addClass("show");
      $(".widget-3 h5.card-title").removeClass("plus");
      $(".widget-3 h5.card-title").addClass("minus");
    } else {
      $(this)
        .siblings(".woocommerce-widget-layered-nav-list")
        .removeClass("show");
      $(".widget-3 h5.card-title").removeClass("minus");
      $(".widget-3 h5.card-title").addClass("plus");
    }
  });
});

/*--------------------------------------
End of Product page
-------------------------------------*/

/*--------------------------------------
Footer page
-------------------------------------*/
//message icon slide in
$(document).ready(function() {
  $(window).on("load", function() {
    setTimeout(function() {
      $(".message-button").addClass('come-in');
    }, 1000);
  });
 
    

});

/*--------------------------------------
End of Footer page
-------------------------------------*/