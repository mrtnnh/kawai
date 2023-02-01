import './bootstrap';
import $ from 'jquery';
window.$ = $;

$(function(){
    $('.img_wrap img:not(:first-child)').hide();
       setInterval(function() {
         $('.img_wrap img:first-child').fadeOut('slow').next('img').fadeIn('slow').end().appendTo('.img_wrap');
       },5000);
  
       $(window).on('load scroll',function (){
        $('.animationDown, .animationUP, .animationSlide').each(function(){
          
          var target = $(this).offset().top;
          
          var scroll = $(window).scrollTop();
          
          var height = $(window).height();
          
          if (scroll > target - height){
  
            $(this).addClass('active');
          }else {
            $(this).removeClass('active');
          }
        });
      });
  
      });