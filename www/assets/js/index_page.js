jQuery(document).ready(function(){
    jQuery('#target .parallax-layer').parallax(
        { mouseport: jQuery('#content'),frameDuration:50 },
        { xparallax: -0.1, yparallax: 0 },   // Red layer options
        { xparallax: -0.2, yparallax: 0 },   // Blue layer options
        { xparallax: -0.3, yparallax: 0 }    // Green layer options

    );
    jQuery('#slider-index').slides({
        preload             :   true,
        effect              :   'fadeslide',
        crossfade           :   true,
        generateNextPrev    :   true,
        next                :   'arrow_next',
        prev                :   'arrow_prev',
        generatePagination  :   true,
        paginationClass     :   'pagination',
        currentClass        :   'active',
        play                :   false,
        date_title          :   true
    });
    test_slider_arrows();
    jQuery(window).resize(function(){
        test_slider_arrows();
    });
});
function test_slider_arrows() {
    if (parseInt(jQuery(window).width())<=1300) {
        jQuery('.arrow_next').hide();
        jQuery('.arrow_prev').hide();
    } else {
        jQuery('.arrow_next').show();
        jQuery('.arrow_prev').show();
    }
}