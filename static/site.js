jQuery(document).ready(function($) {
    var myLazyLoad = new LazyLoad({
        // example of options object -> see options section
        threshold: 500,
        throttle: 30,
        show_while_loading: false,
    });
    if (window.matchMedia('(max-width: 480px)').matches) {
        var mob = true;
    } else {
        var mob = false;
    }
    if (mob == true) {
        $('.menu--trigger').on('click touchstart', function(event) {
            event.preventDefault();
            $('body').toggleClass('open');
        });
        cart = $('#cart-toggle');
        $('#cart-toggle').remove();
        $('.mobtoggle').html(cart);
        
    } else {}
    if ($('#av-overlay').length) {
        $('input#av_verify').val('Continue Shopping');
    }
});