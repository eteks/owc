 $(document).ready(function() {
 	
 		
// Image Magnific Popup	
    
    $(".toggle-all-section").hide(), $(".toggle-button-section").click(function() {
        $(".toggle-all-section").toggle()
    }),
     $(".magnify_popup").magnificPopup({
        type: "image"
    }), $("#photo-carousel").carousel({
        interval: 5e3
    });
    
//  code work with those browser which does not support required attribute-validation (safari)//
 
    $("#contactForm1").submit(function(e) {

		    var ref = $(this).find("[required]");
		
		    $(ref).each(function(){
		        if ( $(this).val() == '' )
		        {
		
		            $(this).focus();
		
		            e.preventDefault();
		            return false;
		        }
		    });  return true;
		});

// //email validation

 $('#contactForm1').validate({
 	     errorClass:'error_input_field',
          rules: {
              name: {
                  required: true
              },
              email: {
                  required: true
              },
               subject: {
                  required: true
              },
               message: {
                  required: true
              },
              
              
          },
          
         
          showErrors: function (errorMap, errorList) {
              if (typeof errorList[0] != "undefined") {
              	  
                  var position = $(errorList[0].element).position().top;
                  $('html, body').animate({
                      scrollTop: position
                  }, 300);
                  
                 
              }
              this.defaultShowErrors();
              
          }
      });
 
 
  //accordian
 
      $('.tab-content').each(function() {
      $(this).next('.read').click(function() {
       $('.read').css('display','inline');
       $(this).css('display','none');
       $('.tab-content').slideUp();
            $(this).prev('.tab-content').slideDown();
            

      });
     });

     $('.tab-content').each(function() {
      $(this).find('.close_accordition').click(function() {
          $(this).parents('.tab-content').slideUp();
          $('.read').css('display','inline');
          
      });
     });

// for menu bar scroll-responsive   
     
     $('#scroll_contact').click(function () {
        $(".navbar-right").animate({
            scrollTop: 143
        }, 600);
    });

$('.navbar-toggle').on('click',function() {
  if($('#bs-example-navbar-collapse-1').css('display')=='block') {
      $('body').removeClass('prevent_scroll');
  }
  else {
      $('body').addClass('prevent_scroll');
  }
});

}); // document ready end


