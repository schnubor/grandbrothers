
// Initialization
// -----------------------------------------

$(document).ready(function(){
  console.log('DOM ready');

  // Set heights
  $('#loading').height($(window).height());
  $('.welcome').height($(window).height()-40);
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