$(document).ready(function() {
    const $burger = $(".header__burger"),
    $nav = $(".header__menu"),
    $body = $("body"),
    $imageBanner = $('.banner__images img');

    $burger.on("click", function(event) {
        $burger.toggleClass("active");
        $nav.toggleClass("active");
        $body.toggleClass("fixed-page");
    });

    var scrollPos = 0;
    $(window).scroll(function(){
       var st = $(this).scrollTop();
       if (st > scrollPos){
         // down
         $imageBanner.css("transform", "translateY(-15px)");
       } else {
         // up
         $imageBanner.css("transform", "translateY(15px)");
       }
       scrollPos = st;
    });
    

   

    function elem_in_visible_area(selector) {
        if(selector){
            let elem_p = $(selector),
            elem_p_height = elem_p.height(),
            offset_top_el = elem_p.offset().top,
            offset_bottom_el = offset_top_el + elem_p.height(),
            scrolled = $(window).scrollTop(),
            scrolled_bottom = scrolled + $(window).height();
            console.log(offset_top_el);
            if (scrolled_bottom > offset_top_el && offset_bottom_el > scrolled) {
                return true;
            }
            return false;
        }
        
    }

   

    

    // $('.patients').fadeOut(0); $('.special').fadeOut(0);
      
    // $(window).scroll(function() {

    //   if (elem_in_visible_area('.special')) {
    //     // console.log('special в зоне видимости');
    //     $('.special').fadeIn(3000);
    //   } 
    //   if (elem_in_visible_area('.patients')) {
    //     // console.log('patients в зоне видимости');
    //     $('.patients').fadeIn(3000);
    //   }
    // });
    if($body.hasClass('page-template-contact')){
        $(".arrow").on("click", function(e) {
            e.preventDefault();
            const target = $(this).attr("href");
            $("html, body").animate({ scrollTop: $(target).offset().top }, 800);
          });
    }
        $(window).scroll(function() {
            // console.log($(this).scrollTop());
            $('section').each(function () {
                if($(this).hasClass('patients')){
                    if (elem_in_visible_area('.patients')) {
               
                    
                    }
                }
                }); 
        });
});   
