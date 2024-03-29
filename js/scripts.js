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


// Setting for mobile menu start
$(document).ready(function() {
  $(".prod-menu")
    .on("mouseenter", function() {
      $(".prod-dropdown").addClass("show");
    })
    .on("mouseleave", function() {
      $(".prod-dropdown").removeClass("show");
    });
 
    
});


/* Set the width of the side navigation to 250px and the left margin of the page content to 250px and add a black background color to body */
$(document).ready(function() {
$(".open").on("click",function() {
  $("#mySidenav").css("width","100%");
  $("#main").css("margin-left","100%");
  $("#mySidenav").addClass("side-show")
 
})
});
$(document).ready(function() {
$(".closebtn").on("click",function() {
  $("#mySidenav").css("width","0px");
  $("#mySidenav").removeClass("side-show");
  $("#main").css("margin-left","0px");
})
});

/* Set the width of the side navigation to 0 and the left margin of the page content to 0, and the background color of body to white */
// End of mobile menu 

$(document).ready(function() {
  $(".sidenav .card .title")
    .on("mouseenter", function() {
      $(this).children().addClass("show");
    })
    .on("mouseleave", function() {
      $(this).children().removeClass("show");
    });
 
    
});
//to close an open collapsed nav when clicking outside of the nav elements.
$(document).ready(function() {
  $(document).click(function(event) {
    var clickover = $(event.target);
    var _opened = $("#mySidenav").hasClass("side-show");
    if (_opened === true && !clickover.hasClass(".sidenav")) {
      // $("#mySidenav").css("width","0px");
      // $("#main").css("margin-left","0px");
    }
  });
});

/*--------------------------------------
End of Header
-------------------------------------*/
/*--------------------------------------
Footer
-------------------------------------*/

/*--------------------------------------
End of Footer
-------------------------------------*/
/*--------------------------------------
 Material List
-------------------------------------*/
//slide in animation
$(document).ready(function() {
if (window.location.href === "http://medproducts.goopter.com/our-product-materials")
{
  $(window).scroll(function() {
    var scrollPos = $(document).scrollTop();

    var clumn = $(".wp-block-image img").offset().top - 500;
    if (scrollPos > clumn) {
      $(".pm-post .wp-block-columns img").addClass("come-in");
      $(".pm-post .wp-block-image img").addClass("come-in");
    }
  });
}
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
Product page
-------------------------------------*/
//product archive sidebar for accordion
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
      $(".message-button").addClass("come-in");
    }, 1000);
  });
});

// to show the button after scrolling
$(document).ready(function() {
  $(window).scroll(function() {
    var scrollPos = $(document).scrollTop();

    if (scrollPos < 100) {
      $(".back-to-top").removeClass("show");
    } else if (scrollPos >= 100) {
      $(".back-to-top").addClass("show");
    }
  });
});

/*--------------------------------------
End of Footer page
-------------------------------------*/
