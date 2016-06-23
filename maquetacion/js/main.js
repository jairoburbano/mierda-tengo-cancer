(function($) {
    // Tamaño de la pantalla
    var $window = $(window),
        windowSize	= $window.width(),
        windowHeight	= $window.height();
    function menuMobile() {
        if(windowSize < 740) {
            var menuIcon = $('.menu--mobile'),
                header = $('.header'),
                menu = $('.menu--bottom');
            menuIcon.click(function() {
                if(header.hasClass('active')) {
                    menu.stop().slideUp();
                    header.removeClass('active');
                } else {
                    header.addClass('active');
                    menu.stop().slideDown();
                }
            });
        }
    }
    function indexScroll() {
        var down = $('.js-down'),
            body = $('body');
        down.click(function() {
            if(windowSize < 740) {
                $window.animate({
                    scrollTop: windowHeight - 50
                }, 1000);
            } else {
                $('body, html').animate({
                    scrollTop: windowHeight - 70
                }, 1000);
            }
        });
    }
    /*Isotope*/
    function shuffleIn() {
        var $container = $('.js-grid'),
            $filter = $('.js-filters'),
            $filterBy = $('.filter--content'),
            $btn = $('.js-btn'),
            close = $('.js-close');
        var $grid = $container.imagesLoaded(function() {
            $container.isotope({
                itemSelector : '.js-grid__item', 
                layoutMode: 'fitRows'
            });
        });
        $filter.on( 'click', 'li', function() {
            var filterValue = $( this ).attr('data-filter');
            // use filterFn if matches value
            $grid.isotope({ filter: filterValue });
        });
        // change is-checked class on buttons
        $filter.each( function( i, buttonGroup ) {
            var $buttonGroup = $( buttonGroup );
            $buttonGroup.on( 'click', 'li', function() {
                $buttonGroup.find('.active').removeClass('active');
                $(this).addClass('active');
                $(this).parents('.filter--content').slideUp();
            });
        });
        $btn.click(function() {
            $filterBy.slideDown();
        });
        close.click(function() {
            $filterBy.slideUp();
        });
    }
    function formularioSingle() {
        var btn = $('.js-form-buttom'),
            form = $('.js-form'),
            group = $('.input-group'),
            input = $('input, textarea'),
            contentSelect = $('.content__select'),
            select = $('.content__select select'),
            textSelect = $('.text__select span'),
            fileContent = $('.file--group'),
            fileText = $('.text__file span'),
            file = $('.file');
        btn.click(function() {
            form.stop().slideToggle();
        });
        input.focus(function() {
            $(this).parents('.input-group').addClass('done');
        });
        input.blur(function() {
            if( !$(this).val() ) {
                $(this).parents('.input-group').removeClass('done');
            }
        });
        contentSelect.each(function() {
            $(this).change(function() {
                var span = $(this).find('.text__select span');
                var text = $(this).find(':selected').text();
                span.text(text);
                if(!$.trim(span.html())) {
                    $(this).parents('.input-group').removeClass('done');
                }
            });
        });
        select.click(function() {
            $(this).parents('.input-group').addClass('done');
        });
        file.click(function () {
            fileText.empty();
        });
        file.change(function () {
            console.log('asdasd');
            var textFile = $(this)[0].files[0]['name'];
            fileText.text(textFile);
        });
    }
    function showTips() {
        var container = $('.content--tips'),
            tips = $('.tips'),
            btn = $('.js-load'),
            display = $('.tips').css('display');
        btn.click(function() {  
            $(this).fadeOut();
            tips.css('display', 'flex');
            tips.animate({
                opacity: 1
            });
        });
    }
    function comprarImage() {
        var image = $('.small__item__image '),
            imageWidth = image.width() / 2;
        image.each(function() {
            $(this).css('height', imageWidth);
        });
    }
    function lightbox() {
        var close = $('.js-light-close'),
            lightbox = $('.video__lightbox');
        close.click(function() {
            lightbox.fadeOut();
            lightbox.find('iframe').attr('src', '');
        });
    }
    function setCookie(cname, cvalue) {
        document.cookie = cname + "=" + cvalue + "; path=/";
    }
    function getCookie(cname) {
        var name = cname + "=";
        var ca = document.cookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ')
                c = c.substring(1);
            if (c.indexOf(name) == 0)
                return c.substring(name.length, c.length);
        }
        return "";
    }
    function checkCookie() {
        var age = getCookie("video");
        if (age != 1) {
            $('.video__lightbox').css('display', 'block');
        }
    }
    checkCookie();
    $('.js-light-close').click(function () {
        setCookie('video', 1);
    });
    menuMobile();
    shuffleIn();
    formularioSingle();
    indexScroll();
    showTips();
    comprarImage();
    lightbox();
    $(window).resize(function() {
        comprarImage();
    });
})(jQuery);
