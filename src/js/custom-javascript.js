// Add your custom JS here.
// You can also pass an optional settings object
// below listed default settings
AOS.init({
  // Global settings:
  disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
  startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
  initClassName: 'aos-init', // class applied after initialization
  animatedClassName: 'aos-animate', // class applied on animation
  useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
  disableMutationObserver: false, // disables automatic mutations' detections (advanced)
  debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
  throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)
  

  // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
  offset: 120, // offset (in px) from the original trigger point
  delay: 200, // values from 0 to 3000, with step 50ms
  duration: 1000, // values from 0 to 3000, with step 50ms
  easing: 'ease', // default easing for AOS animations
  once: false, // whether animation should happen only once - while scrolling down
  mirror: false, // whether elements should animate out while scrolling past them
  anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation
});

var homepage = new Swiper('.homepage', {
  watchOverflow:true,
  loop: true,
  autoplay:true,
  zoom: true,
  effect: 'fade',
  fadeEffect: {
    crossFade: true
  },
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
});

var team = new Swiper('.team', {
  watchOverflow:true,
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  slidesPerView: 1,
  spaceBetween: 30,
  breakpoints: {
    1024: {
      slidesPerView: 3,
      spaceBetween: 10,
    },
  },
});
var x = document.getElementsByClassName("list-client-logo");

for(var i = 0; i < x.length; i++) {

	var el = x[i];
  
  var swiper = el.getElementsByClassName("swiper-container")[0];
  var nx = el.getElementsByClassName("swiper-button-next")[0];
  var pr = el.getElementsByClassName("swiper-button-prev")[0];

  new Swiper(swiper, {
    observer: true,
    observeParents: true,
    watchOverflow:true,
    slidesPerView: 5,
    slidesPerColumn: 4,
    slidesPerColumnFill: 'row',
    spaceBetween: 20,
    navigation: {
      nextEl: nx,
      prevEl: pr,
    },
  });
}

var x = document.getElementsByClassName("team-career-wrapper");

for(var i = 0; i < x.length; i++) {

	var el = x[i];
  
  var swiper = el.getElementsByClassName("swiper-container")[0];
  var nx = el.getElementsByClassName("swiper-button-next")[0];
  var pr = el.getElementsByClassName("swiper-button-prev")[0];

  new Swiper(swiper, {

    watchOverflow:true,
    slidesPerView: 1,
    spaceBetween: 30,
    breakpoints: {
      1024: {
        slidesPerView: 2,
        spaceBetween: 30,
      },
    },
    navigation: {
      nextEl: nx,
      prevEl: pr,
    },
  });
}


var swiper = new Swiper(".what-we-do", {
  observer: true,
  observeParents: true,
  watchOverflow:true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  slidesPerView: 1,
  spaceBetween: 30,
  breakpoints: {
    1024: {
      slidesPerView: 3,
      spaceBetween: 30,
    },
  },
});

jQuery("[data-trigger]").on("click", function(){
  var trigger_id =  jQuery(this).attr('data-trigger');
  jQuery(trigger_id).toggleClass("show");
  jQuery('body').toggleClass("offcanvas-active");
});

// close button 
jQuery(".btn-close").on('click', function(e){
  jQuery(".navbar-collapse").removeClass("show");
  jQuery("body").removeClass("offcanvas-active");
});


// init Masonry

