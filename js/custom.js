(function($){

    /**
     * Smooth scroll
     */
    $(document).on('click', 'a[href^="#"]', function (event) {
        event.preventDefault();
    
        $('html, body').animate({
            scrollTop: $($.attr(this, 'href')).offset().top
        }, 500);
    });

    /**
     * Menu mobile
     */
    $(document).ready(function(){
        let menu = $('.menuMobile'),
            btn = $('.menu-toggle'),
            close = $('.menuMobile__close');
            item = menu.find('.menu-item a');

        $(btn).on('click', function(){
            $('body').addClass('no-scroll');
            menu.addClass('menuMobile--ready');
            setTimeout(function(){
                menu.addClass('menuMobile--active');
            }, 300);
        });

        $(close).on('click', function(){
            $('body').removeClass('no-scroll');
            menu.removeClass('menuMobile--active');
            setTimeout(function(){
                menu.removeClass('menuMobile--ready');
            }, 300);
        });
        $(item).on('click', function(){
            $('body').removeClass('no-scroll');
            menu.removeClass('menuMobile--active');
            setTimeout(function(){
                menu.removeClass('menuMobile--ready');
            }, 300);
        });
    });

    /**
     * Menu bar scrolled
     */
    $(document).ready(function(){

        // menu cloned
        if(!$('body').hasClass('page-template-page_home')){
            let siteHeader = $('.siteHeader'),
                height = siteHeader.outerHeight();

            $('main.millyon').css('margin-top', height);
        }

        setTimeout(function(){
            var siteHeader = $('.siteHeader');
            var didScroll;
            var lastScrollTop = 0;
            var delta = 50;
            var navbarHeight = siteHeader.outerHeight();

            $(window).scroll(function(event){
                var siteHeader = $('.siteHeader');
                if($(document).scrollTop() > 67){
                    siteHeader.addClass('siteHeader--shadow');
                }else{
                    siteHeader.removeClass('siteHeader--shadow');
                }
                didScroll = true;
            });

            setInterval(function() {
                if (didScroll) {
                    hasScrolled();
                    didScroll = false;
                }
            }, 250);

            function hasScrolled() {
                var siteHeader = $('.siteHeader');
                var st = $(this).scrollTop();
                
                if(Math.abs(lastScrollTop - st) <= delta)
                    return;
                
                if (st > lastScrollTop && st > navbarHeight){
                    siteHeader.addClass('siteHeader--scrolled');
                } else {
                    if(st + $(window).height() < $(document).height()) {
                        siteHeader.removeClass('siteHeader--scrolled');
                    }
                }
                lastScrollTop = st;
            }
        }, 150);
    });


    /**
     * Form inputs
     */
    $(document).ready(function(){
        let form = $('.contactForm'),
            input = form.find('input'),
            textarea = form.find('textarea');

        $(input).each(function(){
            $(this).on('keyup paste', function(){
                let value = $(this).val();

                if(value !== ''){
                    $(this).addClass('has-value');
                }else{
                    $(this).removeClass('has-value');
                }
            });
        });

        $(textarea).on('keyup paste', function(){
            let value = $(this).val();

            if(value !== ''){
                $(this).addClass('has-value');
            }else{
                $(this).removeClass('has-value');
            }
        });
    });

    /**
     * Form dropdown
     */
    $(document).ready(function(){
        let element = $('.dropdownSelect'),
            selected = element.find('.selected'),
            dropdown = element.find('.dropdown'),
            option = dropdown.find('.dropdown__pos');

        $(selected).on('click', function(){
            $(element).toggleClass('active');
            $(dropdown).slideToggle('fast');
        });
        $(option).each(function(){
            $(this).on('click', function(){
                let value = $(this).attr('value'),
                    mail = $(this).attr('mail');

                $(option).each(function(){
                    $(this).removeClass('active');
                });
                $(this).addClass('active');

                $(element).removeClass('active');
                $(dropdown).slideUp('fast');

                $(selected).find('p').text(value);
                $(selected).attr('value', value);
                $(selected).attr('mail', mail).trigger('change');
            });
        });

        $(selected).on('change', function(){
            if($(this).attr('value') !== 'false'){
                $(this).addClass('has-value');
                $(this).parent().removeClass('input-error');
            }else{
                $(this).removeClass('has-value');
                $(this).parent().addClass('input-error');
            }
        });

        // Hide dropdown on click outer div
        $(document).mouseup(function(e){
            if (!element.is(e.target) && element.has(e.target).length === 0){
                $(element).removeClass('active');
                $(dropdown).slideUp('fast');
            }
        });
    });

    /**
     * Form checkbox
     */
    $(document).ready(function(){

        $('input[name="contactAcceptance"]').on('click', function(){
            if($(this).is(':checked')){
                $(this).parent().addClass('contactForm__acceptance--checked');
                $(this).parent().removeClass('input-error');
            }else{
                $(this).parent().removeClass('contactForm__acceptance--checked');
                $(this).parent().addClass('input-error');
            }
        });
    });

    /**
     * Form submit
     */
    $(document).ready(function(){
        function clearForm(element){
            let form = element,
                input = form.find('input'),
                dropdownSelect = form.find('.dropdownSelect'),
                dropdownSelect_default = dropdownSelect.attr('default'),
                dropdownOption = dropdownSelect.find('.dropdown__pos'),
                textarea = form.find('textarea[name="contactMessage"]');

            // Remove notice
            form.find('.contactForm__notice').removeClass('contactForm__notice--success contactForm__notice--error').find('p').remove();

            $(input).each(function(){
                $(this).val('');
            });

            $(dropdownSelect).find('.selected').removeClass('has-value');
            $(dropdownSelect).find('.selected').attr('value', 'false');
            $(dropdownSelect).find('.selected').find('p').text(dropdownSelect_default);
            $(dropdownOption).each(function(){
                $(this).removeClass('active');
            });

            $(textarea).val('');

            // Remove errors
            input.each(function(){
                $(this).parent().removeClass('input-error');
            });
        }

        function validForm(form){
            let checkbox = form.find('input[name="contactAcceptance"]'),
                inputs = form.find('.contactForm__input').find('input'),
                select = form.find('.dropdownSelect').find('.selected'),
                textarea = form.find('textarea'),
                response = [];

            $(inputs).each(function(){
                if($(this).val() == ''){
                    let name = $(this).attr('name');

                    response.push({name});
                }
            });

            if(select.attr('value') == 'false'){
                let name = select.attr('name');
                response.push({name: 'dropdownSelect'});
            }

            if(textarea.val() == ''){
                let name = $(textarea).attr('name');
                response.push({name});
            }

            if(!$(checkbox).is(':checked')){
                response.push({name: checkbox.attr('name')})
            }

            if(response.length == 0){
                return true;
            }else{
                $.each(response, function(key, value){
                    form.find('input[name="' + value.name + '"]').parent().addClass('input-error');
                    form.find('textarea[name="' + value.name + '"]').parent().addClass('input-error');

                    if(value.name == 'contactAcceptance'){
                        $(checkbox).parent().addClass('input-error');
                    }
                    if(value.name == 'dropdownSelect'){
                        $('.dropdownSelect').addClass('input-error');
                    }
                });
                return false;
            }
        }
        
        $('.contactForm').on('submit', function(e){
            e.preventDefault();

            let form = $(this),
                dropdownSelect = form.find('.dropdownSelect'),
                mailto = dropdownSelect.find('.selected').attr('mail'),
                name = form.find('input[name="contactName"]').val(),
                phone = form.find('input[name="contactPhone"]').val(),
                mail = form.find('input[name="contactEmail"]').val(),
                dropdown = dropdownSelect.find('.selected').attr('value'),
                message = form.find('textarea[name="contactMessage"]').val(),
                valid = validForm(form),
                data = {
                    action: 'contactForm',
                    mailto: mailto,
                    name: name,
                    phone: phone,
                    mail: mail,
                    dropdown: dropdown,
                    message: message,
                };

            if(valid == true){
                $.ajax({
                    type: 'POST',
                    url: mill.ajaxurl,
                    data: data,
                    beforeSend: function(){
                        form.addClass('loading');
                    },
                    success: function(response){
                        console.log(response);
                        if(response == true){
                            form.removeClass('loading');
                            clearForm(form);
                            form.find('.contactForm__notice').addClass('contactForm__notice--success').html('<p>Dziękujemy! Wiadomość została pomyślnie wysłana.</p>');
                            $(form).find('button[type="submit"]').attr('disabled', true).css('filter', 'grayscale(1)');
                        }else{
                            form.removeClass('loading');
                            form.find('.contactForm__notice').addClass('contactForm__notice--error').html('<p>Wystąpił błąd formularza. Spróbuj ponownie później.</p>')
                        }
                    }
                });
            }else{
                form.removeClass('loading');
                form.find('.contactForm__notice').addClass('contactForm__notice--error').html('<p>W formularzu występują błędy. Popraw błędy i spróbuj ponownie.</p>')
            }
        });
    });

    /**
     * Contact autoselect and slide
     */
    $(document).ready(function(){
        $('.to-contact').on('click', function(){
            let value = $(this).attr('value');

            $('html, body').animate({
                scrollTop: $('.footerForm').offset().top
            }, 500);

            setTimeout(function(){
                $('.dropdown__pos[value="' + value + '"]').click();
            }, 400);
        });
    });

    /**
     * Map dropdown mobile
     */
    $(document).ready(function(){
        $('.pos__heading').on('click', function(){
            $(this).parent().toggleClass('pos--active');
            $(this).parent().find('.pos__content').slideToggle();
        });
    });
}(jQuery));