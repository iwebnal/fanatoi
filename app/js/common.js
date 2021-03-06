$(function() {

    // alert(1);
	
    //************* MagnificPopup ***********

	$('.popup-with-zoom-anim').magnificPopup({
        type: 'inline',

        fixedContentPos: false,
        fixedBgPos: true,

        overflowY: 'auto',

        closeBtnInside: true,
        preloader: false,
        
        midClick: true,
        removalDelay: 300,
        mainClass: 'my-mfp-zoom-in'
    });

    //***************************************
    
     $('.ah-slider').owlCarousel({
        loop: true,
        margin:0,
        nav: true,
        dots: true,
        navText:['<span class="arrow-left"></span>','<span class="arrow-right"></span>'],
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
        
    });

    $('.ah-cardslider').owlCarousel({
        items:1,
        loop:false,
        center:true,
        margin:0,
        nav: true,
        navText:['<span class="arrow-left1"></span>','<span class="arrow-right1"></span>'],
        URLhashListener:true,
        autoplayHoverPause:true,
        startPosition: 'URLHash'
    });

    /* ********************************************** */

    /*tabs*/
        $('#az-tab-basket').click(function(){
            $(this).parent().removeClass('az-tab-cond2 az-tab-cond3').addClass('az-tab-cond1')
            .next().removeClass('az-tab-cond1 az-tab-cond3').addClass('az-tab-cond2')
            .next().removeClass('az-tab-cond1 az-tab-cond2').addClass('az-tab-cond3');
        });
        $('#az-tab-contact').click(function(){
            $(this).parent().removeClass('az-tab-cond2 az-tab-cond3').addClass('az-tab-cond1')
            .prev().removeClass('az-tab-cond1 az-tab-cond3').addClass('az-tab-cond2')
            .next().next().removeClass('az-tab-cond1 az-tab-cond2').addClass('az-tab-cond3');
        });
        $('#az-tab-confirm').click(function(){
            $(this).parent().removeClass('az-tab-cond2 az-tab-cond3').addClass('az-tab-cond1')
            .prev().removeClass('az-tab-cond1 az-tab-cond3').addClass('az-tab-cond2')
            .prev().removeClass('az-tab-cond1 az-tab-cond2').addClass('az-tab-cond3');
        });
        $('.az-tabs>li>a').click(function(){
            $('.az-tab-cont>li').fadeOut(0);
            $($(this).attr('href')).fadeIn(0);
            return false;
        });
    /*tabs*/


    
});
