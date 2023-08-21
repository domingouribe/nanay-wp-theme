jQuery(document).ready($ => {
    $('i.lanzador').on('click', function() {
        $('nav#main-menu').animate({
            height: 'toggle'
        }, 'fast');
    });

});