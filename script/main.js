$(document).ready(function () {

  var slickResponsive = {
    responsive: [{
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,

        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  }

  $('.mySlider').slick({
    dots: true,
    infinite: true,
    autoplay: true,
    autoplaySpeed: 2000,

  });

  $('.category-slide').slick({
    speed: 300,
    slidesToShow: 2,
    slidesToScroll: 2,
    centerMode: true,
    variableWidth: true,
    autoplay: false,
    nextArrow: '<button type="button" class="slide-button next-button"><i class="fas fa-chevron-right"></i></button>',
    prevArrow: '<button type="button" class="slide-button prev-button"><i class="fas fa-chevron-left"></i></button>',



  });

  // $('.blog-slide').slick({
  //   speed: 300,
  //   slidesToShow: 1,
  //   centerMode: true,
  //   variableWidth: true,
  //   nextArrow: '<button type="button" class="slide-button next-button"><i class="fas fa-chevron-right"></i></button>',
  //   prevArrow: '<button type="button" class="slide-button prev-button"><i class="fas fa-chevron-left"></i></button>',


  // });

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

  $('.flickity-slide').flickity({
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

  //mobile menu
  $('#menu-bar').on('click', function () {
    isMemenuOpen()
  })

  $('.mobile-menu-bg').on("click", function () {
    isMemenuOpen();
  })

  function isMemenuOpen() {
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

})