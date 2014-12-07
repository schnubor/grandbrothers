console.log('hello world'); 

$(window).scroll(function(){
  $('#right').css('top', window.scrollY + 'px');
});