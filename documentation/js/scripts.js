$(window).on('scroll', function () {

    $('.t-sec').each(function () {

        var section = $(this);

        var offset = section.offset();
        var w = $(window);

        var scrollPos = offset.top - w.scrollTop();


        if (scrollPos < 300) {
            $('.t-sec').removeClass('section-active')
            section.addClass('section-active')
        }

        var secId = $('.section-active').attr('id');

        var activeLi = $('.site-nav').find('.' + secId);

        $('.site-nav li').removeClass('li-active');

        activeLi.addClass('li-active');


    });

    $('.sec-sub').each(function () {

        var sub = $(this);

        var subOffset = sub.offset();
        var s = $(window);

        var subScrollPos = subOffset.top - s.scrollTop();

        if (subScrollPos < 300) {
            $('.sec-sub').removeClass('sub-active')
            sub.addClass('sub-active')
        }

        var subId = $('.sub-active').attr('id');

        var subActiveLi = $('.site-nav').find('.' + subId);

        $('.sub li').removeClass('sub-li-active');
        subActiveLi.addClass('sub-li-active');
    });




});

////////// Image Lightbox Start //////////

    $('.image-pop').magnificPopup({
        delegate: 'img', // child items selector, by clicking on it popup will open
        type: 'image',
        closeOnContentClick: true,
        closeBtnInside: false,
        mainClass: 'image-lightbox', // class to remove default margin from left and right side
        image: {
            verticalFit: true
        },
        zoom: {
            enabled: false,
            duration: 300 // don't foget to change the duration also in CSS
        }
        // other options
    });

////////// Image Lightbox End //////////

$('.menu-toggle').on('click' , function(){
    $('.left-sido').toggleClass('visible')
    
});


$('a').click(function () {
    $('html, body').animate({
        scrollTop: $($(this).attr('href')).offset().top - 210
    }, 500);
    return false;
});
