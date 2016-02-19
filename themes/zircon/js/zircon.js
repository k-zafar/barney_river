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
      var repl = jQuery("#block-homepageslideshow .carousel-inner .item > img");
      repl.each(function(i, elem) {
        var img = jQuery(elem);
        var div = jQuery("<div />").css({
          background: "url(" + img.attr("src") + ") no-repeat"
        });
        img.replaceWith(div);
      });
    }
  };
  jQuery(document).ready(function(){
    var site_title = $('title').text().split(' | ');
    if (site_title[0].length == 0) {
      $('title').text(site_title[1]);
    };
    $('#block-views-block-team-members-block-mobile-block-1 .view-content .views-row .group-footer').hide();
    $('#block-views-block-team-members-block-mobile-block-1 .view-content .views-row').each(function(){
      var title = $(this).find('.title');
      title.click(function(){
        title.parents('.views-row').toggleClass('active');
        title.parents('.details').find('.group-footer').slideToggle();
      });
    });
    if ($('#block-showteammembers-2 li').hasClass('active')) {
      $('#block-showteammembers-2 li').removeClass('remove');
    };
    $('#block-showteammembers-2 li').each(function(){
      $(this).click(function(){
        $(this).find('.accordion-heading').toggleClass('active');
      });
    });
    $('#block-barneyriver').addClass('col-lg-8 col-md-8 col-sm-7 col-xs-12');
    $('#block-footerright').addClass('col-lg-4 col-md-4 col-sm-5 col-xs-12')
    $(".navbar-toggle").click(function(){
      if($( "span" ).hasClass( "fa-times" ))
      {
        $(".fa-times").hide();
        $(".icon-bar").show();
         $('.fa-times').removeClass('fa-times').addClass('new_class');
      }
      else
      {
        $(".icon-bar").hide();
        $( ".navbar-toggle" ).append( "<span class='fa  fa-times'></span>" );
        $('.new_class').remove();
      }

    });
  });
})(jQuery, Drupal);

