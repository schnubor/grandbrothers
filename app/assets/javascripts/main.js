
// Initialization
// -----------------------------------------

$(document).ready(function(){
  console.log('Hello from grandbrothers.de');

  // Set heights
  $('#loading').height($(window).height());
  $('section').height($(window).height()-40);
});

// Page Loading
// -----------------------------------------

$(window).load(function(){
  $('#loading').fadeOut();

  $('nav li').each(function(index) {
    $(this).delay(100*index).queue(function(next){
      $(this).addClass('visible');
      next();
    });
  });
});

// Scrolling Effects
// -----------------------------------------

$(window).scroll(function(){
  // Padernoster effect
  $('#right').css('bottom', '-' + window.scrollY + 'px');
});

// Navigation
// -----------------------------------------

$(function() {
  $('a.page-scroll').bind('click', function(event) {
    var $anchor = $(this);
    $('html, body').stop().animate({
      scrollTop: $($anchor.attr('href')).offset().top-20
    }, 1000, 'easeInOutCubic');
    event.preventDefault();
  });
});

// News slider
// -----------------------------------------

$(function() {
  $('.slider').unslider({
    dots: true,
    delay: false
  });
});