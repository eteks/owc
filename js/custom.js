jQuery(document).ready(function($) {
	$('.magnify_popup').magnificPopup({type:'image'});
$('#photo-carousel').carousel({

        interval: 5000
});

$('#carousel-text').html($('#slide-content-0').html());

//Handles the carousel thumbnails

$('[id^=carousel-selector-]').click( function(){
        var id_selector = $(this).attr("id");
        var id = id_selector.substr(id_selector.length -1);
        var id = parseInt(id);
        $('#photo-carousel').carousel(id);

});

// When the carousel slides, auto update the text

$('#photo-carousel').on('slid.bs.carousel', function (e) {
         var id = $('.item.active').data('slide-number');
        $('#carousel-text').html($('#slide-content-'+id).html());
});
});

$(document).ready(function(){
$(".toggle-all-section").hide();
$(".toggle-button-section").click(function(){
$(".toggle-all-section").toggle();

});

$('.read_more_link').click(function() {
        $(this).html($(this).text() == 'Close' ? 'Read More' : 'Close');
  $('.read_more_link').not(this).html('Read More');
        // if ($(this).text() == "Read More") {
      //  $(this).html('Read Less')
      // }
      
  });
  
  $('.dropdown').mouseover(function() {
         $(this).parent().find('.dropdown-menu').show();
       
   });
  
   $('.dropdown').mouseout(function() {
         $(this).parent().find('.dropdown-menu').hide();
     
   });

});




