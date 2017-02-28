$(function() {
	// alert(1);
	$('.az-co').click(function(){
      $(this).toggleClass('az-close').next('.az-menu').slideToggle(300);
  });

  $('.az-menu>li>a').click(function(){
      if(window.matchMedia( "(max-width: 768px)" ).matches){
          if($(this).next('ul').length>0&&$(this).next('ul').css('display')=='none'){
              $('.az-menu>li>a').removeClass('active')
              $('.az-menu>li>a+ul').removeClass('active').slideUp(300);
              $(this).toggleClass('active').next('ul').slideToggle(300);
              return false;
          }else if($(this).next('ul').length>0&&$(this).next('ul').css('display')=='block'){
              $(this).toggleClass('active').next('ul').slideToggle(300);
              return false;
          }
      } else if (window.matchMedia( "(min-width: 768px)" ).matches && window.matchMedia( "(max-width: 1200px)" ).matches){
          if($(this).hasClass('active')){
              $(this).removeClass('active');
              return false;
          } else {
              $('.az-menu>li>a').removeClass('active');
              $(this).addClass('active');
              if($(this).next('ul').length>0){
                return false;
              }
          }
      } else{
        if($(this).next('ul').length>0){
          return false;
        }
      }
      // return false;
  });

  $('.selectpicker').selectpicker();

  $('.popup-with-move-anim').magnificPopup({
      type: 'inline',
      autoFocusLast: false,
      fixedContentPos: true,
      fixedBgPos: true,

      overflowY: 'auto',

      closeBtnInside: true,
      preloader: false,
      
      midClick: true,
      removalDelay: 300,
      mainClass: 'my-mfp-slide-bottom',
      closeMarkup: "<button class='az-close-btn mfp-close'></button>"
  });

  $(".phone").mask("+ 7 ( 000 ) 000 00 00");
  
});