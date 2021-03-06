/*--------------------------------------
Header
-----------------------------------------------------*/

//to close an open collapsed nav when clicking the element.
$(document).ready(function() {
  $(".nav-link").click(function() {
    $(".navbar-collapse").collapse("hide");
    $("body").removeClass("sidebar-margin");
    $(".sidenav-backdrop").removeClass("show");
  });
});
//get back the screen from shrinked
$(document).ready(function() {
  $(".navbar-toggler").click(function(event) {
    // var clickover = $(event.target);
    var _opened = $("#navbarNavAltMarkup").hasClass("show");
    if (_opened === true) {
      $("body").removeClass("sidebar-margin");
      $(".sidenav-backdrop").removeClass("show");
    }
  });
});
//to close an open collapsed nav when clicking outside of the nav elements.
$(document).ready(function() {
  $(document).click(function(event) {
    var clickover = $(event.target);
    var _opened = $("#navbarNavAltMarkup").hasClass("show");
    if (_opened === true && !clickover.hasClass("navbar-toggler")) {
      $(".navbar-toggler").click();
      $("body").removeClass("sidebar-margin");
      $(".sidenav-backdrop").removeClass("show");
    }
  });
});


//slider
$(document).ready(function() {
 $('.carousel-indicators li::firstchild').addClass('active');
});

/*--------------------------------------
End of Header
-------------------------------------*/
/*--------------------------------------
Footer
-------------------------------------*/
// to show the button after scrolling
$(document).ready(function() {
  $(window).scroll(function() {
    var scrollPos = $(document).scrollTop();

    if (scrollPos < 200) {
      $(".back-to-top").removeClass("shown");
    } else if (scrollPos >= 200) {
      $(".back-to-top").addClass("shown");
    }
  });
});
/*--------------------------------------
End of Footer
-------------------------------------*/
/*--------------------------------------
 Material List
-------------------------------------*/

// TODO
$(document).ready(function() {
 $('.material-list .content .card .right-container .read-toggle').on('click',function(){
   if(!$('.material-list .content .right-container .more').hasClass('shown')){
     $('.material-list .content .right-container .more').addClass('shown');
     $('.material-list .content .right-container .read-toggle').replaceWith('<div class="read-toggle">Read Less</div>');
   }else if($('.material-list .content .right-container .more').hasClass('shown')){
     alert('ge');
    $('.material-list .content .right-container .more').removeClass('shown');
    $('.material-list .content .right-container .read-toggle').replaceWith('<div class="read-toggle">Read More</div>');
   }
 });
});

/*--------------------------------------
End of Material List
-------------------------------------*/

/*--------------------------------------
 Contact
-------------------------------------*/
// change iframe default width and height

  $(window).on("load", function() {
    $(".contact-section .my-container .google-map iframe").removeAttr("width");
    $(".contact-section .my-container .google-map iframe").removeAttr("height");
    $(".contact-section .my-container .google-map iframe").attr("width", "100%");
    $(".contact-section .my-container .google-map iframe").attr("height", "100%");
  });


/*--------------------------------------
End of Contact
-------------------------------------*/




/*--------------------------------------
Gallery page
-------------------------------------*/

// camera js
$(document).ready(function() {
  $('#gallery-camera_wrap_3').camera({
    height: '40%',
    hover: true,
    time:1000,
    pagination: false,
    thumbnails: true,
    fx: 'random',
    // imagePath: '../images/',
    onLoaded: function(){
      var slide = jQuery('.camera_target .cameraSlide.cameranext').index();
        console.log(slide);
       
    }        
});
});

/*--------------------------------------
End of Gallery page
-------------------------------------*/