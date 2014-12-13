$(document).ready(function(){
  console.log('DOM ready');

  // Set heights
  $('.welcome, #loading').height($(window).height());
});

$(window).load(function(){
  $('#loading').fadeOut();

  $('nav li').each(function(index) {
    $(this).delay(100*index).queue(function(next){
      $(this).addClass('visible');
      next();
    });
  });
});

$(window).scroll(function(){
  $('#right').css('bottom', '-' + window.scrollY + 'px');
});