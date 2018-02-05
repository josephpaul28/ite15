jQuery(document).ready(function($) {
    
    /* ------------------------------------------------------------------
     
     MENU
     
     ------------------------------------------------------------------ */
    var showMenu = function() {
        
        $('body').removeClass('active-sidebar')
                .toggleClass('active-nav');
		
        $('.menu-button').toggleClass('active-button');

        $('html, body').animate({scrollTop: 0}, 0);
        
    };

    $('.menu-button').click(function(e) {
        e.preventDefault();
        showMenu();
    });

    $('.mask-slidein').click(function(e) {
        e.preventDefault();
        showMenu();
    });
    
    /* ------------------------------------------------------------------
     
     SEARCH INPUT AUTO FOCUS
     
     ------------------------------------------------------------------ */
    $('.not-found input#s').focus();

    /* ------------------------------------------------------------------
     
     SCALABLE VIDEOS https://github.com/davatron5000/FitVids.js
     
     ------------------------------------------------------------------ */
    $('.container').fitVids();

    /* ------------------------------------------------------------------
     
     RESIZE EVENTS
     
     ------------------------------------------------------------------ */
    $(window).on('resize', function() {
        
        var off_canvas_nav = $('.off-canvas-nav').css('display');

        if (off_canvas_nav === 'block') {
            $('body').removeClass('big-screen')
                    .addClass('small-screen');
        }

        if (off_canvas_nav === 'none') {
            $('body').removeClass('active-sidebar active-nav small-screen')
                    .addClass('big-screen');
        }

    });
    
});