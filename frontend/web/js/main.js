$(document).ready(function() {
// gallery tabs

function gallery_tabs() {
  $('.gallery__nav').find('.gallery__nav-item:eq(0)').addClass('js-nav-item-active');

  $('.js-nav-link').on('click', function (event) {
      event.preventDefault();
      
      $('.js-nav-item-active').removeClass('js-nav-item-active');
      $(this).parent().addClass('js-nav-item-active');
      $('.js-gallery-item').hide();
      $($(this).attr('href')).show();
  });

}

gallery_tabs();
// single album

function single_gallery() {
  $('.js-single-gallery').lightGallery({
    thumbnail:true,
    share:false,
    zoom:false,
    download:false,
    speed:900
  });
}

single_gallery();

// all albums


function all_galleries() {
  let allPhotos = $('#imageGallery').lightSlider({
        gallery:true,
        controls:false,
        item:1,
        loop:true,
        thumbItem:7,
        responsive : [
            {
                breakpoint:1400,
                settings: {
                    thumbItem:8
                  }
            },
            {
                breakpoint:1023,
                settings: {
                    thumbItem:6
                  }
            },
            {
                breakpoint:767,
                settings: {
                    thumbItem:5
                  }
            },
            {
                breakpoint:667,
                settings: {
                    thumbItem:4
                  }
            },
            {
                breakpoint:480,
                settings: {
                    thumbItem:3
                  }
            },
            {
                breakpoint:350,
                settings: {
                    thumbItem:2
                  }
            },
        ],
        thumbMargin:20,
        slideMargin:0,
        enableDrag: false,
        currentPagerPosition:'left',
        onSliderLoad: function(el) {
            el.lightGallery({
                selector: '#imageGallery .lslide',
                share:false,
                zoom:false,
                download:false
            });
        }   
    });  

    $('.js-all-gallery-prev').click(function(){
        allPhotos.goToPrevSlide(); 
    });
    $('.js-all-gallery-next').click(function(){
        allPhotos.goToNextSlide(); 
    });
}




function beautifyScroll() {
  $(".js-scroll-text").mCustomScrollbar({
    scrollButtons:{enable:true},
    theme:"light-thick",
    scrollbarPosition:"outside"
  });
}






function introSlider(argument) {
  $(".js-intro-slider").lightSlider({
      item: 1,
      loop:true,
      keyPress:true,
      controls: false,
      pager: false,
      // auto: true,
      speed: 600,
      pause: 4000,
      mode: 'fade'
  });
}

introSlider();

function animateFirstScreen() {

var elementIntro1 = $('.js-intro-logo');
    var elementIntro2 = $('.js-intro-action');
    var elementIntro3 = $('.js-scroll-bounce');

    var tlIntro = new TimelineMax();

      tlIntro
        .to(elementIntro1, 0.75, {autoAlpha: 1, ease: Power4.easeOut})
        .to(elementIntro2, 0, {autoAlpha: 1, ease: Power4.easeOut})
        .to(elementIntro3, 5, {autoAlpha: 1, ease: Power4.easeOut})

  
}

animateFirstScreen();


function animateLetters() {
  $('.js-letter-animate').textillate();
}


function shadowAppereance() {
    var shadowAppereanceHeader = new Waypoint({
        element: $('.intro + section'),
        handler: function(direction) {
         
          var elementIntro4 = $('.intro .js-shadow');

            $(elementIntro4).toggleClass('active');


    }, offset: '600px'
  });

  var shadowAppereanceSection = new Waypoint({
        element: $('.description + section'),
        handler: function(direction) {

          $('.description .js-shadow').toggleClass('active');

    }, offset: '700px'
  });

  var shadowAppereanceFooter = new Waypoint({
        element: $('.footer'),
        handler: function(direction) {
         
          // var elementIntro4 = $('.footer .js-shadow');

          // $(elementIntro4).toggleClass('active');

          animateLetters();

    }, offset: '1px'
  });

}

shadowAppereance();

function animateText() {
   var animate_text = new Waypoint({
          element: $('.description'),
          handler: function(direction) {

            $('.description__shadow').toggleClass('active');


            var elementDescription1 = $('.js-person-picture');
            var elementDescription2 = $('.js-scroll-text');
            var elementDescription3 = $('.js-person-caption');
            var elementDescription4 = $('.js-person-backside');
            
            
            var tlIntro = new TimelineMax();

              tlIntro
                .to(elementDescription1, 1, {autoAlpha: 1, ease: Power4.easeOut, delay:0})
                .to(elementDescription2, 12, {autoAlpha: 1, ease: Power4.easeOut, delay:0})
                .to(elementDescription3, 1, {autoAlpha: 1, ease: Power4.easeOut, delay:1})
                .to(elementDescription4, 0.1, {"backgroundPosition": "right bottom", ease: Power4.easeOut})
                
         
      }, offset: '200px'
    });
}

animateText();



   var animate_text = new Waypoint({
          element: $('.description'),
          handler: function(direction) {

            $('.description__shadow').toggleClass('active');

            var elementDescription1 = $('.js-scroll-text');
            var elementDescription2 = $('.js-person-picture');
            var elementDescription3 = $('.js-person-caption');
            var elementDescription4 = $('.js-person-backside');
            
            
            var tlIntro = new TimelineMax();

              tlIntro
                .to(elementDescription1, 0.5, {autoAlpha: 1, ease: Power4.easeOut, delay:0})
                .to(elementDescription2, 0.5, {autoAlpha: 1, ease: Power4.easeOut, delay:0})
                .to(elementDescription3, 0, {autoAlpha: 1, ease: Power4.easeOut, delay:0})
                .to(elementDescription4, 0, {"backgroundPosition": "right top", "backgroundColor": "#ffcd05", ease: Power4.easeOut})
                
         
      }, offset: '200px'
    });




// function textTyping() {
//   var postText = $('.js-animate-text');

//   postText.html( postText.html().replace(/./g, "<span>$&</span>").replace(/\s/g, "&nbsp;"));

//   TweenMax.to(postText, 0, {autoAlpha: 1, ease: Power4.easeOut});
//   TweenMax.staggerFromTo(postText.find("span"), 0.09, {autoAlpha:0, scale:1.25}, {autoAlpha:2, scale:1}, 0.03);

 

// }


 $(".js-scroll-text").click(function(){
        // textTyping();
        beautifyScroll();
    });



function animateGalleries() {
   var animate_galleries = new Waypoint({
          element: $('.gallery'),
          handler: function(direction) {


            var elementGalleryTitle1 = $('.js-nav-item').eq(0);
            var elementGalleryTitle2 = $('.js-nav-item').eq(1);

            var tlTitles = new TimelineMax();


            tlTitles
              .to(elementGalleryTitle1, 0, {x: 600, autoAlpha: 1, ease: Power4.easeOut})
              .to(elementGalleryTitle2, 0, {x: -600, autoAlpha: 1, ease: Power4.easeOut})


            var elementAlbum1 = $('.js-album-item');
            // var elementAlbum2 = $('.js-nav-item').eq(1);
            // var elementAlbum3 = $('.js-gallery-item');
            // var elementAlbum4 = $('.js-all-gallery-prev');
            // var elementAlbum5 = $('.js-all-gallery-next');
            // var elementAlbum6 = $('.js-gallery-item .lSGallery');
            

                TweenMax.staggerTo(elementAlbum1, 0.25, {autoAlpha: 1, ease: Power4.easeIn}, 0.33);
                // .to(elementGallery2, 0, {x: -600, autoAlpha: 1, ease: Power4.easeOut})
                // .to(elementGallery3, 0, {autoAlpha: 1, ease: Power4.easeOut, delay:1})
                // .to(elementGallery4, 0, {x: 500, ease: Power4.easeOut, delay:1})
                // .to(elementGallery5, 0, {x: -500, ease: Power4.easeOut, delay:0})
                // .to(elementGallery6, 1, {autoAlpha: 1, ease: Power4.easeOut, delay:1})
         
      }, offset: '200px'
    });
}

animateGalleries();


function animateAlbums() {
  $( ".gallery__nav-link--active" ).one( "click", function() {
            var elementGallery4 = $('.js-all-gallery-prev');
            var elementGallery5 = $('.js-all-gallery-next');
            var elementGallery6 = $('.js-gallery-item .lSGallery');
            
            var tlGallery = new TimelineMax();

              tlGallery
                .to(elementGallery4, 0, {x: 500, ease: Power4.easeOut, delay:0.5})
                .to(elementGallery5, 0, {x: -500, ease: Power4.easeOut, delay:0})
                .to(elementGallery6, 1, {autoAlpha: 1, ease: Power4.easeOut, delay:1})

          all_galleries();


            // if($(window).width() < 1024) {
            //   tlGallery
            //     .to(elementGallery1, 0, {x: 1600, y:2200, autoAlpha: 1, ease: Power4.easeOut})
            //     .to(elementGallery2, 0, {x: -1600, autoAlpha: 1, ease: Power4.easeOut})
            // } 

         
    });
}

animateAlbums();


function animateTagline() {
  $('.tagline').eq(0).addClass('first');
  var animate_galleries = new Waypoint({
          element: $('.tagline'),
          handler: function(direction) {
            $('.tagline .title').toggleClass('lighter');
      }, offset: '100px'
    });
}

animateTagline();

function animateFooter() {

  var animate_footer = new Waypoint({
          element: $('.footer'),
          handler: function(direction) {
            var elementFooter1 = $('.js-intro-action-footer');

             var tlFooter = new TimelineMax();

              tlFooter
                .to(elementFooter1, 0, {autoAlpha: 1, ease: Power4.easeOut})

      }, offset: '200px'
    });
}

animateFooter();


// function stickyShadow() {
//   var sticky_shadow = new Waypoint({
//           element: $('.sticky-shadow'),
//           handler: function(direction) {
//             $('.js-gallery-shadow').toggleClass('active');
//       }, offset: '1px'
//     });
// }

// stickyShadow();


});

