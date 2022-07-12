(function($){
    /**
     * Home page
     */
    $(document).ready(function(){
        $('.homeHeader__slider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            dots: true,
        });

        // Realizations

        $('.homeRealizations__content').each(function(){
            let content = $(this).find('.content'),
                images = $(this).find('.images');

            $(content).slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: true,
                dots: false,
                asNavFor: $(images),
                fade: true,
                infinite: true,
                adaptiveHeight: true,
                responsive: [
                    {
                        breakpoint: 991,
                        settings: {
                            arrows: false,
                            fade: false,
                            dots: true,
                        }
                    }
                ]
            });
            $(images).slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: true,
                dots: false,
                asNavFor: $(content),
                infinite: true,
                adaptiveHeight: true,
            });
        });
    });
}(jQuery));