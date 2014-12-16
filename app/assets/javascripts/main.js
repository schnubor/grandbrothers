
// Initialization
// -----------------------------------------

$(document).ready(function(){
  console.log('DOM ready');

  // Set heights
  $('.welcome, #loading').height($(window).height());
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

  height = $('#left').height();
  difference = height - (window.scrollY + $(window).height());
  console.log(difference);

  if(difference <= 50){
    $('footer').css('bottom', '-'+difference);
  }
});