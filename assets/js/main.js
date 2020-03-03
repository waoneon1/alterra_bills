// HoverStay 
( function($) {	
  $(document).ready(function () {
      $('.js-hoverstay li')
      .mouseenter(function() {

          var image = $(this).data('image');
          var image2 = $(this).data('image2');
          var alt = $(this).data('alt');


          $('.js-hoverstay li').removeClass('active');
          $(this).addClass('active');
          
          //The Image
          console.log(image)
          $('.js-hoverstay-img').attr('src', image);
          $('.js-hoverstay-img').attr('srcset', image2 + ' 2x');
          $('.js-hoverstay-img').attr('alt', alt);
      })
      .mouseleave	(function() {
      });

  });
} )(jQuery);