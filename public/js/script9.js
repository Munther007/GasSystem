$(document).ready(function(){

    $('#menu').click(function(){
  
        $(this).toggleClass('fa-times');
        $('.nav_container').toggleClass('nav-toggle');
  
    });
  
    $(window).on('load scroll',function(){
  
      $('#menu').removeClass('fa-times');
      $('.nav_container').removeClass('nav-toggle');
  
      if($(window).scrollTop() > 0){
        $('#scroll-top').show();
      }else{
        $('#scroll-top').hide();
      }
  
    });
  
    // smooth scrolling 
  
    $('a[href*="#"]').on('click',function(e){
  
      e.preventDefault();
  
      $('html, body').animate({
  
        scrollTop : $($(this).attr('href')).offset().top,
  
      },
        500,
        'linear'
      );
  
    });
  
  });

