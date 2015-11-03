/*

◄------------------------------------------------------------► 
This file includes all cusomized javascript and all plugins libraries options 
◄------------------------------------------------------------►

*/

(function ()
{
  //-- Enable Use Strict Mode --
  "use strict";


  //-- Making the header fixed --
  var jQueryheader = jQuery('header#header');
  var jQueryheaderTop = jQueryheader.offset().top;

  jQuery('.offset').height( jQueryheader.outerHeight() )
  
  //-- Window Scroll Functions --
   
  jQuery(window).scroll(function(){
    (jQuery(window).scrollTop() > jQueryheaderTop) ? jQuery('.header').addClass('fixedHeader') : jQuery('.header').removeClass('fixedHeader');
  });
  //--------------------------------------------------------------------------------------------

  /* ◄------ Accordion & Toggle -------------------------------► */

  //-- Accordion 1 --
  jQuery(document).ready(function(){
    jQuery("#accordianShortCode .accordionRow > a").on("click", function(e){
      if(jQuery(this).parent().has("div")) {
        e.preventDefault();
      }
      
      if(!jQuery(this).hasClass("activeLine")) {
        // hide any open menus and remove all other classes
        jQuery("#accordianShortCode .accordionRow > a").removeClass("activeLine");
        jQuery("#accordianShortCode .accordionRow > .accordion-content").removeClass("opened");
        jQuery("#accordianShortCode .accordionRow > .accordion-content").slideUp(500);
        
        // open our new menu and add the activeLine class
        jQuery(this).addClass("activeLine");
        jQuery("#accordianShortCode .accordionRow > .accordion-content").addClass("opened");
        jQuery(this).next(".accordion-content").slideDown(500);
      }
      
      else if(jQuery(this).hasClass("activeLine")) {
        jQuery(this).removeClass("activeLine");
        jQuery("#accordianShortCode .accordionRow > .accordion-content").removeClass("opened");
        jQuery(this).next(".accordion-content").slideUp(500);
      }
    });
  });
  //--------------------------------------------------------------------------------------------

  //-- Accordion 2 --
  jQuery(document).ready(function(){
    jQuery("#accordianShortCode2 .accordionRow > a").on("click", function(e){
      if(jQuery(this).parent().has("div")) {
        e.preventDefault();
      }
      
      if(!jQuery(this).hasClass("activeLine")) {
        // hide any open menus and remove all other classes
        jQuery("#accordianShortCode2 .accordionRow > a").removeClass("activeLine");
        jQuery("#accordianShortCode2 .accordionRow > .accordion-content").removeClass("opened");
        jQuery("#accordianShortCode2 .accordionRow > .accordion-content").slideUp(500);
        
        // open our new menu and add the activeLine class
        jQuery(this).addClass("activeLine");
        jQuery("#accordianShortCode2 .accordionRow > .accordion-content").addClass("opened");
        jQuery(this).next(".accordion-content").slideDown(500);
      }
      
      else if(jQuery(this).hasClass("activeLine")) {
        jQuery(this).removeClass("activeLine");
        jQuery("#accordianShortCode2 .accordionRow > .accordion-content").removeClass("opened");
        jQuery(this).next(".accordion-content").slideUp(500);
      }
    });
  });
  //--------------------------------------------------------------------------------------------

  //-- tabs --

  jQuery(document).ready( function() {
    jQuery('.tabsContainer').easytabs();
  });
  //--------------------------------------------------------------------------------------------

  /* ◄------ Scroll Animation -------------------------------► */
  
  //-- Progressbar --
  jQuery(document).scroll(function() {
    jQuery('.progress-bar').each(function(){
    var imagePos = jQuery(this).offset().top;

    var topOfWindow = jQuery(document).scrollTop();
      if (imagePos < topOfWindow+jQuery(window).height() * 0.8) {
        jQuery(this).addClass("animated slideRightSlow");
      }
    });
  });


  /* ◄------ Nice Scroll -------------------------------► */

  //-- The whole page --
  jQuery("html").niceScroll({
    cursorborder: 0,
    cursorcolor: '#171717',
    autohidemode: true,
    zindex: 9999999,
    scrollspeed: 60,
    mousescrollstep: 36,
    cursorwidth: 6,
    horizrailenabled: false,
    cursorborderradius: 3
  });
  //--------------------------------------------------------------------------------------------

  /* ◄------ Responsive Nav -------------------------------► */
 
  jQuery(document).ready(function () {

    //-- Including the main nav contents in responsive main nav DIV --
    jQuery('.mainNav .navTabs').clone().appendTo('.responsiveMainNav');

    //-- Show and Hide responsive nav --
    jQuery('#responsiveMainNavToggler').click(function(event){
      event.preventDefault();
      jQuery('#responsiveMainNavToggler').toggleClass('opened');
      jQuery('.responsiveMainNav').slideToggle(1000);
	  jQuery('.responsiveMainNav').addClass('nav-active');


      if ( jQuery('#responsiveMainNavToggler i').hasClass('fa-bars') )
      {   
          jQuery('#responsiveMainNavToggler i').removeClass('fa-bars');
          jQuery('#responsiveMainNavToggler i').addClass('fa-close');
      }else
      {  
          jQuery('#responsiveMainNavToggler i').removeClass('fa-close');
          jQuery('#responsiveMainNavToggler i').addClass('fa-bars');
      }
	  
	  

    });

    // dropdown level 1
    if(jQuery(".responsiveMainNav .navTabs > li > a").parent().has("ul")) {
      jQuery(".responsiveMainNav .navTabs > li > a:first-child").addClass("toggleResponsive");
      jQuery(".responsiveMainNav .navTabs > li > a:last-child").removeClass("toggleResponsive");
    }

    jQuery(".responsiveMainNav .navTabs > li > .toggleResponsive").on("click", function(e){
      if(jQuery(this).parent().has("ul")) {
        e.preventDefault();
      }
      
      if(!jQuery(this).hasClass("activeLine")) {
        // hide any open menus and remove all other classes
        jQuery(".responsiveMainNav .navTabs > li > .toggleResponsive").removeClass("activeLine");
        jQuery(".responsiveMainNav .navTabs > li > .dropDown").slideUp(500);
        
        // open our new menu and add the activeLine class
        jQuery(this).addClass("activeLine");
        jQuery(this).next(".responsiveMainNav .navTabs > li > .dropDown").slideDown(500);
      }
      
      else if(jQuery(this).hasClass("activeLine")) {
        jQuery(this).removeClass("activeLine");
        jQuery(this).next(".responsiveMainNav .navTabs > li > .dropDown").slideUp(500);
      }
    });


    // dropdown level 2
    if(jQuery(".responsiveMainNav .navTabs > li > .dropDown > li > a").parent().has("ul")) {
      jQuery(".responsiveMainNav .navTabs > li > .dropDown > li > a:first-child").addClass("toggleResponsive");
      jQuery(".responsiveMainNav .navTabs > li > .dropDown > li > a:last-child").removeClass("toggleResponsive");
    }


    jQuery(".responsiveMainNav .navTabs > li > .dropDown > li > .toggleResponsive").on("click", function(e){
      if(jQuery(this).parent().has("ul")) {
        e.preventDefault();
      }

      if(!jQuery(this).hasClass("activeLine")) {
        // hide any open menus and remove all other classes
        jQuery(".responsiveMainNav .navTabs > li > .dropDown > li > .toggleResponsive").removeClass("activeLine");
        jQuery(".responsiveMainNav .navTabs > li > .dropDown li .dropDown").slideUp(500);
        
        // open our new menu and add the activeLine class
        jQuery(this).addClass("activeLine");
        jQuery(this).next(".responsiveMainNav .navTabs > li > .dropDown li .dropDown").slideDown(500);
      }
      
      else if(jQuery(this).hasClass("activeLine")) {
        jQuery(this).removeClass("activeLine");
        jQuery(this).next(".responsiveMainNav .navTabs > li > .dropDown li .dropDown").slideUp(500);
      }
    });

  });
  
  
  
})();//end of use strict
    
	
	