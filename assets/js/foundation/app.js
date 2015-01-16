;(function ($, window, undefined) {
  'use strict';

  var $doc = $(document),
      Modernizr = window.Modernizr;

  $(document).ready(function() {
      $.fn.foundationAlerts           ? $doc.foundationAlerts() : null;
      $.fn.foundationButtons          ? $doc.foundationButtons() : null;
      $.fn.foundationAccordion        ? $doc.foundationAccordion() : null;
      $.fn.foundationNavigation       ? $doc.foundationNavigation() : null;
      $.fn.foundationTopBar           ? $doc.foundationTopBar() : null;
      $.fn.foundationCustomForms      ? $doc.foundationCustomForms() : null;
      $.fn.foundationMediaQueryViewer ? $doc.foundationMediaQueryViewer() : null;
      $.fn.foundationTabs             ? $doc.foundationTabs({callback : $.foundation.customForms.appendCustomMarkup}) : null;
      $.fn.foundationTooltips         ? $doc.foundationTooltips() : null;


      $('input, textarea').placeholder();
  });

  // UNCOMMENT THE LINE YOU WANT BELOW IF YOU WANT IE8 SUPPORT AND ARE USING .block-grids
  // $('.block-grid.two-up>li:nth-child(2n+1)').css({clear: 'both'});
  // $('.block-grid.three-up>li:nth-child(3n+1)').css({clear: 'both'});
  // $('.block-grid.four-up>li:nth-child(4n+1)').css({clear: 'both'});
  // $('.block-grid.five-up>li:nth-child(5n+1)').css({clear: 'both'});

  // Hide address bar on mobile devices
  if (Modernizr.touch) {
    $(window).load(function () {
      setTimeout(function () {
        window.scrollTo(0, 1);
      }, 0);
    });
  }
  //navigation functionality
  if (!Modernizr.touch || !navigator.userAgent.match(/Windows Phone/i)) {

    $('.top-bar .has-dropdown').hover(function () {
        $(this).find('> ul').show();
      }, function () {
        $(this).find('> ul').hide();
      });
  }
  // Slider Controllers
  (function(){
      /mobile/i.test(navigator.userAgent) && !location.hash && setTimeout(function () {
      if (!pageYOffset) window.scrollTo(0, 1);
    }, 1000);
      var options = {
        nextButton: true,
        prevButton: true,
        animateStartingFrameIn: true,
        transitionThreshold: 500,
        preloader: true,
        preloadTheseFrames: [1,2,3],
        preloadTheseImages: [
          "../../img/slider-imgs/bg1.jpg",
          "../../img/slider-imgs/bg2.jpg",
          "../../img/slider-imgs/bg3.jpg",
          "../../img/slider-imgs/bg4.jpg"
        ],
        fallback: {
                theme: "slide",
                speed: 500
            }
      };

      var sequence = $("#sequence").sequence(options).data("sequence"),
          $slides = $('#sequence-slides'), counter = '' ;

          if(sequence){

             sequence.beforeFirstFrameAnimatesIn= function(){
                $slides.find('.slider-bg').each(function(i){
                  counter = ++i;
                  $(this).addClass('header-' + counter);
                });
              };

          }
          else{
            return;
          }


  })();

  // Recent Articles Hover Direction
  (function(){
    $('#da-thumbs > li').hoverdir();
  })();

  //if (Modernizr.touch) {}

//THIS HANDLES THE TWITTER FEED AT THE BOTTOM OF THE PAGE
(function(){
  $('#twitter-feed').jtwt({
    count : 2, // The number of displayed tweets. Default is 5.
    username : 'envato', // Your username on Twitter
    image_size : 0, // The size of your avatar. 0 means "no avatar". Default is 48.
    loader_text : 'loading tweets', // The text which be displayed by loading the tweets.
    convert_links : 1 // Choose if the links and replies in your tweets to be converted in clickable links. 0 means no, 1 means yes.
  });
})();

//orbit slider for the blog/ single post sliders
$('#featured').orbit({
     animation: 'horizontal-push',                  // fade, horizontal-slide, vertical-slide, horizontal-push
     animationSpeed: 800,                // how fast animtions are
     timer: true,        // true or false to have the timer
     resetTimerOnClick: false,           // true resets the timer instead of pausing slideshow progress
     advanceSpeed: 4000,     // if timer is enabled, time between transitions
     pauseOnHover: false,      // if you hover pauses the slider
     startClockOnMouseOut: false,    // if clock should start on MouseOut
     startClockOnMouseOutAfter: 1000,    // how long after MouseOut should the timer start again
     directionalNav: true,     // manual advancing directional navs
     captions: true,       // do you want captions?
     captionAnimation: 'fade',     // fade, slideOpen, none
     captionAnimationSpeed: 800,   // if so how quickly should they animate in
     bullets: true,       // true or false to activate the bullet navigation
     bulletThumbs: false,    // thumbnails for the bullets
     bulletThumbLocation: '',    // location from this file where thumbs will be
     afterSlideChange: function(){},   // empty function
     fluid: true // or set a aspect ratio for content slides (ex: '4x3')
});
//THIS HANDLES THE WORK/ PORTFOLIO PAGE
(function(){

if($('#work-container').length && $().isotope()){
    var $filters= $('#filters'),
      $container = $('#work-container');

      $('ul.work-list').on('mouseenter','.element', function(){
        //when i hover over the .element change the opacity of the other elements
          $(this)
            .css({'opacity': 1})
              .siblings()
                .css({'opacity': 0.7});
        });
      $('ul.work-list').on('mouseleave',function () {
        //reset the opacity
        $(this).children().fadeTo("fast", 1);
      });


  $container.imagesLoaded( function(){
    $container.isotope({
      // options...
      resizable: false,
      itemSelector : '.element',
      // set columnWidth to a percentage of container width
      masonry: { columnWidth : 1 }
    });
  });
  // update columnWidth on window resize
$(window).smartresize(function(){
  $container.isotope({
    // update columnWidth to a percentage of container width
    masonry: { columnWidth: 1}
  });
});

  $filters.find('a').click(function(){
    var $this = $(this), selector = $this.attr('data-filter');
    //checked if already has a class selected and do nothing
    if($this.hasClass('selected')){
      return false;
    }
    //checked if the one that i'm clickin doesn't have the class then find the one that has the class
    //and removed the class after that
    $this.parents($filters).find('.selected').removeClass('selected');
    //Just add the class selected to the new item
    $this.addClass('selected');

    $container.isotope({
      filter: selector
    });
    return false;
  });
}

})();

//animate the filter section in the portfolio/work
//when it's clicked animate the #filter id
//fadeIn the 1st and delay then 2nd ...
$('#filter-animate').on('click', function(e){
  var delayLi = '';
  $('#filters li').each(function(index){
    delayLi = Math.floor(Math.random() * (1400 - 900) + 900);
    $(this).delay(delayLi).animate({
      opacity: 1
    }, 700);
  });
  e.preventDefault();
  $(this).attr("disabled","disabled");
});



})(jQuery, this);