(function ($) {

  $(document).ready(function(){
   
    //Toggle Navicon
    $('#nav-toggle').toggle(function() {
      $('nav[role="navigation"] .menu').slideDown("fast");
    }, function() {
      $('nav[role="navigation"] .menu').slideUp("fast");
    });
      
  });

})(jQuery);
