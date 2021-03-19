jQuery(document).ready(function () {

    jQuery(window).scroll(function () {

        if(jQuery(window).width()>1200){
            if(jQuery(this).scrollTop()>100){


                jQuery("#backtotop").addClass("shwbacktotop");

                jQuery(".header-template").addClass("fadeInDown fixed-header bg-white position-fixed");

            }
            else{
                jQuery("#backtotop").removeClass("shwbacktotop");

                jQuery(".header-template").removeClass("fadeInDown bg-white fixed-header position-fixed");
            }
        }




    });



    jQuery('.grid').isotope({
        itemSelector: '.grid-item',
        percentPosition: true
    });
/*
   jQuery('.loop-post-in-tax').isotope({
        itemSelector: '.list-info-content-loop',
        percentPosition: true
    });

*/
    jQuery(".owl-tab-list").owlCarousel({
        loop:false,
        margin:10,
        nav:false,
        dots:true,
        responsive:{
            0:{
                items:2
            },
            576:{
                items:2
            },
            768:{
                items:3
            },
            1200:{
                items:4
            }
        } 
    });

    jQuery(".owl-partner").owlCarousel({
        loop:false,
        margin:10,
        nav:true,
        dots:false,
        responsive:{
            0:{
                items:2
            },
            576:{
                items:3
            },
            768:{
                items:4
            },
            992:{
                items:5
            },
            1200:{
                items:6
            }
        }
    });


    jQuery('.list-owl-menu-foods').owlCarousel({
    loop:false,
    margin:10,
    nav:true,
    dots:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
});





        jQuery('.list-owl-menu-foods').owlCarousel({
    loop:false,
    margin:10,
    nav:true,
    dots:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
});


    new WOW().init();



    jQuery('.owl-carousel-list-menu').owlCarousel({
    loop:false,
    dots:true,
    margin:0,
    nav:false,
    responsive:{
        0:{
            items:1
        },

        768:{
            items:2
        }
    }
});


    jQuery(".title-item-list").click(function(){

        idevent=jQuery(this).attr("data-event");

        jQuery(".box5loop").addClass("d-none").removeClass("d-block");

        jQuery(idevent).addClass("d-block");

        offset=jQuery(idevent).offset().top;

        offset=offset-60;

        jQuery("html,body").animate({
            scrollTop:offset
        },800);

        jQuery(".box7").removeClass('d-block').addClass('d-none');

        idmenu=jQuery(this).attr("data-idmenu");

        jQuery(idmenu).removeClass("d-none").addClass("d-block");

    });


    jQuery(".nav-subcat-menu li a").click(function(){

        jQuery(".nav-subcat-menu li a").removeClass("active");

        jQuery(this).addClass("active");

        dataid=jQuery(this).attr('data-id');
        
        jQuery(".loop-post-in-tax .list-info-content-loop").removeClass("d-block").addClass("d-none");

                jQuery(".loop-post-in-tax .list-info-content-loop."+dataid).removeClass("d-none").addClass('d-block');


    });



jQuery(".list-tab li a").click(function(){
    indexof=jQuery(this).parent().index();

    href=jQuery(this).attr("href");

    jQuery(href+" .owl-tab-list .owl-item:first-child .title-item-list").click();
});



});










document.addEventListener(
    "DOMContentLoaded", () => {
        new Mmenu( "#navmenu_mobile", {
            "extensions": [
                "fx-panels-zoom",
                "pagedim-black",
                "theme-dark"
            ],
            "counters": true,
            "iconbar": {
                "add": true,
                "top": [
                    "<a href='#/'><i class='fa fa-home'></i></a>",
                    "<a href='#/'><i class='fa fa-user'></i></a>"
                ],
                "bottom": [
                    "<a href='#/'><i class='fa fa-twitter'></i></a>",
                    "<a href='#/'><i class='fa fa-facebook'></i></a>",
                    "<a href='#/'><i class='fa fa-linkedin'></i></a>"
                ]
            },
            "navbars": [
                {
                    "position": "top",
                    "content": [
                        "searchfield"
                    ]
                },
                {
                    "position": "top"
                },
                {
                    "position": "bottom",
                    "content": [
                        "<a class='fa fa-envelope' href='#/'></a>",
                        "<a class='fa fa-twitter' href='#/'></a>",
                        "<a class='fa fa-facebook' href='#/'></a>"
                    ]
                }
            ]
        });
    }
);