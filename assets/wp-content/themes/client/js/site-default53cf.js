
(function($) {
  $.fn.basictable = function(options) {

    var setup = function(table, data) {
      var headings = [];

      if (data.tableWrap) {
        table.wrap('<div class="bt-wrapper"></div>');
      }

      // Table Header
      if (data.header) {
        var format = '';

        if (table.find('thead tr th').length) {
          format = 'thead th';
        }
        else if (table.find('tbody tr th').length) {
          format = 'tbody tr th';
        }
        else if (table.find('th').length) {
          format = 'tr:first th';
        }
        else {
          format = 'tr:first td';
        }

        $.each(table.find(format), function() {
          var $heading = $(this);
          var colspan = parseInt($heading.attr('colspan'), 10) || 1;
          var row = $heading.closest('tr').index();

          if (!headings[row]) {
            headings[row] = [];
          }

          for (var i = 0; i < colspan; i++) {
            headings[row].push($heading);
          }
        });
      }

      // Table Body
      $.each(table.find('tbody tr'), function() {
        setupRow($(this), headings, data);
      });

      // Table Footer
      $.each(table.find('tfoot tr'), function() {
        setupRow($(this), headings, data);
      });
    };

    var setupRow = function($row, headings, data) {
      $row.children().each(function() {
        var $cell = $(this);

        if (($cell.html() === '' || $cell.html() === '&nbsp;') && (!data.showEmptyCells)) {
          $cell.addClass('bt-hide');
        }
        else {
          var cellIndex = $cell.index();

          var headingText = '';

          for (var j = 0; j < headings.length; j++) {
            if (j != 0) {
              headingText += ': ';
            }

            var $heading = headings[j][cellIndex];
            if($heading != null){
                headingText += $heading.text();
            }

          }

          $cell.attr('data-th', headingText);

          if (data.contentWrap && !$cell.children().hasClass('bt-content')) {
            $cell.wrapInner('<span class="bt-content" />');
          }
        }
      });
    };

    var unwrap = function(table) {
      $.each(table.find('td'), function() {
        var $cell = $(this);
        var content = $cell.children('.bt-content').html();
        $cell.html(content);
      });
    };

    var check = function(table, data) {
      // Only change when table is larger than parent if force
      // responsive is turned off.
      if (!data.forceResponsive) {
        if (table.removeClass('bt').outerWidth() > table.parent().width()) {
          start(table, data);
        }
        else {
          end(table, data);
        }
      }
      else {
        if ((data.breakpoint !== null && $(window).width() <= data.breakpoint) || (data.containerBreakpoint !== null && table.parent().width() <= data.containerBreakpoint)) {
          start(table, data);
        }
        else {
          end(table, data);
        }
      }
    };

    var start = function(table, data) {
      table.addClass('lctablebt');

      if (!data.header) {
        table.addClass('bt--no-header');
      }

      if (data.tableWrap) {
        table.parent('.bt-wrapper').addClass('active');
      }
    };

    var end = function(table, data) {
      table.removeClass('bt bt--no-header');

      if (data.tableWrap) {
        table.parent('.bt-wrapper').removeClass('active');
      }
    };

    var destroy = function(table, data) {
      table.removeClass('bt bt--no-header');
      table.find('td').removeAttr('data-th');

      if (data.tableWrap) {
        table.unwrap();
      }

      if (data.contentWrap) {
        unwrap(table);
      }

      table.removeData('basictable');
    };

    var resize = function(table) {
      if (table.data('basictable')) {
        check(table, table.data('basictable'));
      }
    };

    // Get table.
    this.each(function() {
      var table = $(this);

      // If table has already executed.
      if (table.length === 0 || table.data('basictable')) {
        if (table.data('basictable')) {
          // Destroy basic table.
          if (options == 'destroy') {
            destroy(table, table.data('basictable'));
          }
          // Start responsive mode.
          else if (options === 'start') {
            start(table, table.data('basictable'));
          }
          else if (options === 'stop') {
            end(table, table.data('basictable'));
          }
          else {
            check(table, table.data('basictable'));
          }
        }
        return false;
      }

      // Extend Settings.
      var settings = $.extend({}, $.fn.basictable.defaults, options);

      var vars = {
        breakpoint: settings.breakpoint,
        containerBreakpoint: settings.containerBreakpoint,
        contentWrap: settings.contentWrap,
        forceResponsive: settings.forceResponsive,
        noResize: settings.noResize,
        tableWrap: settings.tableWrap,
        showEmptyCells: settings.showEmptyCells,
        header: settings.header
      };
      // Maintain the original functionality/defaults
      if(vars.breakpoint === null && vars.containerBreakpoint === null){
        vars.breakpoint = 568;
      }

      // Initiate
      table.data('basictable', vars);

      setup(table, table.data('basictable'));

      if (!vars.noResize) {
        check(table, table.data('basictable'));

        $(window).bind('resize.basictable', function() {
          resize(table);
        });
      }
    });
  };

  $.fn.basictable.defaults = {
    breakpoint: null,
    containerBreakpoint: null,
    contentWrap: true,
    forceResponsive: true,
    noResize: false,
    tableWrap: false,
    showEmptyCells: false,
    header: true
  };
})(jQuery);

