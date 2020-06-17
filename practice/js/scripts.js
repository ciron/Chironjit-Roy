jQuery(document).ready(function($) {
    $('.counter').counterUp({
        delay: 5,
        time: 1550
    });

    $('.aqua-case').slick({
        dots: false,
        autoplay: true,
        infinite: true,
        speed: 800,
        slidesToShow: 1,
    });
    $('.banner-slider').slick({
      dots: false,
      autoplay: true,
      infinite: true,
      speed: 1000,
      time: 1550,
      slidesToShow: 1,
      responsive: [
        {
          breakpoint: 1200,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
            
          }
        },
        {
          breakpoint: 992,
          settings: {
           autoplay:false
            
          }
        }
      ]
    });
   
    $('.slider').slick({
      autoplay: true,
        autoplaySpeed: 1000,
        time:1500,
        arrows: false,
        slidesToShow: 3,
        slidesToScroll: 1,
        pauseOnHover: true,
        responsive: [
            {
              breakpoint: 1200,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 1
                
              }
            },
            {
                breakpoint: 992,
                settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1
                  
                }
            }
          ]
    });
   
    
    $(function () {
      'use strict'
    
      $('[data-toggle="offcanvas"]').on('click', function () {
        $('.offcanvas-collapse').toggleClass('open')
      })
    }); 
    $(function () {
      'use strict'
    
      $('[data-toggle="social-offcanvas"]').on('click', function () {
        $('.offcanvas-collapse').toggleClass('open')
      })
    }) ;  
   
});
function validateform(){ 
    
  if( document.myForm.name.value == "" ) {
    alert( "Please provide your name!" );
    document.myForm.name.focus() ;
    return false;
 }
 if( document.myForm.email.value == "" ) {
    alert( "Please provide your Email!" );
    document.myForm.email.focus() ;
    return false;
 }
 if( document.myForm.message.value == ""||document.myForm.message.value.length < 5 ) {
    
  alert( "Please provide a message upto 5 sentence." );
  document.myForm.message.focus() ;
  return false;
}
 return( true );
} ;

