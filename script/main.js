$(document).ready(function () {


  //sliders
  
  $('#main-slider').flickity({
    fullscreen: true,
    lazyLoad: 1,
    wrapAround: true,
    prevNextButtons: false,
    percentPosition: false,
    setGallerySize: false
  })

  $('.category-slide').flickity({
    imagesLoaded: true,
    groupCells: '100%',
    dragThreshold: 5,
    cellAlign: 'left',
    wrapAround: true,
    prevNextButtons: true,
    percentPosition: true,
    pageDots: false,
    rightToLeft: false,
    autoPlay: false
  });

  $('.blog-slide').flickity({
    imagesLoaded: true,
    groupCells: '100%',
    dragThreshold: 5,
    cellAlign: 'left',
    wrapAround: true,
    prevNextButtons: true,
    percentPosition: true,
    pageDots: false,
    rightToLeft: false,
    autoPlay: false
  });


  //slider single product

  
  $('.product-main').flickity({
    cellAlign: "center",
    wrapAround: true,
    autoPlay: false,
    prevNextButtons:true,
    adaptiveHeight: true,
    imagesLoaded: true,
    lazyLoad: 1,
    dragThreshold : 15,
    pageDots: false,
    rightToLeft: false       

  });
  
  $('.products-nav').flickity({
    
      cellAlign: "left",
      wrapAround: true,
      autoPlay: false,
      prevNextButtons: true,
      asNavFor: ".product-main",
      percentPosition: true,
      imagesLoaded: true,
      pageDots: false,
      rightToLeft: false,
      contain: true
  
  });

  $('.galary-products-for').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    asNavFor: '.galary-products-nav',
    nextArrow: '<button type="button" class="slide-button next-button"><i class="fas fa-chevron-right"></i></button>',
    prevArrow: '<button type="button" class="slide-button prev-button"><i class="fas fa-chevron-left"></i></button>',

  });

  $('.galary-products-nav').slick({
    slidesToShow: 3,
    slidesToScroll: 3,
    infinite: true,
    asNavFor: '.galary-products-for',
    centerMode: true,
    focusOnSelect: true,
    nextArrow: '<button type="button" class="slide-button next-button"><i class="fas fa-chevron-right"></i></button>',
    prevArrow: '<button type="button" class="slide-button prev-button"><i class="fas fa-chevron-left"></i></button>',


  });

  var $easyzoom = $('.easyzoom').easyZoom();

  // Get an instance API
  var api = $easyzoom.data('easyZoom');


  //end slider



  //mobile menu
  $('#menu-bar').on('click', function () {
    isMenuOpen()
  })

  $('.mobile-menu-bg').on("click", function () {
    isMenuOpen();
  })

  function isMenuOpen() {
    if ($('html').hasClass('menu-open')) {
      $('#menu-bar').removeClass('invisible')
      $('.mobile-menu-wrapper').removeClass('open');
      $('html').removeClass('menu-open');
      $('body').removeClass('menu-open');
    } else {
      $('#menu-bar').addClass('invisible')
      $('.mobile-menu-wrapper').addClass('open');
      $('html').addClass('menu-open');
      $('body').addClass('menu-open');
    }
  }

  
  $('.dropdown-toggle').on('click', function(){

    if($(this).siblings('.mobile-dropdown').hasClass('active')){

      $(this).siblings('.mobile-dropdown').removeClass('active')

    }else{
      $(this).siblings('.mobile-dropdown').addClass('active')
    }
      
  })
  //end mobile menu

  $(window).scroll(function (event) {
    var scroll = $(window).scrollTop();
    var window_height = $( window ).height();
    var nav_fix = window_height / 3;


    if(scroll >nav_fix){
      $('.header-wrapper').addClass('stuck');
      $('header').css('height','100px');
    }else if(scroll == 0  && !$('html').hasClass('menu-open')){
      $('.header-wrapper').removeClass('stuck');
      $('header').css('height','');
    }
  });


  //scroll down
  $("#scroll-down").click(function(e) {
    e.preventDefault();

    $('html, body').animate({
        scrollTop: $(".section").offset().top-($( window ).height()/5)
    }, 500);
  });


})