jQuery(document).ready(function(){
	jQuery('body .text-contents .content-template table').basictable({
		breakpoint:992
	});
});


(function (root, factory) {
    if (typeof define === 'function' && define.amd) {
        define('jquery.responsiveiframes', ['jquery'], factory);
    } else if (typeof exports === 'object') {
        module.exports = factory(require('jquery'));
    } else {
        /*root.responsiveiframes = */factory(root.jQuery);
    }
}(this, function ($) {
    'use strict';

    $(window).on('resize load', function() {

        $('iframe,embed').not('.no-aspect-ratio').each(function() {

            var $el = $(this);
            var aspectRatio = $el.data('aspect-ratio'), maxWidth = $el.data('max-width');

            if (aspectRatio == null) {

                maxWidth = parseFloat($el.css('width'))
                    ? $el.width()
                    : Infinity;

                aspectRatio = $el.height() / $el.width();

                $el.data({ 'aspect-ratio': aspectRatio, 'max-width': maxWidth })
                    .removeAttr('height')
                    .removeAttr('width')
                    .css({ 'width': '', 'height': '' });
            }

            var width = Math.min(maxWidth, $el.parent().width());
            $el
                .width(width)
                .height(width * $el.data('aspect-ratio'));

        });

    });

}));

jQuery(window).load(function () {
    jQuery("#loader-wrapper").hide();
});

