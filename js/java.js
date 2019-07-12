// slider


$(document).ready(function(){
    $('.next').on('click', function(){
      var currentImg = $('.active');
      var nextImg = currentImg.next();
      var Fimage = $('#Firstimage');
  
      if(nextImg.length){
        currentImg.removeClass('active').css('z-index', -10);
        nextImg.addClass('active').css('z-index', 10);
      }else{
        currentImg.removeClass('active').css('z-index', -10);
        Fimage.addClass('active').css('z-index',10);
      }
    });
  
    $('.prev').on('click', function(){
      var currentImg = $('.active');
      var prevImg = currentImg.prev();
      var Limage = $('#Lastimage');
      if(prevImg.length){
        currentImg.removeClass('active').css('z-index', -10);
        prevImg.addClass('active').css('z-index', 10);
      }else{
        currentImg.removeClass('active').css('z-index', -10);
        Limage.addClass('active').css('z-index',10);
      }
    });
  });
  