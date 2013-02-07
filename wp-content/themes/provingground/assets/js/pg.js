(function($) {

  $('.home #content').masonry({
    itemSelector: '.row'
  });

  $(".accordion > li > a").click(function(event) {
  	event.preventDefault();
    $(".accordion > li").removeClass('active');    
    $(this).parent().addClass('active');  
    setTimeout(function(){ $('#content').masonry() },10);
    
    if((navigator.userAgent.match(/iPhone/i)) || (navigator.userAgent.match(/iPod/i)) || (navigator.userAgent.match(/android/i)) ||         (navigator.userAgent.match(/opera/i)) || (navigator.userAgent.match(/blackberry/i)) || (navigator.userAgent.match(/palm/i)) ||        (navigator.userAgent.match(/windows/i)))
    {
      $("html, body").animate({scrollTop: $(this).offset().top-50}, 500);
    }
	
	
  });
  
  $(window).resize(function() { 
	  setTimeout(function(){ $('.home #content').masonry() },500);
  });	  
  
})(jQuery);