jQuery(document).ready(function(){



jQuery("#backtotop").click(function(){
  jQuery("html,body").animate({scrollTop:0},800);
});

jQuery(".text-contents table").addClass("table");



    listsidebar=[".widget.widget-sidebar-template.widget_product_categories ul li a",
        ".widget.widget-sidebar-template.widget_categories ul li a",
        ".widget.widget-sidebar-template.widget_meta ul li a"];

    jQuery.each(listsidebar, function( index, value ){
        jQuery(value).append('<span class="icon-widget-js"><svg width="18" height="18" viewBox="0 0 2048 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1943 952q0 31-31 66l-336 396q-43 51-120.5 86.5t-143.5 35.5h-1088q-34 0-60.5-13t-26.5-43q0-31 31-66l336-396q43-51 120.5-86.5t143.5-35.5h1088q34 0 60.5 13t26.5 43zm-343-344v160h-832q-94 0-197 47.5t-164 119.5l-337 396-5 6q0-4-.5-12.5t-.5-12.5v-960q0-92 66-158t158-66h320q92 0 158 66t66 158v32h544q92 0 158 66t66 158z"/></svg></span>');
    });

    listfile=[
        ".widget.widget-sidebar-template.widget_recent_entries ul li a"
    ];
    jQuery.each(listfile, function( index, value ){
        jQuery(value).append('<span class="icon-widget-js"><svg width="16" height="16" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1596 476q14 14 28 36h-472v-472q22 14 36 28zm-476 164h544v1056q0 40-28 68t-68 28h-1344q-40 0-68-28t-28-68v-1600q0-40 28-68t68-28h800v544q0 40 28 68t68 28zm160 736v-64q0-14-9-23t-23-9h-704q-14 0-23 9t-9 23v64q0 14 9 23t23 9h704q14 0 23-9t9-23zm0-256v-64q0-14-9-23t-23-9h-704q-14 0-23 9t-9 23v64q0 14 9 23t23 9h704q14 0 23-9t9-23zm0-256v-64q0-14-9-23t-23-9h-704q-14 0-23 9t-9 23v64q0 14 9 23t23 9h704q14 0 23-9t9-23z"/></svg></span>');
    });

    listcomment=[".widget.widget-sidebar-template.widget_recent_comments ul li"];

    jQuery.each(listcomment, function( index, value ){
        jQuery(value).append('<span class="icon-widget-js"><svg width="18" height="18" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1408 768q0 139-94 257t-256.5 186.5-353.5 68.5q-86 0-176-16-124 88-278 128-36 9-86 16h-3q-11 0-20.5-8t-11.5-21q-1-3-1-6.5t.5-6.5 2-6l2.5-5 3.5-5.5 4-5 4.5-5 4-4.5q5-6 23-25t26-29.5 22.5-29 25-38.5 20.5-44q-124-72-195-177t-71-224q0-139 94-257t256.5-186.5 353.5-68.5 353.5 68.5 256.5 186.5 94 257zm384 256q0 120-71 224.5t-195 176.5q10 24 20.5 44t25 38.5 22.5 29 26 29.5 23 25q1 1 4 4.5t4.5 5 4 5 3.5 5.5l2.5 5 2 6 .5 6.5-1 6.5q-3 14-13 22t-22 7q-50-7-86-16-154-40-278-128-90 16-176 16-271 0-472-132 58 4 88 4 161 0 309-45t264-129q125-92 192-212t67-254q0-77-23-152 129 71 204 178t75 230z"/></svg></span>');
    });

    listbook=[".widget.widget-sidebar-template.widget_archive ul li a"];
    jQuery.each(listbook, function( index, value ){
        jQuery(value).append('<span class="icon-widget-js"><svg width="16" height="16" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1703 478q40 57 18 129l-275 906q-19 64-76.5 107.5t-122.5 43.5h-923q-77 0-148.5-53.5t-99.5-131.5q-24-67-2-127 0-4 3-27t4-37q1-8-3-21.5t-3-19.5q2-11 8-21t16.5-23.5 16.5-23.5q23-38 45-91.5t30-91.5q3-10 .5-30t-.5-28q3-11 17-28t17-23q21-36 42-92t25-90q1-9-2.5-32t.5-28q4-13 22-30.5t22-22.5q19-26 42.5-84.5t27.5-96.5q1-8-3-25.5t-2-26.5q2-8 9-18t18-23 17-21q8-12 16.5-30.5t15-35 16-36 19.5-32 26.5-23.5 36-11.5 47.5 5.5l-1 3q38-9 51-9h761q74 0 114 56t18 130l-274 906q-36 119-71.5 153.5t-128.5 34.5h-869q-27 0-38 15-11 16-1 43 24 70 144 70h923q29 0 56-15.5t35-41.5l300-987q7-22 5-57 38 15 59 43zm-1064 2q-4 13 2 22.5t20 9.5h608q13 0 25.5-9.5t16.5-22.5l21-64q4-13-2-22.5t-20-9.5h-608q-13 0-25.5 9.5t-16.5 22.5zm-83 256q-4 13 2 22.5t20 9.5h608q13 0 25.5-9.5t16.5-22.5l21-64q4-13-2-22.5t-20-9.5h-608q-13 0-25.5 9.5t-16.5 22.5z"/></svg></span>');
    });

    listmenu=[
        ".widget.widget-sidebar-template.widget_nav_menu ul li a",
        ".widget.widget-sidebar-template.widget_pages ul li a"
    ];
    jQuery.each(listmenu, function( index, value ){
        jQuery(value).append('<span class="icon-widget-js"><svg width="18" height="18" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1171 960q0 13-10 23l-466 466q-10 10-23 10t-23-10l-50-50q-10-10-10-23t10-23l393-393-393-393q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l466 466q10 10 10 23z"/></svg></span>');
    });


    jQuery(".box-mini-cart-template-header .box-show-mini-cart").click(function () {
        jQuery(this).parent().find(".dropdown-mini-cart-template").toggleClass("d-block");
    });

    jQuery( document ).ajaxSuccess(function( event, xhr, settings ) {

        console.log(xhr.responseJSON);

      if(typeof xhr.responseJSON!="undefined"){

          if(xhr.responseJSON.fragments['div.box-mini-cart-template-header'].length>0){

              jQuery(".box-mini-cart-template-header .box-show-mini-cart").click(function () {
                  jQuery(this).parent().find(".dropdown-mini-cart-template").toggleClass("d-block");
              });

          }


      }
    });


    jQuery('.flex-control-nav').addClass('owl-carousel owl-theme');
    jQuery('.flex-control-nav').owlCarousel({
        loop:false,
        margin:10,
        nav:false,
        dots:true,
        items:4,
        responsive:{
            0:{
                items:4
            },
            600:{
                items:5
            },
            1000:{
                items:5
            }
        }
    });


    function iconprimarymenu() {

        jQuery(".menu-primary-template #menu-primary li .icon-menu-theme").remove();

        if(jQuery(window).width()>992){

            jQuery(".menu-primary-template #menu-primary li").each(function () {

                if(jQuery(this).find("ul").length>0){

                    jQuery(this).append('<span class="icon-menu-theme position-absolute"><svg width="18" height="18" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1171 960q0 13-10 23l-466 466q-10 10-23 10t-23-10l-50-50q-10-10-10-23t10-23l393-393-393-393q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l466 466q10 10 10 23z"/></svg></span>');

                }

            });
        }
    }

    iconprimarymenu();
    jQuery(window).resize(function () {
        iconprimarymenu();
    });




    jQuery(".box-event-click-outline").click(function () {
        jQuery(this).removeClass("d-block");
        jQuery(".box-show-ajax-search").html("").hide();
    });
    jQuery(".form-search-product-header .search-field").keypress(function() {


      thistext=jQuery(this).val();

      if(thistext.length>0){

          jQuery.ajax({
              url: woocommerce_params.ajax_url,
              type: 'POST',
              data: {
                  action: 'hints_search_product_input',
                  text:thistext
              },
          }).done(function(data) {
                 jQuery(".box-show-ajax-search").html(data).show();
                 jQuery(".box-event-click-outline").addClass("d-block");
              })
              .fail(function() {
                  jQuery(".box-show-ajax-search").html("").hide();
                  jQuery(".box-event-click-outline").removeClass("d-block");
              });


      }
      else{
          jQuery(".box-show-ajax-search").empty().hide();
      }


    });

    
    
});