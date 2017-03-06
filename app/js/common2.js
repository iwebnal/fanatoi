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
  
  $('.az-tabs>li a').click(function(){
    $('.az-tabs>li').removeClass('active');
    $(this).parents("li").addClass('active');
    $('.az-tab-cont>li').fadeOut(0);
    $($(this).attr('href')).fadeIn(0);
    return false;
  });

  function az_validateEmail(email2) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email2);
  }

  $('.email').keyup(function(){
    if(!az_validateEmail($(this).val())){
      $(this).parent().addClass('error');
    } else{
      $(this).parent().removeClass('error');
    }
    if($(this).val().length == 0){
      $(this).parent().removeClass('error');
    }
  });

  jQuery("#az-slider").slider({
    min: parseInt($("input#minCost").val()),
    max: $("input#maxCost").val(),
    values: [$("input#minCost").val(),$("input#maxCost").val()],
    range: true,
    stop: function(event, ui) {
      // alert(1);
      jQuery("input#minCost").val(jQuery("#az-slider").slider("values",0)).width((jQuery("input#minCost").val().length+1)*8);
      jQuery("input#maxCost").val(jQuery("#az-slider").slider("values",1)).width((jQuery("input#maxCost").val().length+1)*8);
      },
      slide: function(event, ui){
      jQuery("input#minCost").val(jQuery("#az-slider").slider("values",0)).width((jQuery("input#minCost").val().length+1)*8);
      jQuery("input#maxCost").val(jQuery("#az-slider").slider("values",1)).width((jQuery("input#maxCost").val().length+1)*8);
      }
  });

  if($("input#minCost").length>0&&$("input#maxCost").length>0){
    $("input#minCost").width((jQuery("input#minCost").val().length+1)*8);
    $("input#maxCost").width((jQuery("input#maxCost").val().length+1)*8);
  }

  $(".az-filter-title").click(function(){
    if(window.matchMedia( "(max-width: 768px)" ).matches){
      $(this).parent('.az-filter').toggleClass('open');
      $(this).next('div').slideToggle(300);
    }
  });
  $(".az-order-list>div").click(function(){
    $(this).children('span:nth-child(5)').slideToggle(300);
    // alert($(this).children('td:nth-child(5)').width());
  });
  
});