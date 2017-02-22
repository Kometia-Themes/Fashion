var timeOut;

var disabled = function() {
  $('html').on('click', '.disabled', function(event){
     event.preventDefault();
  });
}

$(document).ready(function() {
  var win = $(window);
  // If a small mobile
  var isSmallMobile = function() {
    return ( win.width() < 320 ? true : false );
  }
  // Define max height for child elements
  var setHeightElement = function(boxArray, tallestElement) {
    for(var i = 0; i < boxArray.length; i++){
      $(boxArray[i]).css({'height' : tallestElement +'px' });
    }
    boxArray = [];
  }
  // Apply height 
  var alignHeights = function (){
    if(!isSmallMobile()) {
      var tallestElement = 0,
      currentElementHeight = 0,
      boxArray = [],
      container = $('.symmetrical-container'),
      boxArray = container.children('.symmetrical');
      for(var i = 0; i < boxArray.length; i++){
        $(boxArray[i]).css({'height' : 'auto'});
        currentElementHeight = $(boxArray[i]).outerHeight();
        if(currentElementHeight > tallestElement){
          tallestElement = currentElementHeight;
        }
      }
      setTimeout(setHeightElement(boxArray, tallestElement), 200);
    } else {
      $('.symmetrical').css({'height' : 'auto'});
    }
  }
  $('.topnav-menu a.multi').on('click', function(e) {
    $(this).next('.main-menu_menu').toggle();
    $(this).parent().siblings().find('.main-menu_menu').stop(true,false,true).css('display', 'none');
    $(this).siblings().children('.main-menu_menu').stop(true,false,true).css('display', 'none');
    e.stopPropagation();
    e.preventDefault();
  });

  if ($(window).width() >= 768) {
    $('.topnav-menu a.multi .main-menu_menu').on('mouseleave', function(e) {
      $(this).parent().find('.main-menu_menu').stop(true,false,true).css('display', 'none');
      e.stopPropagation();
      e.preventDefault();
    });
    $('ul.main-menu_menu').mouseleave(function() {
     $(this).hide();
    });
  }
 
   $(window).click(function() {
     $('ul.main-menu_menu' ).css({"display": "none"});
   });

  $("p:contains('<meta charset=\"utf-8\" \/>')").remove();

  var $adminBar = $('#admin-bar-iframe');

  if ($adminBar.length) {
    $('body').css({ position: 'initial' });
  }

  var setFooterHeight = function() {
    var newHeight = $('.footer > .container').outerHeight() + $('.footer > .info').outerHeight();
    $('.footer').css({ height: newHeight });
    $('body').css({ 'margin-bottom': newHeight + 40 });
  }

  var getWidth = function(square, rectangle, rectanglefull) {
    var square = $(square).width();
    var rectangle = $(rectangle).width();
    var rectanglefull = $(rectanglefull).width();

    $('.collection__item--square').css({ 'height': square })
    $('.collection__item--rectangle').css({ 'height': rectangle * .62 })
    $('.collection__item--rectangle--full').css({ 'height': rectanglefull * .52 })
  }

  var getProductHeight = function() {
    var type1 = $('.image_square');
    var type2 = $('.image_landscape');
    var type3 = $('.image_portrait');
    $(type1).css({ "height": type1.width() });
    $(type2).css({ "height": type2.width() * .62 });
    $(type3).css({ "height": type3.width() * 1.62 });
  }

    getWidth('.collection__item--square','.collection__item--rectangle', '.collection__item--rectangle--full');
    setFooterHeight();
    getProductHeight();

    $("li.dropdown-submenu > a").on("click", function() {
    $("li.dropdown-submenu").removeClass("open");

    if ($(this).parent("li.dropdown-submenu").hasClass("in-use")) {
      $(this).parents("li.dropdown-submenu").addClass("open");
      $(this).parent("li.dropdown-submenu").removeClass("open");
      $(this).parent("li.dropdown-submenu").removeClass("in-use");
      $(this).siblings('ul.dropdown-menu').children("li.dropdown-submenu").removeClass("open");
      $(this).siblings('ul.dropdown-menu').children("li.dropdown-submenu").removeClass("in-use");
    } else {
      $(this).parents("li.dropdown-submenu").addClass("open");
      $(this).parents("li.dropdown-submenu").addClass("in-use");
    }

    return false;
  });

  $('[data-toggle="tooltip"]').tooltip({ placement: "bottom" });
  var goldenHeight = $('.row-margin').width() / 1.62 ;
    alignHeights();

  $(window).resize(function() {
    var windowWidth = $(window).width();
    if (windowWidth >= 768) {
      $('ul.main-menu_menu').mouseleave(function() {
       $(this).hide();
      });
    }
    setFooterHeight();
    getProductHeight();
    alignHeights();
    getWidth('.collection__item--square','.collection__item--rectangle', '.collection__item--rectangle--full');
  });

  $('.slider').slick({
    autoplay: true,
    autoplaySpeed: 4000,
    prevArrow: $('.arrow-element.left-arrow'),
    nextArrow: $('.arrow-element.right-arrow')
  });

});
