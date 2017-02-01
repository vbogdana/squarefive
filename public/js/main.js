jQuery(document).ready(function($) {
  'use strict';

  // Toggle menu (Home page)
  $('div.rex-show-menu').on('click', 'button.toggle-menu', function(event) {
    event.preventDefault();
    var nav_container = $('div.nav-container');
    var txt = nav_container.hasClass('small-menu') ? 'ZATVORI MENI <i class="fa fa-angle-up"></i>' : ' MENI <i class="fa fa-angle-down"></i>';
    $(this).html(txt);
    nav_container.toggleClass('small-menu large-menu').removeClass('animated fadeIn slideInDown');
    if ( nav_container.hasClass('large-menu') ) {
      if( navigator.userAgent.toLowerCase().indexOf('firefox') > -1 ){
        nav_container.hide().slideDown(400, 'linear');
      }else{
        nav_container.addClass('animated slideInDown');
      }
    }else{
      nav_container.addClass('animated fadeIn');
      $('#socialProfileforTrigger').hide().removeClass('hidden').addClass('hidden');
    }
  });

  // Add active class to current page.
  var url = window.location.href.substr(window.location.href.lastIndexOf('/')+1);
  $('#navigation').find('a[href="'+url+'"]').addClass('active');

  // Close Menu on Outside Click
  $('body').on('click', 'section, footer', function(event) {
    //event.preventDefault();
    var nav_container = $('div.nav-container');
    if (nav_container.hasClass('large-menu')) {
      nav_container.toggleClass('small-menu large-menu').removeClass('animated fadeIn slideInDown');
      $('button.toggle-menu').html('PRIKAŽI MENI <i class="fa fa-angle-down"></i>');
      nav_container.addClass('animated fadeIn');
      $('#socialProfileforTrigger').hide().removeClass('animated fadeIn hidden').addClass('animated fadeIn hidden');
    }
    // Hide Social Profile on out Click
    if ( $('div.social').hasClass('active') && !$(event.target).is('div.share-button span') ) {
      share.close();
    }
    // Hide Social Profile on out Click
    if ( !$(event.target).hasClass('socialTrigger') ) {
      $('.socialProfileforTrigger').removeClass('fadeIn').addClass('hidden');
    }
  });

  $('header').on('click', function(event) {
    // Hide Social Profile on out Click
    if ( !$(event.target).closest('a.socialTrigger').length ) {
      $('.socialProfileforTrigger').removeClass('fadeIn').addClass('hidden');
    }
  });

  // Social Profile Show/hide
  $('.socialTrigger').on('click', function(event) {
    event.preventDefault();
    $(this).next('ul.socialProfileforTrigger').toggle().toggleClass('fadeIn hidden');
    if ( $(event.target).hasClass('main') || $(event.target).closest('a.socialTrigger').hasClass('main') ) {
      $('ul.socialProfileforTrigger.main').toggle().toggleClass('fadeIn hidden');
    }
  });

  //slider slider (Home page)
  $('#main-slider').owlCarousel({
    singleItem: true,
    autoPlay: 6000,
    pagination: true
  });

  //review slider (Home page)
  $( '#review-carousel').owlCarousel({
    items : 2,
    itemsDesktop : [1199,2],
    pagination: true,
    autoPlay: 4000
  });

  //single-events slider
  $( '#single-events-carousel').owlCarousel({
    singleItem: true,
    pagination: true,
    autoPlay: 4000
  });

  //Enable Masonry
  $(window).load(function() {
     var $container = $('.masonry-gallery');
     // initialize
     $container.masonry({
       columnWidth: 3,
       itemSelector: '.item'
     });
   });

  // Events page carousel
  $('#events-carousel').owlCarousel({
    //itemsDesktop: false,
    items : 2,
    itemsDesktop : [1199,3],
    itemsDesktopSmall :  [979,2],
    itemsTablet : [768,2],
    pagination: true
  });



  $('#navigation').slimmenu({
    resizeWidth: '768',
    collapserTitle: 'Main Menu',
    animSpeed: 'medium',
    easingEffect: null,
    indentChildren: false,
    childrenIndenter: '&nbsp;'
  });
  $('div.menu-collapser').on('click', function(event) {
    event.preventDefault();
    var $target = $(event.target);
    if ( !$target.is('div.collapse-button') && !$target.is('span.icon-bar') ) {
      $('#navigation').slideToggle();
    }
  });

  $('#navigation .submenu').find('span.sub-collapser').html('<span class="fa fa-sort-desc"></span>');
  $('#navigation').on('click', 'span.sub-collapser', function(event) {
    event.preventDefault();
    $(this).find('span').toggleClass('fa-sort-desc fa-sort-asc');
  });

  $('[data-toggle="tooltip"]').tooltip();

  if( $( window ).height() > 700 ){
    // sticky menu
    $('#sticky-menu').sticky();
  }

  // Helper class for hover effect on upcoming Events Section
  $('.rex-events, #events-carousel .items').on({
    mouseenter: function () {
      $(this).addClass('mouseover');
    },
    mouseleave: function () {
      $(this).removeClass('mouseover');
    }
  });

  if( $( window ).width() > 1024 ){
    // stellar prallax effect
    $.stellar();
    new WOW().init();
  }

  /*
   * About Section Tab
   */
  var totalSlide = $('#about-tab-images').find('img').length;
  $('#about-tab-nav').find('p span.total').text( '0' + totalSlide );

  var aboutImageSlider = $('#about-tab-images').slick({
    vertical: true,
    verticalSwiping: true,
    mobileFirst: true,
    nextArrow: $('#about-tab-nav .next'),
    prevArrow: $('#about-tab-nav .prev')
  });

  $('#tab-navigation').on('click', 'li', function(event) {
    $(this).siblings('li').removeClass('active');
    $(this).addClass('active');
    aboutImageSlider.slick('slickGoTo', $(this).index(), false );
  });

  // On before slide change
  aboutImageSlider.on('afterChange', function(event, slick, currentSlide, nextSlide){
    $('#about-tab-nav').find('p span.current').text( '0' + (currentSlide + 1));
    $('#tab-navigation').find('li').removeClass('active');
    $('#tab-navigation li').eq(currentSlide).addClass('active');
  });

  /*
   * Foods Menu Section Tab
   */
  // Copy each item inside tab-nav for showing on Smaller Devices
  var menuList;
  $.each( $('#foods-menu-nav div.menu-item'), function(index, el){
    menuList = $('#foods-menu-list div.rex-menu-list.item').eq(0).clone();
    menuList.removeClass('hidden').addClass('visible-xs visible-sm');
    $(el).append(menuList);
  });

  totalSlide = $('#foods-menu-list').find('div.item').length;
  $('#foods-tab-nav').find('p span.total').text( '0' + totalSlide );

  var foodsMenu = $('#foods-menu-list').slick({
    vertical: true,
    verticalSwiping: true,
    //autoplay: true,
    mobileFirst: true,
    nextArrow: $('#foods-tab-nav .next'),
    prevArrow: $('#foods-tab-nav .prev')
  });

  $('#foods-menu-nav').on('click', 'div.menu-item', function(event) {
    $('#foods-menu-nav').find('div.menu-item').removeClass('active animated zoomIn');
    $(this).addClass('active animated zoomIn');
    if( $( window ).width() > 992 ){
      foodsMenu.slick('slickGoTo', $(this).index(), false );
    }
  });

  // On before slide change
  foodsMenu.on('beforeChange', function(event, slick, currentSlide, nextSlide){
    $('#foods-tab-nav').find('p span.current').text( '0' + (nextSlide + 1));
    $('#foods-menu-nav').find('div.menu-item').removeClass('active animated zoomIn');
    $('#foods-menu-nav div.menu-item').eq(nextSlide).addClass('active animated zoomIn');
  });

  /*
   * Resturant Gallery Vertical Slider
   */
  totalSlide = $('#rex-resturant-gallery').find('img').length;
  $('#resturant-slide-navigation').find('p span.total').text( '0' + totalSlide );

  var resturantGallery = $('#rex-resturant-gallery').slick({
    vertical: true,
    verticalSwiping: true,
    mobileFirst: false,
    nextArrow: $('#resturant-slide-navigation .next'),
    prevArrow: $('#resturant-slide-navigation .prev'),
    responsive: [
      {
        breakpoint: 769,
        settings: {
          autoplay: true,
          vertical: false,
          verticalSwiping: false
        }
      }
    ]
  });

  // On before slide change
  resturantGallery.on('afterChange', function(event, slick, currentSlide, nextSlide){
    $('#resturant-slide-navigation').find('p span.current').text( '0' + (currentSlide + 1));
  });

  /*
   * Recipe Section Tab
   */
  var recipeList;
  var tabItems          = $('#rex-recipe-tab').find('.rex-tab-item');
  $.each( $('#rex-recipe-navigation li'), function(index, el){
    recipeList =  $('#rex-recipe-tab').find('div.rex-tab-item').eq(index).clone();
    recipeList.removeClass('hidden').addClass('visible-xs visible-sm');
    $(el).append(recipeList);
  });

  $('#rex-recipe-navigation').on('click', 'li', function(event){
    var recipe_target = $(this).data('target-recipe');
    $(this).siblings('li').removeClass('active');
    $(this).addClass('active');
    // Show Appropriate Recipe for Seleted Tab.
    $.each(tabItems, function(index, val) {
      $(val).removeClass('animated fadeInDown fadeOut slideInDown slideOutUp active hidden');
      if ( $(val).data('recipe') === recipe_target ) {
        $(val).show().addClass('animated fadeInRight');
      }else{
        $(val).addClass('animated fadeOut').hide();
      }
    });
  });
  
  var share = new Share('.share-button', {
    title: 'Share Button Multiple Element Test',
    ui: {
      flyout: 'top center',
      button_text: '<i class=\'fa fa-share-alt\'></i>share with friends',
    },
    networks: {
      facebook: {
        // app_id: 'insert your facebook app_id'
        // app_id: '102545783416972'
      },
      pinterest: {
        //enabled: false
      }
    }
  });
  
  $('a.prettyPhoto').prettyPhoto();

  /**
   * Smooth Scrooling Effect
   */
  $('a[href*=#]:not([href=#])').on('click', function() {
    // Return if it's a Tab Panel
    if ( $(this).closest('ul').hasClass('nav-tabs') ) {return;}
    // Add/Remove active class
    $(this).closest('ul').find('.active').removeClass('active');
    $(this).closest('li').addClass('active');

    if (location.pathname.replace(/^\//,'') === this.pathname.replace(/^\//,'') && location.hostname === this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        setTimeout(function(){
          $('div.rex-navbar').removeClass('open');
        }, 120);
        return false;
      }
    }
  });

  $('a[href=#]').on('click', function(e) {
    e.preventDefault();
  });

}); // DOM Ready