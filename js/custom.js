 $(document).ready(function() {
    
    $(".toggle-all-section").hide(), $(".toggle-button-section").click(function() {
        $(".toggle-all-section").toggle()
    }),
     $(".magnify_popup").magnificPopup({
        type: "image"
    }), $("#photo-carousel").carousel({
        interval: 5e3
    })
    
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

//email validation

	$('#email').focusout(function(){

                $('#email').filter(function(){
                   var emil=$('#email').val();
              var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
            if( !emailReg.test( emil ) ) {
                alert('Please enter valid email');
                } else {
                alert('Thank you for your valid email');
                }
                })
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


});