jQuery(function ($) {
  $('.wrapper-plus').on('click', function (e) {
    e.preventDefault();
    $(this).closest('.card').toggleClass('active');
  });
  $('.readmore').on('click', function (e) {
    e.preventDefault();
    $(this).closest('.text-expandable').removeClass('wrap-content');
    $(this).hide();
  });
  if($('.section-element').length > 0) {
    // $.scrollify({
    //   section : ".section-element",
    //   sectionName : "section-name",
    //   scrollSpeed:1100,
    //   offset : 0,
    //   scrollbars:true,
    //   setHeights: false,
    //   overflowScroll: true,
    //   updateHash: true,
    //   touchScroll:true,
    //   interstitialSection:"#wrapper-navbar,#content,footer",
    //   afterRender:function() {
 
    //   }
    // });
    $(".item-team").on("click",function() {
      if (!$(this).hasClass("active") && !$( $(this).data("href")).hasClass("active")) {
        $('#list-team').find('.item-team').removeClass('active');
        $('.section-element').removeAttr('style');
        $(this).addClass('active');
        $($(this).data("href")).css({"position" : "static"});
        $($(this).data("href")).addClass("active");
        if ($($(this).data("href")).hasClass('staff-detail') ) {
          $($(this).data("href")).find('.item-team').addClass("active");
        }
        window.location.hash = $(this).data("href");

      } else {
        window.location.hash = "list-team";
        $('#list-team').find('.item-team').removeClass('active');
        $('.section-element').removeAttr('style');
        $($(this).data("href")).removeClass("active");
        $(this).removeClass('active');

      }
    });
    $(".close-btn").on("click",function() {
      window.location.hash = "list-team";

      $('.item-team').removeClass('active');
      $('.section-element').removeAttr('style');

    });
  }
  if($('.content-recruitment-tab').length > 0 && window.innerWidth < 992) {
    $('.tab-content-content-recruitment').hide();

    $('.tab-box-recruitment').find('.nav-link').on('click', function () {
        $('.tab-content-title-recruitment').show();
        $('.tab-content-content-recruitment').hide();
    });

    $('.tab-content-content-recruitment').find('.btn-close').on('click', function () {
      $('.tab-content-title-recruitment').show();
      $('.tab-content-content-recruitment').hide();
    });

    $('.content-recruitment-tab').find('.nav-link').on('click', function () {
      $('.tab-content-title-recruitment').hide();
      $('.tab-content-content-recruitment').show();
    });
  }

  $('#home_featured_section').mousemove(function(e){
    var movementStrength = 130;
    var height = movementStrength / $(window).height();
    var width = movementStrength / $(window).width();
    var pageX = e.pageX - ($(window).width() / 2);
    var pageY = e.pageY - ($(window).height() / 2);
    var newvalueX = width * pageX * -1 - (-200);
    var newvalueY = height * pageY * -1 - (0);
    var bgPosition = $(this).css('background-position').split(", ");
    bgPosition[1] = newvalueX+'px '+newvalueY+'px';
    $(this).css({
      'background-position': bgPosition
    });
    // console.log($(this).css('background-position'));
    // $(this).css('background-position', amountMovedX + 'px ' + amountMovedY + 'px');
  });

  var $grid = $('.grid').masonry({
    itemSelector: '.grid-item',
    percentPosition: true,
    columnWidth: '.grid-sizer'
  });
  
  // layout Masonry after each image loads
  $grid.imagesLoaded().progress( function() {
    $grid.masonry();
  });
});

function getScrollifySectionIndex(anchor){
  var idpanel = false;
  jQuery('.section-element').each(function(i){
      if( jQuery(this).data('section-name') == anchor.toString().replace(/#/g,"") ){
        idpanel = i;
      };
  });
  return idpanel;
};

const scrollElements = document.querySelectorAll(".counter");

const elementInView = (el, scrollOffset = 0) => {
  const elementTop = el.getBoundingClientRect().top;
 
  return (
    elementTop <= 
    ((window.innerHeight || document.documentElement.clientHeight) - scrollOffset)
  );
};

const hideScrollElement = (element) => {
  for(let n of scrollElements) {
    n.innerText = 0;
  }
};

const displayScrollElement = (element) => {
  // Main function
  let lengthOfEl;
  for(let n of scrollElements) {
    lengthOfEl++;
    if(lengthOfEl < scrollElements.length) {
      return;
    }
    if(n.innerText != 0) {
      return;
    }
    const updateCount = () => {
      const target = + n.getAttribute('data-target');
      const count = + n.innerText;
      const speed = 1000; // change animation speed here
      const inc = target / speed; 
      let timeout;
      if(target > 500) {
        timeout = 1;
      } else if(target > 300) {
        timeout = 10;
      } else if(target > 100) {
        timeout = 100;
      } else if(target > 50) {
        timeout = 150;
      } else if(target > 10) {
        timeout = 200;
      }else {
        timeout = 1000;
      }
      if(count < target) {
        n.innerText = Math.ceil(count + inc);
        setTimeout(updateCount, timeout);
      } else {
        n.innerText = target;
      }

    }
    updateCount();
  }
};

 
const handleScrollAnimation = () => {
  scrollElements.forEach((el) => {
    if (elementInView(el, 100)) {
      displayScrollElement(el);
    } else {
      // hideScrollElement(el);
    }
  })
}
window.addEventListener('scroll', () => {
  handleScrollAnimation();
});