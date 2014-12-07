$(document).ready(function(){
  console.log('DOM ready');

  // Set heights
  $('.welcome').height($(window).height());
});

$(window).scroll(function(){
  $('#right').css('bottom', '-' + window.scrollY + 'px');
});