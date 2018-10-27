jQuery(document).ready(function() {
  var menuToggle = jQuery('#js-centered-navigation-mobile-menu').unbind();
  jQuery('#js-centered-navigation-menu').removeClass("show");
  
  menuToggle.on('click', function(e) {
    e.preventDefault();
    jQuery('#js-centered-navigation-menu').slideToggle(function(){
      if(jQuery('#js-centered-navigation-menu').is(':hidden')) {
        jQuery('#js-centered-navigation-menu').removeAttr('style');
      }
    });
  });
});
