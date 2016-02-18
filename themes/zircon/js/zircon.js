(function ($, Drupal) {

  "use strict";

  Drupal.behaviors.zircon = {
    attach: function (context, settings) {
      $('.btn-btt').smoothScroll({speed: 1000});
      if($("#search-block-form [name='keys']").val() === "") {
        $("#search-block-form input[name='keys']").val(Drupal.t("Keywords"));
      }
      $("#search-block-form input[name='keys']").focus(function() {
        if($(this).val() === Drupal.t("Keywords")) {
          $(this).val("");
        }
      }).blur(function() {
        if($(this).val() === "") {
          $(this).val(Drupal.t("Keywords"));
        }
      });
      $(window).scroll(function() {
        if($(window).scrollTop() > 200) {
            $('.btn-btt').show();
          }
          else {
            $('.btn-btt').hide();
          }
     }).resize(function(){
        if($(window).scrollTop() > 200) {
            $('.btn-btt').show();
          }
          else {
            $('.btn-btt').hide();
          }
      });
    }
  };
})(jQuery, Drupal);
jQuery(document).ready(function(){
  jQuery('#block-barneyriver, #block-footerright').addClass('col-lg-6 col-md-6 col-sm-6');
  jQuery(".navbar-toggle").click(function(){
    if(jQuery( "span" ).hasClass( "fa-times" ))
    {
      jQuery(".fa-times").hide();
      jQuery(".icon-bar").show();
       jQuery('.fa-times').removeClass('fa-times').addClass('new_class');
    }
    else
    {
      jQuery(".icon-bar").hide();
      jQuery( ".navbar-toggle" ).append( "<span class='fa  fa-times'></span>" );
      jQuery('.new_class').remove();
    }

  });
});

